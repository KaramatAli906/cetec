<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

use Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\StrategyInterface;
use Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\Visibility;
use Sugarcrm\Sugarcrm\Elasticsearch\Analysis\AnalysisBuilder;
use Sugarcrm\Sugarcrm\Elasticsearch\Mapping\Mapping;
use Sugarcrm\Sugarcrm\Elasticsearch\Adapter\Document;
use Sugarcrm\Sugarcrm\Elasticsearch\Mapping\Property\MultiFieldProperty;

/**
 * ACL-driven visibility
 * @api
 */
class ACLVisibility extends SugarVisibility implements StrategyInterface
{

    /**
     * {@inheritdoc}
     */
    public function addVisibilityWhere(&$query)
    {
        $action = $this->getOption('action', 'list');
        if ($this->bean->bean_implements('ACL') &&
            !empty($GLOBALS['current_user']->id)
        ) {
            $queryPart = '';
            $actualAccess = ACLAction::getUserAccessLevel(
                $GLOBALS['current_user']->id,
                $this->bean->module_dir,
                $action
            );
            if (ACLController::requireOwner($this->bean->module_dir, $action)) {
                $queryPart = $this->bean->getOwnerWhere(
                    $GLOBALS['current_user']->id,
                    $this->getOption('table_alias')
                );
            }
            if ($query && $queryPart) {
                $query .= " AND $queryPart";
            } elseif ($queryPart) {
                $query = $queryPart;
            }
        }
        return $query;
    }

    /**
     * {@inheritdoc}
     */
    public function addVisibilityWhereQuery(SugarQuery $sugarQuery, $options = array()) {
        $where = null;
        $this->addVisibilityWhere($where, $options);
        if (!empty($where)) {
            $sugarQuery->whereRaw($where);
        }

        return $sugarQuery;
    }

    /**
     * {@inheritdoc}
     */
    public function elasticBuildAnalysis(AnalysisBuilder $analysisBuilder, Visibility $provider)
    {
        // no special analyzers needed
    }

    /**
     * {@inheritdoc}
     */
    public function elasticBuildMapping(Mapping $mapping, Visibility $provider)
    {
        $property = new MultiFieldProperty();
        $property->setType('keyword');
        $mapping->addCommonField('owner_id', 'owner', $property);

    }

    /**
     * {@inheritdoc}
     */
    public function elasticProcessDocumentPreIndex(Document $document, SugarBean $bean, Visibility $provider)
    {
        if ($ownerField = $bean->getOwnerField()) {
            $document->setDataField('owner_id', $bean->$ownerField);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function elasticGetBeanIndexFields($module, Visibility $provider)
    {
        $result = array();
        // retrieve the owner field directly from the bean
        if ($ownerField = $this->bean->getOwnerField()) {
            $result[$ownerField] = 'id';
        }
        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function elasticAddFilters(User $user, \Elastica\Query\BoolQuery $filter, Visibility $provider)
    {
        $accessToHandle = 'list';
        if ($this->bean->bean_implements('ACL')) {
            $actualAccess = ACLAction::getUserAccessLevel($user->id, $this->bean->module_dir, $accessToHandle);

            if (ACLController::requireOwner($this->bean->module_dir, $accessToHandle)) {
                $filter->addMust($provider->createFilter('Owner', ['user' => $user]));
            }
        }
    }
}

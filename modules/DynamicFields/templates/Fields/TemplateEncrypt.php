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

class TemplateEncrypt extends TemplateField
{
	var $type='encrypt';

    /**
     * {@inheritDoc}
     */
    public $len = 255;

	function save($df){
		$this->type = 'encrypt';
		$this->ext3 = 'varchar';
		parent::save($df);

	}

	function get_field_def(){
		$vardef = parent::get_field_def();
		$vardef['dbType'] = $this->ext3;
		return $vardef;
	}
}

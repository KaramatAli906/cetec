<?php

class CETEC_Demo_ProductsApiHelper extends SugarBeanApiHelper
{
    public function formatForApi(\SugarBean $bean, array $fieldList = array(), array $options = array())
    {
        $data = parent::formatForApi($bean, $fieldList, $options);

        $sugarQuery = new SugarQuery();
        $sugarQuery->from(BeanFactory::getBean('CETEC_Demos'));

        $sugarQuery->select()->selectReset();
        $sugarQuery->select()->field('return_state');

        $sugarQuery->join('cetec_demos_cetec_demo_products', array(
            'alias' => 'ddp'
        ))->on()->queryAnd()->equals('ddp.cetec_demos_cetec_demo_productscetec_demo_products_ida', $bean->id);

        $sugarQuery->orderBy('date_modified', 'DESC');
        $sugarQuery->limit(1);

        $data['return_state'] = $sugarQuery->getOne();

        return $data;
    }
}

<?php

$dependencies['CETEC_Demo_Products']['quantity_logic'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('serial_number'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'quantity',
                'label' => 'quantity_label',
                'value' => 'not(equal($serial_number, ""))',
            ),
        ),
        array(
            'name' => 'SetValue',
            'params' => array(
                'target' => 'quantity',
                'label' => 'quantity_label',
                'value' => 'ifElse(not(equal($serial_number, "")), 1, $quantity)',
            ),
        ),
    )
);

<?php

$dependencies['CETEC_Demos']['return_state_required'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('status'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'return_state',
                'label' => 'return_state_label',
                'value' => 'equal($status, "Returned")',
            ),
        ),
    )
);

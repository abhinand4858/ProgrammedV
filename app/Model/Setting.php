<?php
/**
 *
 */
App::uses('AppModel', 'Model');
/**
 * Setting Model
 *
 */
class Setting extends AppModel {
public $displayField = 'id';

public $validate = null;

public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);

    $this->validate = array(
        'my_company_name' => array(
            'rule' => 'notEmpty',
            'message' => __('Company name is required',true)
            ),
        'hourly_rate' => array(
            'rule' => 'notEmpty',
            'message' => __('Hourly rate is required',true)
            ),
        'language' => array(
            'rule' => 'notEmpty',
            'message' => __('Language is required',true)
            ),
    );
}
}

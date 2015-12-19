<?php
/**
*
 */
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

    var $displayField = 'username';

    public function __construct($id = false, $table = null, $ds = null) {
        parent::__construct($id, $table, $ds);
        $this->validate = array(
            'username' => array(
                        'notEmpty' => array(
                            'rule' => 'notEmpty',
                            'message' => __('User name is required',true)
                        ),
                         'unique' => array(
                                'rule' => 'isUnique',
                                'message' => __('User name already in use',true),
                        ),
                        'length' => array(
                            'rule' => array('minLength', 4),
                            'message' => __('Minimun size : 4 characters',true)
                        )),
            'new_password' => array(
                    'notempty' => array(
                            'rule' => array('notempty'),
                            'message' => __('Password is required',true),
                            'on' => 'udpate'
                    ),
                    'length' => array(
                        'rule' => array('minLength', 4),
                        'message' => __('Minimun size : 4 characters',true),
                        'on' => 'update'
                    ),
                    'passwordConfirm' => array(
                        'rule' => 'checkPasswords',
                        'message' => __('Passwords do not match',true),
                        'on' => 'update'
                    )
            )

        );
    }

    function checkPasswords() {
        if ($this->data['User']['new_password'] == $this->data['User']['password_confirm'])  {
            $this->data['User']['password'] = $this->data['User']['tmp_password'];
            return true;
        }

        else
            return false;
    }
}

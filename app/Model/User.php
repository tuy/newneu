<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
* User Model
*
* @property Organization $Organization
*/
class User extends AppModel {
    public $name = 'User';
    public $validate = array(
    'username' => array(
    'required' => array(
    'rule' => array('notEmpty'),
    'message' => 'A username is required'
    )
    ),
    'password' => array(
    'required' => array(
    'rule' => array('notEmpty'),
    'message' => 'A password is required'
    )
    )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
    * belongsTo associations
    *
    * @var array
    */
    public $belongsTo = array(
    'Organization' => array(
    'className' => 'Organization',
    'foreignKey' => 'organization_id',
    'conditions' => '',
    'fields' => '',
    'order' => ''
    )
    );
}

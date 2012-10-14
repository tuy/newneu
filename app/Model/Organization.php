<?php
App::uses('AppModel', 'Model');
/**
* Organization Model
*
* @property Elem $Elem
*/
class Organization extends AppModel {


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
    * hasMany associations
    *
    * @var array
    */
    public $hasMany = array(
    'Elem' => array(
    'className' => 'Elem',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    ),
    'User' => array(
    'className' => 'User',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    ),
    'Service' => array(
    'className' => 'Service',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    ),
    'Qasystem' => array(
    'className' => 'Qasystem',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    ),
    'Culture' => array(
    'className' => 'Culture',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    ),
    'Event' => array(
    'className' => 'Event',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    ),
    'Financial' => array(
    'className' => 'Financial',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    ),
    'Management' => array(
    'className' => 'Management',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    ),
    'Research' => array(
    'className' => 'Research',
    'foreignKey' => 'organization_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
    )
    );

}

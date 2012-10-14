<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 * @property Evtype $Evtype
 * @property Organization $Organization
 * @property Elem $Elem
 * @property Consult $Consult
 */
class Event extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Evtype' => array(
			'className' => 'Evtype',
			'foreignKey' => 'evtype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Organization' => array(
			'className' => 'Organization',
			'foreignKey' => 'organization_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Elem' => array(
			'className' => 'Elem',
			'foreignKey' => 'elem_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Consult' => array(
			'className' => 'Consult',
			'foreignKey' => 'consult_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
    
    public $hasMany = array(
        'Event' => array(
            'className' => 'Event',
            'foreignKey' => 'Elem_id',
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

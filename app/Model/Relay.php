<?php
App::uses('AppModel', 'Model');
/**
 * Relay Model
 *
 * @property Elem $Elem
 */
class Relay extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Elem' => array(
			'className' => 'Elem',
			'foreignKey' => 'relay_id',
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

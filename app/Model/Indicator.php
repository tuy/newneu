<?php
App::uses('AppModel', 'Model');
/**
 * Indicator Model
 *
 * @property Elem $Elem
 */
class Indicator extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Elem' => array(
			'className' => 'Elem',
			'foreignKey' => 'indicator_id',
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

<?php
App::uses('AppModel', 'Model');
/**
 * Evaluate Model
 *
 * @property Elem $Elem
 */
class Evaluate extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Elem' => array(
			'className' => 'Elem',
			'foreignKey' => 'evaluate_id',
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

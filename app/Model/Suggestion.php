<?php
App::uses('AppModel', 'Model');
/**
 * Suggestion Model
 *
 * @property Elem $Elem
 */
class Suggestion extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Elem' => array(
			'className' => 'Elem',
			'foreignKey' => 'suggestion_id',
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

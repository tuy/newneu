<?php
App::uses('AppModel', 'Model');
/**
 * Submanagement Model
 *
 * @property Management $Management
 */
class Submanagement extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Management' => array(
			'className' => 'Management',
			'foreignKey' => 'submanagement_id',
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

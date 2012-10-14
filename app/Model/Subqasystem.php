<?php
App::uses('AppModel', 'Model');
/**
 * Subqasystem Model
 *
 * @property Qasystem $Qasystem
 */
class Subqasystem extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Qasystem' => array(
			'className' => 'Qasystem',
			'foreignKey' => 'subqasystem_id',
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

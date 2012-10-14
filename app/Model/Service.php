<?php
App::uses('AppModel', 'Model');
/**
 * Service Model
 *
 * @property Organization $Organization
 * @property Stype $Stype
 * @property Subservice $Subservice
 */
class Service extends AppModel {


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
		),
		'Stype' => array(
			'className' => 'Stype',
			'foreignKey' => 'stype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Subservice' => array(
			'className' => 'Subservice',
			'foreignKey' => 'subservice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

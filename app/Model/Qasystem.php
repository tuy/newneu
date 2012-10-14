<?php
App::uses('AppModel', 'Model');
/**
 * Qasystem Model
 *
 * @property Organization $Organization
 * @property Year $Year
 * @property Subqasystem $Subqasystem
 */
class Qasystem extends AppModel {


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
		'Year' => array(
			'className' => 'Year',
			'foreignKey' => 'year_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Subqasystem' => array(
			'className' => 'Subqasystem',
			'foreignKey' => 'subqasystem_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

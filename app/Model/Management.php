<?php
App::uses('AppModel', 'Model');
/**
 * Management Model
 *
 * @property Organization $Organization
 * @property Year $Year
 * @property Submanagement $Submanagement
 */
class Management extends AppModel {


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
		'Submanagement' => array(
			'className' => 'Submanagement',
			'foreignKey' => 'submanagement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

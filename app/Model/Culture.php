<?php
App::uses('AppModel', 'Model');
/**
 * Culture Model
 *
 * @property Organization $Organization
 * @property Subcultures $Subcultures
 */
class Culture extends AppModel {


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
		'Subculture' => array(
			'className' => 'Subculture',
			'foreignKey' => 'subculture_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

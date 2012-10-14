<?php
App::uses('AppModel', 'Model');
/**
 * Research Model
 *
 * @property Year $Year
 * @property Rstype $Rstype
 * @property Rscode $Rscode
 * @property Organization $Organization
 * @property Researcher $Researcher
 * @property Subresearch $Subresearch
 */
class Research extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Year' => array(
			'className' => 'Year',
			'foreignKey' => 'year_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rstype' => array(
			'className' => 'Rstype',
			'foreignKey' => 'rstype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rscode' => array(
			'className' => 'Rscode',
			'foreignKey' => 'rscode_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Organization' => array(
			'className' => 'Organization',
			'foreignKey' => 'organization_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Subresearch' => array(
			'className' => 'Subresearch',
			'foreignKey' => 'subresearch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

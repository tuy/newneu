<?php
App::uses('AppModel', 'Model');
/**
 * Financial Model
 *
 * @property Organization $Organization
 * @property Year $Year
 * @property Subfinancial $Subfinancial
 */
class Financial extends AppModel {


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
		'Subfinancial' => array(
			'className' => 'Subfinancial',
			'foreignKey' => 'subfinancial_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

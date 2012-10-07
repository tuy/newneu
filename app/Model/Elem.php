<?php
App::uses('AppModel', 'Model');
/**
 * Elem Model
 *
 * @property Organization $Organization
 * @property Year $Year
 * @property Relay $Relay
 * @property Action $Action
 * @property Indicator $Indicator
 * @property Operation $Operation
 * @property Report $Report
 * @property Evaluate $Evaluate
 * @property Suggestion $Suggestion
 */
class Elem extends AppModel {


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
		'Relay' => array(
			'className' => 'Relay',
			'foreignKey' => 'relay_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Action' => array(
			'className' => 'Action',
			'foreignKey' => 'action_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Indicator' => array(
			'className' => 'Indicator',
			'foreignKey' => 'indicator_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Operation' => array(
			'className' => 'Operation',
			'foreignKey' => 'operation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Report' => array(
			'className' => 'Report',
			'foreignKey' => 'report_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Evaluate' => array(
			'className' => 'Evaluate',
			'foreignKey' => 'evaluate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Suggestion' => array(
			'className' => 'Suggestion',
			'foreignKey' => 'suggestion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

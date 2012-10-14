<?php
App::uses('AppModel', 'Model');
/**
 * Rstype Model
 *
 * @property Research $Research
 */
class Rstype extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Research' => array(
			'className' => 'Research',
			'foreignKey' => 'rstype_id',
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

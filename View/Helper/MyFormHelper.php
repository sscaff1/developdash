<?php
App::uses('FormHelper', 'View/Helper');

class MyFormHelper extends FormHelper {
	public function create($model = null, $options = array()) {
		$defaultOptions = array(
			'class' => 'pure-form pure-form-stacked'
		);
		$options = Hash::merge($defaultOptions, $options);
		return parent::create($model, $options);
	}
}
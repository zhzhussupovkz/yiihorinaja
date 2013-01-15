<?php

/*
* yiiHorinaja widget class file - gallery photos on your site
* @author Zhussupov Zhassulan <zhzhussupovkz@gmail.com>
* @version: 1.0
* MADE IN KAZAKHSTAN
*/

class yiiHorinaja extends CWidget
{
	//id tag
	public $id = 'demo';

	//delay
	public $delay = 0.3;

	//duration
	public $duration = 4;

	//pagination: 'true' or 'false'
	public $pagination = 'true';

	//run widget
	public function run()
	{
		$this->allScripts();
		$script = 'document.observe("dom:loaded", 
			function() {
				new Horinaja(
					"'.$this->id.'",
					'.$this->delay.',
					'.$this->duration.',
					'.$this->pagination.'
					);
			});';
		Yii::app()->clientScript->registerScript('yiiHorinaja', $script, CClientScript::POS_END);
	}

	//access Horinaja 
	protected function allScripts()
	{
		$assets=dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		$baseUrl=Yii::app()->assetManager->publish($assets);
		if(is_dir($assets))
		{
			Yii::app()->clientScript->registerScriptFile($baseUrl.'/prototype.js');
			Yii::app()->clientScript->registerScriptFile($baseUrl.'/scriptaculous.js');
			Yii::app()->clientScript->registerScriptFile($baseUrl.'/class.horinaja.js');
			Yii::app()->clientScript->registerCssFile($baseUrl.'/horinaja.css');
		}
		else
		{
			throw new Exception('Error in yiiHorinaja widget! Cannot access assets folder');
		}
	}
}
?>
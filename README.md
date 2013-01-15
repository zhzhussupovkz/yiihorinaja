yiihorinaja
===========

yiiHorinaja - extension for yii framework, for create slides, gallery. www.horinaja.com

INSTALL

1.Download extension from https://github.com/zhzhussupovkz/yiihorinaja.git to protected/extensions.

USAGE

1.Create some image links in your page.For example:

<div id="demo" class="horinaja">
<ul>
<?php 
	for ($i = 1; $i <= 6; $i++)
	{
		echo '<li>'.CHtml::image(
			Yii::app()->request->baseUrl.'/images/'.$i.'.jpg','',
			array('width'=>300, 'height' => 225)).'</li>';
	}
?>
</ul>
</div>

2.Run a widget

<?php 
	$this->widget('ext.yiiHorinaja.yiiHorinaja', array(
		'id' => 'demo',
		'delay' => 0.5,
		'duration' => 4,
		'pagination' => 'true',
		));
?>

<?php
/* @var $this BoiController */
/* @var $model Boi */

$this->breadcrumbs=array(
	'Bois'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Create Boi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
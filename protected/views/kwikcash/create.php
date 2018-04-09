<?php
/* @var $this KwikcashController */
/* @var $model Kwikcash */

$this->breadcrumbs=array(
	'Kwikcashes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kwikcash', 'url'=>array('index')),
	array('label'=>'Manage Kwikcash', 'url'=>array('admin')),
);
?>

<h1>Create Kwikcash</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
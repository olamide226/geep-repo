<?php
/* @var $this MfbController */
/* @var $model Mfb */

$this->breadcrumbs=array(
	'Mfbs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mfb', 'url'=>array('index')),
	array('label'=>'Manage Mfb', 'url'=>array('admin')),
);
?>

<h1>Create Mfb</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
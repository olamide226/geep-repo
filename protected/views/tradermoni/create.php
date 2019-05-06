<?php
/* @var $this TradermoniController */
/* @var $model Tradermoni */

$this->breadcrumbs=array(
	'Tradermonis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tradermoni', 'url'=>array('index')),
	array('label'=>'Manage Tradermoni', 'url'=>array('admin')),
);
?>

<h1>Create Tradermoni</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
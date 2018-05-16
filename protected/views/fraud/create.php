<?php
/* @var $this FraudController */
/* @var $model Fraud */

$this->breadcrumbs=array(
	'Frauds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fraud', 'url'=>array('index')),
	array('label'=>'Manage Fraud', 'url'=>array('admin')),
);
?>

<h1>Create Fraud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
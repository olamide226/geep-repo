<?php
/* @var $this FraudController */
/* @var $model Fraud */

$this->breadcrumbs=array(
	'Frauds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fraud', 'url'=>array('index')),
	array('label'=>'Create Fraud', 'url'=>array('create')),
	array('label'=>'View Fraud', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Fraud', 'url'=>array('admin')),
);
?>

<h1>Update Fraud <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
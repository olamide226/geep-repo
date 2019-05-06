<?php
/* @var $this TradermoniController */
/* @var $model Tradermoni */

$this->breadcrumbs=array(
	'Tradermonis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tradermoni', 'url'=>array('index')),
	array('label'=>'Create Tradermoni', 'url'=>array('create')),
	array('label'=>'View Tradermoni', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tradermoni', 'url'=>array('admin')),
);
?>

<h1>Update Tradermoni <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
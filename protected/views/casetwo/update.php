<?php
/* @var $this CasetwoController */
/* @var $model Casetwo */

$this->breadcrumbs=array(
	'Casetwos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List MarketMoni Registrations', 'url'=>array('index')),
	array('label'=>'Create MarketMoni Registration', 'url'=>array('create')),
	array('label'=>'View MarketMoni Registration', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MarketMoni Registrations', 'url'=>array('admin')),
);
?>

<h1>Update MarketMoni Registration <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
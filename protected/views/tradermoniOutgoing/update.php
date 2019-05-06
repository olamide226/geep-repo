<?php
/* @var $this TradermoniOutgoingController */
/* @var $model TradermoniOutgoing */

$this->breadcrumbs=array(
	'Tradermoni Outgoings'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TradermoniOutgoing', 'url'=>array('index')),
	array('label'=>'Create TradermoniOutgoing', 'url'=>array('create')),
	array('label'=>'View TradermoniOutgoing', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TradermoniOutgoing', 'url'=>array('admin')),
);
?>

<h1>Update TradermoniOutgoing <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
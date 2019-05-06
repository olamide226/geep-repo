<?php
/* @var $this TradermoniOutgoingController */
/* @var $model TradermoniOutgoing */

$this->breadcrumbs=array(
	'Tradermoni Outgoings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TradermoniOutgoing', 'url'=>array('index')),
	array('label'=>'Manage TradermoniOutgoing', 'url'=>array('admin')),
);
?>

<h1>Create TradermoniOutgoing</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
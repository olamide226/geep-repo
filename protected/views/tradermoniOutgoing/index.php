<?php
/* @var $this TradermoniOutgoingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tradermoni Outgoings',
);

$this->menu=array(
	array('label'=>'Create TradermoniOutgoing', 'url'=>array('create')),
	array('label'=>'Manage TradermoniOutgoing', 'url'=>array('admin')),
);
?>

<h1>Tradermoni Outgoing Calls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

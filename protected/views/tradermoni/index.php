<?php
/* @var $this TradermoniController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tradermoni',
);

$this->menu=array(
	array('label'=>'Create Tradermoni', 'url'=>array('create')),
	array('label'=>'Manage Tradermoni', 'url'=>array('admin')),
);
?>

<h1>Tradermonis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

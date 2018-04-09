<?php
/* @var $this FraudController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frauds',
);

$this->menu=array(
	array('label'=>'Create Fraud', 'url'=>array('create')),
	array('label'=>'Manage Fraud', 'url'=>array('admin')),
);
?>

<h1>Frauds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

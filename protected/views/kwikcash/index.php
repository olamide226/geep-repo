<?php
/* @var $this KwikcashController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kwikcashes',
);

$this->menu=array(
	array('label'=>'Create Kwikcash', 'url'=>array('create')),
	array('label'=>'Manage Kwikcash', 'url'=>array('admin')),
);
?>

<h1>Kwikcashes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

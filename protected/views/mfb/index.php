<?php
/* @var $this MfbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mfbs',
);

$this->menu=array(
	//array('label'=>'Create Mfb', 'url'=>array('create')),
	array('label'=>'Manage Mfb', 'url'=>array('admin')),
);
?>

<h1>Mfbs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

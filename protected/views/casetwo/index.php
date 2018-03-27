<?php
/* @var $this CasetwoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'DTA Registrations',
);

$this->menu=array(
	array('label'=>'Create new DTA Registration', 'url'=>array('create')),
	array('label'=>'Manage DTA Registrations', 'url'=>array('admin')),
);
?>

<h1>DTA Registrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

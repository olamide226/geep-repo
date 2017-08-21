<?php
/* @var $this CasetwoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'MarketMoni Registrations',
);

$this->menu=array(
	array('label'=>'Create new MarketMoni Registration', 'url'=>array('create')),
	array('label'=>'Manage MarketMoni Registrations', 'url'=>array('admin')),
);
?>

<h1>MarketMoni Registrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

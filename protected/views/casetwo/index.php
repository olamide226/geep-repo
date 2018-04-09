<?php
/* @var $this CasetwoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'DTA Registrations',
);

$this->menu=array(
	array('label'=>'Loan processing issue (Aggregator)', 'url'=>array('casetwo/aggregator')),
	array('label'=>'Loan processing issue (DTA)', 'url'=>array('casetwo/dta')),
	array('label'=>'Manage DTA Registrations', 'url'=>array('admin')),
);
?>

<h1>DTA Registrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

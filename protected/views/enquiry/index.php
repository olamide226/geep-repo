<?php
/* @var $this EnquiryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enquiries',
);

$this->menu=array(
	array('label'=>'Create Enquiry', 'url'=>array('create')),
	array('label'=>'Manage Enquiry', 'url'=>array('admin')),
);
?>

<h1>Enquiries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

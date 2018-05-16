<?php
/* @var $this EnquiryController */
/* @var $model Enquiry */

$this->breadcrumbs=array(
	'Enquiries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enquiry', 'url'=>array('index')),
	array('label'=>'Create Enquiry', 'url'=>array('create')),
	array('label'=>'View Enquiry', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Enquiry', 'url'=>array('admin')),
);
?>

<h1>Update Enquiry <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
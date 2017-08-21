<?php
/* @var $this EnquiryController */
/* @var $model Enquiry */

$this->breadcrumbs=array(
	'Enquiries'=>array('index'),
	$model->id,
);
if(Yii::app()->user->id=='admin' ) {
    $this->menu = array(
        array('label' => 'List Enquiry', 'url' => array('index')),
        array('label' => 'Create Enquiry', 'url' => array('create')),
        array('label' => 'Update Enquiry', 'url' => array('update', 'id' => $model->id)),
        array('label' => 'Delete Enquiry', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage Enquiry', 'url' => array('admin')),
    );
}
else{

    $this->menu = array(
        array('label' => 'List Enquiry', 'url' => array('index')),
        array('label' => 'Create Enquiry', 'url' => array('create')),
        array('label' => 'Update Enquiry', 'url' => array('update', 'id' => $model->id)),
       // array('label' => 'Delete Enquiry', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage Enquiry', 'url' => array('admin')),
    );
}
?>

<h1>View Enquiry #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_name',
		'phone_number',
		'date',
		'association',
		'complaints',
		'other_comments',
		'response',
		'created_by',
        'source',
	),
)); ?>

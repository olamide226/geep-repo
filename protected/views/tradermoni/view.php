<?php
/* @var $this TradermoniController */
/* @var $model Tradermoni */

$this->breadcrumbs=array(
	'Tradermonis'=>array('index'),
	$model->id,
);
if(Yii::app()->user->id=='admin' ) {
    $this->menu = array(
        array('label' => 'List Tradermoni', 'url' => array('index')),
        array('label' => 'Create Tradermoni', 'url' => array('create')),
        array('label' => 'Update Tradermoni', 'url' => array('update', 'id' => $model->id)),
        array('label' => 'Delete Tradermoni', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage Tradermoni', 'url' => array('admin')),
    );
}
else{

    $this->menu = array(
        array('label' => 'List Tradermoni', 'url' => array('index')),
        array('label' => 'Create Tradermoni', 'url' => array('create')),
        array('label' => 'Update Tradermoni', 'url' => array('update', 'id' => $model->id)),
       // array('label' => 'Delete Enquiry', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage Tradermoni', 'url' => array('admin')),
    );
}
?>

<h1>View Tradermoni #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		'customer_name',
		'phone_no',
		'date_created',
		'complaints',
		'other_comments',
		'response',
		'created_by',
		'source',
		'call_source',
	),
)); ?>

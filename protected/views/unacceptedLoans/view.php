<?php
/* @var $this UnacceptedLoansController */
/* @var $model UnacceptedLoans */

$this->breadcrumbs=array(
	'Unaccepted Loans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UnacceptedLoans', 'url'=>array('index')),
	array('label'=>'Create UnacceptedLoans', 'url'=>array('create')),
	array('label'=>'Update UnacceptedLoans', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UnacceptedLoans', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnacceptedLoans', 'url'=>array('admin')),
);
?>

<h1>View UnacceptedLoans #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_name',
		'phone_number',
		'association',
		'state',
		'date_offer_was_sent',
		'amount',
		'sub_aggregators',
		'date_loan_was_requested',
		'beneficiaries_institution',
		'date_received',
	),
)); ?>

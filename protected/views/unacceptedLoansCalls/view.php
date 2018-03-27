<?php
/* @var $this UnacceptedLoansCallsController */
/* @var $model UnacceptedLoansCalls */

$this->breadcrumbs=array(
	'Unaccepted Loans Calls'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List UnacceptedLoansCalls', 'url'=>array('index')),
	//array('label'=>'Create UnacceptedLoansCalls', 'url'=>array('create')),
	array('label'=>'Update Unaccepted Loans Call', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete UnacceptedLoansCalls', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Unaccepted Loans Calls', 'url'=>array('admin')),
);
?>

<h1>View Unaccepted Loan Call <?php echo $model->id; ?></h1>

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
		'tenure',
		'sub_aggregators',
		'date_loan_was_requested',
		'beneficiaries_institution',
		'status',
		'date_received',
		'comment',
		'interest',
		'agent_comment',
		'call_duration',
		'created_on',
		'created_by',
	),
)); ?>

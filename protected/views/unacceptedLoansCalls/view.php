<?php
/* @var $this UnacceptedLoansCallsController */
/* @var $model UnacceptedLoansCalls */

$this->breadcrumbs=array(
	'Unaccepted Loans Calls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UnacceptedLoansCalls', 'url'=>array('index')),
	array('label'=>'Create UnacceptedLoansCalls', 'url'=>array('create')),
	array('label'=>'Update UnacceptedLoansCalls', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UnacceptedLoansCalls', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnacceptedLoansCalls', 'url'=>array('admin')),
);
?>

<h1>View UnacceptedLoansCalls #<?php echo $model->id; ?></h1>

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
		'comment',
		'interest',
		'agent_comment',
		'created_on',
		'created_by',
	),
)); ?>

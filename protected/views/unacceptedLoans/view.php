<?php
/* @var $this UnacceptedLoansController */
/* @var $model UnacceptedLoans */

$this->breadcrumbs=array(
	'Unaccepted Loans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Unaccepted Loans', 'url'=>array('index')),
	//array('label'=>'Create UnacceptedLoans', 'url'=>array('create')),
	//array('label'=>'Update UnacceptedLoans', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete UnacceptedLoans', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Unaccepted Loans', 'url'=>array('admin')),
);
?>

<h1>View Unaccepted Loan <?php echo $model->id; ?></h1>
<div class="row" >
    <div class="col-md-6">
    <?php  $this->renderPartial('call', ['model'=>$model2,'model2'=>$model]);  ?>
    </div>


    <div class="col-md-6">
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
	),
)); ?>
    </div>
</div>
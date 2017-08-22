<?php
/* @var $this UnacceptedLoansCallsController */
/* @var $model UnacceptedLoansCalls */

$this->breadcrumbs=array(
	'Unaccepted Loans Calls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List UnacceptedLoansCalls', 'url'=>array('index')),
	//array('label'=>'Create UnacceptedLoansCalls', 'url'=>array('create')),
	//array('label'=>'View UnacceptedLoansCalls', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Unaccepted Loan Calls', 'url'=>array('admin')),
);
?>

<h1>Update Unaccepted Loan Calls <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
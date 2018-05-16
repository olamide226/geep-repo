<?php
/* @var $this UnacceptedLoansCallsController */
/* @var $model UnacceptedLoansCalls */

$this->breadcrumbs=array(
	'Unaccepted Loans Calls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Unaccepted Loan Calls', 'url'=>array('index')),
	array('label'=>'Manage Unaccepted Loan Calls', 'url'=>array('admin')),
);
?>

<h1>Create Unaccepted Loans Calls</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
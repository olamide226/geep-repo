<?php
/* @var $this UnacceptedLoansCallsController */
/* @var $model UnacceptedLoansCalls */

$this->breadcrumbs=array(
	'Unaccepted Loans Calls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnacceptedLoansCalls', 'url'=>array('index')),
	array('label'=>'Manage UnacceptedLoansCalls', 'url'=>array('admin')),
);
?>

<h1>Create UnacceptedLoansCalls</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this UnacceptedLoansController */
/* @var $model UnacceptedLoans */

$this->breadcrumbs=array(
	'Unaccepted Loans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnacceptedLoans', 'url'=>array('index')),
	array('label'=>'Manage UnacceptedLoans', 'url'=>array('admin')),
);
?>

<h1>Create Unaccepted Loans</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
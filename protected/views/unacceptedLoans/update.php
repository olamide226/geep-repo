<?php
/* @var $this UnacceptedLoansController */
/* @var $model UnacceptedLoans */

$this->breadcrumbs=array(
	'Unaccepted Loans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Unaccepted Loans', 'url'=>array('index')),
	array('label'=>'Create Unaccepted Loan', 'url'=>array('create')),
	array('label'=>'View Unaccepted Loans', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Unaccepted Loans', 'url'=>array('admin')),
);
?>

<h1>Update Unaccepted Loan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
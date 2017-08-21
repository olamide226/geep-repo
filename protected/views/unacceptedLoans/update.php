<?php
/* @var $this UnacceptedLoansController */
/* @var $model UnacceptedLoans */

$this->breadcrumbs=array(
	'Unaccepted Loans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnacceptedLoans', 'url'=>array('index')),
	array('label'=>'Create UnacceptedLoans', 'url'=>array('create')),
	array('label'=>'View UnacceptedLoans', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UnacceptedLoans', 'url'=>array('admin')),
);
?>

<h1>Update UnacceptedLoans <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
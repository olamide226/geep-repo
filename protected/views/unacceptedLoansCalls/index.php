<?php
/* @var $this UnacceptedLoansCallsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unaccepted Loans Calls',
);

$this->menu=array(
	array('label'=>'Create Unaccepted Loan Call', 'url'=>array('create')),
	array('label'=>'Manage Unaccepted Loan Calls', 'url'=>array('admin')),
);
?>

<h1>Unaccepted Loans Calls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

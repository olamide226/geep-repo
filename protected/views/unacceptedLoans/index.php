<?php
/* @var $this UnacceptedLoansController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unaccepted Loans',
);

$this->menu=array(
	//array('label'=>'Create UnacceptedLoans', 'url'=>array('create')),
	array('label'=>'Manage Unaccepted Loans', 'url'=>array('admin')),
);
?>

<h1>Unaccepted Loans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

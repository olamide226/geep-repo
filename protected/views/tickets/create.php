<?php
/* @var $this TicketsController */
/* @var $model Tickets */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Tickets', 'url'=>array('index')),
	array('label'=>'Manage Tickets', 'url'=>array('admin')),
);
?>

<h1>Generate Ticket</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
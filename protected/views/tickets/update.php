<?php
/* @var $this TicketsController */
/* @var $model Tickets */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->ticket_number=>array('view','id'=>$model->ticket_number),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Tickets', 'url'=>array('index')),
	array('label'=>'Generate Ticket', 'url'=>array('create')),
	array('label'=>'View Tickets', 'url'=>array('view', 'id'=>$model->ticket_number)),
	array('label'=>'Manage Tickets', 'url'=>array('admin')),
);
?>

<h1>Update Tickets <?php echo $model->ticket_number; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
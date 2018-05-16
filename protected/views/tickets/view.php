<?php
/* @var $this TicketsController */
/* @var $model Tickets */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->ticket_number,
);
if(Yii::app()->user->id=='admin') {
    $this->menu = array(
        array('label' => 'List Tickets', 'url' => array('index')),
        array('label' => 'Generate Ticket', 'url' => array('create')),
        array('label' => 'Update Tickets', 'url' => array('update', 'id' => $model->ticket_number)),
        array('label' => 'Delete Tickets', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->ticket_number), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage Tickets', 'url' => array('admin')),
    );
}
else{
    $this->menu = array(
        array('label' => 'List Tickets', 'url' => array('index')),
        array('label' => 'Generate Ticket', 'url' => array('create')),
        array('label' => 'Update Tickets', 'url' => array('update', 'id' => $model->ticket_number)),
        //array('label' => 'Delete Tickets', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->ticket_number), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage Tickets', 'url' => array('admin')),
    );
}


?>

<h1>View Tickets #<?php echo $model->ticket_number; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ticket_number',
		'customer_name',
		'member_id',
		'phone_number',
		'other_contact_information',
		'issue',
		'ticket_date',
		'advised_course_of_action',
		'boi_status',
		'created_by',
	),
)); ?>

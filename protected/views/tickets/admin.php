<?php
/* @var $this TicketsController */
/* @var $model Tickets */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Tickets', 'url'=>array('index')),
	array('label'=>'Generate Ticket', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tickets-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tickets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tickets-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
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
		array(
			'class'=>'CButtonColumn',
            'template' => '{view},{update}',
		),
	),
)); ?>
<?php
if(Yii::app()->user->id=='admin' ||Yii::app()->user->id=='Cynthia_Onwumah' ||Yii::app()->user->id== 'Isaac_Fasoyin' ){
    echo CHtml::button("Export today's Tickets Report", array('submit' => array('tickets/excelDaily')));
    echo'<br/>';
    echo'<br/>';
    echo CHtml::button('Export entire Tickets Report', array('submit' => array('tickets/excel')));
}
?>
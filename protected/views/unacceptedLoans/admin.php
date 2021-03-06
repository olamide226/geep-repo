<?php
/* @var $this UnacceptedLoansController */
/* @var $model UnacceptedLoans */

$this->breadcrumbs=array(
	'Unaccepted Loans'=>array('index'),
	'Manage',
);

$this->menu=array(
    array('label'=>'Back', 'url'=>array('boi/admin')),
	array('label'=>'List Unaccepted Loans', 'url'=>array('index')),
	//array('label'=>'Create UnacceptedLoans', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unaccepted-loans-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Unaccepted Loans</h1>

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
	'id'=>'unaccepted-loans-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'customer_name',
		'phone_number',
		'association',
		'state',
		'date_offer_was_sent',
        'status',
        'date_loan_was_requested',
        'date_received',
		/*
		'amount',
		'sub_aggregators',

		'beneficiaries_institution',

		*/
		array(
			'class'=>'CButtonColumn',
            'template' => '{view}',
		),
	),
)); ?>

<?php
/* @var $this UnacceptedLoansCallsController */
/* @var $model UnacceptedLoansCalls */

$this->breadcrumbs=array(
	'Unaccepted Loans Calls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UnacceptedLoansCalls', 'url'=>array('index')),
	array('label'=>'Create UnacceptedLoansCalls', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unaccepted-loans-calls-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Unaccepted Loans Calls</h1>

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
	'id'=>'unaccepted-loans-calls-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'customer_name',
		'phone_number',
		'association',
		'state',
		'date_offer_was_sent',
		/*
		'amount',
		'sub_aggregators',
		'date_loan_was_requested',
		'beneficiaries_institution',
		'date_received',
		'comment',
		'interest',
		'agent_comment',
		'created_on',
		'created_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
/* @var $this TradermoniOutgoingController */
/* @var $model TradermoniOutgoing */

$this->breadcrumbs=array(
	'Tradermoni Outgoings'=>array('index'),
	'Manage',
);

$this->menu=array(
	// array('label'=>'List TradermoniOutgoing', 'url'=>array('index')),
	array('label'=>'Create TradermoniOutgoing', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tradermoni-outgoing-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tradermoni Outgoing Calls</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tradermoni-outgoing-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		'name',
		'phone_no',
		// 'status',
		'reason',
		array(
			'class'=>'CButtonColumn',
			'template' => '{view},{update}'
		),
	),
)); ?>

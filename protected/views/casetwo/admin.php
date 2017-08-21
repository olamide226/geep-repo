<?php
/* @var $this CasetwoController */
/* @var $model Casetwo */

$this->breadcrumbs=array(
	'MarketMoni '=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MarketMoni Registrations', 'url'=>array('index')),
	array('label'=>'New MarketMoni Registration', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#casetwo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage MarketMoni Registrations</h1>

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
	'id'=>'casetwo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'customer_name',
		'phone_number',
		'date',
		'association',
		'complaints',
		'other_comments',
		'created_by',
		'source',

		/*
		'response',
		*/
		array(

            'template' => '{view}',
			'class'=>'CButtonColumn',

		),
	),
)); ?>




<?php
if(Yii::app()->user->id=='admin' ||Yii::app()->user->id=='Cynthia_Onwumah' ||Yii::app()->user->id== 'Isaac_Fasoyin' ){
    echo CHtml::button("Export today's MarketMoni Report", array('submit' => array('casetwo/excelDaily')));
    echo'<br/>';
    echo'<br/>';
echo CHtml::button('Export entire MarketMoni Report', array('submit' => array('casetwo/excel')));
}
?>


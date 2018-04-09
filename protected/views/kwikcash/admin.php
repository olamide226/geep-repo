<?php
/* @var $this KwikcashController */
/* @var $model Kwikcash */

$this->breadcrumbs=array(
	'Kwikcashes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Kwikcash', 'url'=>array('index')),
	array('label'=>'Create Kwikcash', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kwikcash-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Kwikcashes</h1>

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
	'id'=>'kwikcash-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'customer_name',
		'cust_phone_number',
		'complaints',
		'response',
		'action',
		/*
		'created_by',
		'date_created',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


<?php if(Yii::app()->user->id == 'admin' || Yii::app()->user->id=='Cynthia_Onwumah' || Yii::app()->user->id== 'Isaac_Fasoyin' ): ?>

	<form method="POST" action = <?= $this->createUrl('Kwikcash/excel')?> >
		<div class='row' style="margin-bottom:30px">
			<div class='col-md-3'>
				<input name= 'start_date' class='form-control' type='date'></input>
			</div>
			
			<div class='col-md-3'>
				<input name="end_date" class='form-control' type='date' ></input>
			</div>
			
			<div class='col-md-2'>
				 <input type="submit" name="submit" value="Export entire Kwikcash Report" class="form-control" /> 
				
			</div>
		</div>
	
	</form>

	<?php echo CHtml::button("Export today's Kwikcash Report", array('submit' => array('Kwikcash/excelDaily'))); ?>
<?php endif; ?>




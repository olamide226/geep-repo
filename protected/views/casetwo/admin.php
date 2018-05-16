<?php
/* @var $this CasetwoController */
/* @var $model Casetwo */

$this->breadcrumbs=array(
	'MarketMoni '=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DTA Registrations', 'url'=>array('index')),
	array('label'=>'New DTA Registration', 'url'=>array('dta')),
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

<h1>Manage DTA Registrations</h1>

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
		'cust_phone_number',
		// 'agent_name',
		// 'agent_phn_number',
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




<?php if(strtolower(Yii::app()->user->id) == 'admin' ||strtolower(Yii::app()->user->id)== 'isaac_fasoyin' ): ?>
	<form method="POST" action = <?= $this->createUrl('casetwo/excel')?> >
		<div class='row' style="margin-bottom:30px">
			<div class='col-md-3'>
				<input name= 'start_date' class='form-control' type='date'></input>
			</div>
			
			<div class='col-md-3'>
				<input name="end_date" class='form-control' type='date' ></input>
			</div>
			
			<div class='col-md-3'>
				<select name="application_source" class="form-control" >
					<option value="" >Select Source</option>
					<option value="Dta" >DTA</option>
					<option value="Aggregator">Aggregator</option>
					
				</select>			
			</div>
			
			<div class='col-md-3'>
				 <input type="submit" name="submit" value="Export DTA Report" class="form-control btn btn-primary" /> 
				
			</div>
		</div>
	</form>	
	
	<?php echo CHtml::button("Export today's DTA Report", array('submit' => array('casetwo/excelDaily'))); ?>
<?php endif; ?>




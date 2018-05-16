<?php
/* @var $this EnquiryController */
/* @var $model Enquiry */

$this->breadcrumbs=array(
	'Enquiries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Enquiry', 'url'=>array('index')),
	array('label'=>'Create Enquiry', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#enquiry-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Enquiries</h1>

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
	'id'=>'enquiry-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'customer_name',
		'cust_phone_number',
		'date',
		'association',
		'complaints',
		'other_comments',
		'response',
		'created_by',
        'source',
		array(
            'template' => '{view}',
			'class'=>'CButtonColumn',

		),
	),
)); ?>
<?php if(Yii::app()->user->id=='admin' ||Yii::app()->user->id=='Cynthia_Onwumah' ||Yii::app()->user->id== 'Isaac_Fasoyin' ):?>
	
	<form method="POST" action = <?= $this->createUrl('enquiry/excel')?> >
		<div class='row' style="margin-top:30px">
			<div class='col-md-3'>
				<input name= 'start_date' class='form-control' type='date'></input>
			</div>
			
			<div class='col-md-3'>
				<input name="end_date" class='form-control' type='date' ></input>
			</div>
			
			
			<div class='col-md-2'>
				 <input type="submit" name="submit" value="Export Enquiry Report" class="form-control" /> 
				
			</div>
		</div>
	</form>
	
	<?= CHtml::button("Export today's Enquiry Report", array('submit' => array('enquiry/excelDaily'))); ?>
	
<?php endif ;?>



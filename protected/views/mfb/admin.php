<?php
/* @var $this MfbController */
/* @var $model Mfb */

$this->breadcrumbs=array(
	'Mfbs'=>array('index'),
	'Manage',
);

$this->menu=array(
    array('label'=>'Back', 'url'=>array('boi/admin')),
	array('label'=>'List Mfb', 'url'=>array('index')),
	//array('label'=>'Create Mfb', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mfb-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mfbs</h1>

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
	'id'=>'mfb-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'sn',
		'name',
		'contact_status',
		'state',
		'status',
        'means_of_contact',
        'response_status',
        'created_by',
        'contact_date',

		/*
		* 'certificate_of_incorporation',
		'c_o_i_comments',
		'forms_CAC2_CAC7',
		'cac2_7_comments',
		'form_CAC2_1',
		'cac2_1_comments',
		'cbn_license',
		'cbn_license_comments',
		'memart',
		'memart_comments',
		'directors_management_profile',
		'directors_profile_comments',
		'bvn_details',
		'bvn_details_comments',
		'company_profile',
		'company_profile_comments',
		'audit_statements',
		'audit_statements_comments',
		'contact_details',
		'general_comments',


		'date_received',
		*/
		array(
			'class'=>'CButtonColumn',
            'template' => '{view},{update}',

		),
	),
)); ?>

<?php
if(Yii::app()->user->id=='admin' ||Yii::app()->user->id=='Cynthia_Onwumah' ||Yii::app()->user->id== 'Isaac_Fasoyin' ){
    echo CHtml::button("Export today's MFB Report", array('submit' => array('mfb/excelDaily')));
    echo'<br/>';
    echo'<br/>';
    echo CHtml::button('Export entire MFB Report', array('submit' => array('mfb/excel')));
}
?>


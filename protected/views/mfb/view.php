<?php
/* @var $this MfbController */
/* @var $model Mfb */

$this->breadcrumbs=array(
	'Mfbs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Mfb', 'url'=>array('index')),
	//array('label'=>'Create Mfb', 'url'=>array('create')),
	array('label'=>'Update Mfb', 'url'=>array('update', 'id'=>$model->sn)),
	//array('label'=>'Delete Mfb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sn),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mfb', 'url'=>array('admin')),
);
?>

<h1>View <?php echo $model->name; ?></h1>
<div class="row">
    <div class="col-md-6">
        <?php $this->widget('zii.widgets.CDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                //'sn',
                'name',

                'state',
                'status',
                'certificate_of_incorporation',

                'forms_CAC2_CAC7',

                'form_CAC2_1',

                'cbn_license',

                'memart',

                'directors_management_profile',

                'bvn_details',

                'company_profile',

                'audit_statements',

                'contact_details',

                'date_received',
            ),
        )); ?>

    </div>

    <div class="col-md-6">
        <?php $this->widget('zii.widgets.CDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                'contact_status',

                'c_o_i_comments',

                'cac2_7_comments',

                'cac2_1_comments',

                'cbn_license_comments',

                'memart_comments',

                'directors_profile_comments',

                'bvn_details_comments',

                'company_profile_comments',

                'audit_statements_comments',

                'general_comments',
                'contacted_person',
                'created_by',
                'contact_date',
            ),
        )); ?>

    </div>


</div>

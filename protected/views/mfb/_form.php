<?php
/* @var $this MfbController */
/* @var $model Mfb */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mfb-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


    <!-- Beginning of first -->

    <div class="row">

        <?php echo $form->labelEx($model,'sn'); ?>
        <?php echo $form->textField($model,'sn',array('readonly' => true)); ?>
        <?php echo $form->error($model,'sn'); ?>

    </div>

    <div class="row">

        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name',array('size'=>70,'maxlength'=>100,'class'=>'form-control', 'readonly' => true)); ?>
        <?php echo $form->error($model,'name'); ?>

    </div>

    <div class="row">

        <?php echo $form->labelEx($model,'state'); ?>
        <?php echo $form->textField($model,'state',array('size'=>20,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
        <?php echo $form->error($model,'state'); ?>

    </div>

    <div class="row">

        <?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50,'class'=>'form-control','readonly' => true)); ?>
        <?php echo $form->error($model,'status'); ?>

    </div>





    <div class="row">
        <div class="col-md-6">




            <div class="row">
                <?php echo $form->labelEx($model,'certificate_of_incorporation'); ?>
                <?php echo $form->textField($model,'certificate_of_incorporation',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'certificate_of_incorporation'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model,'forms_CAC2_CAC7'); ?>
                <?php echo $form->textField($model,'forms_CAC2_CAC7',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'forms_CAC2_CAC7'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model,'form_CAC2_1'); ?>
                <?php echo $form->textField($model,'form_CAC2_1',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'form_CAC2_1'); ?>
            </div>


            <div class="row">
                <?php echo $form->labelEx($model,'cbn_license'); ?>
                <?php echo $form->textField($model,'cbn_license',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'cbn_license'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model,'memart'); ?>
                <?php echo $form->textField($model,'memart',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'memart'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model,'directors_management_profile'); ?>
                <?php echo $form->textField($model,'directors_management_profile',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'directors_management_profile'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model,'bvn_details'); ?>
                <?php echo $form->textField($model,'bvn_details',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'bvn_details'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model,'company_profile'); ?>
                <?php echo $form->textField($model,'company_profile',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'company_profile'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model,'audit_statements'); ?>
                <?php echo $form->textField($model,'audit_statements',array('size'=>45,'maxlength'=>45,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'audit_statements'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model,'contact_details'); ?>
                <?php echo $form->textArea($model,'contact_details',array('size'=>60,'class'=>'form-control','readonly' => true)); ?>
                <?php echo $form->error($model,'contact_details'); ?>
            </div>






        </div>













        <div class="col-md-6">


            <div class="row">
                <?php echo $form->labelEx($model,'c_o_i_comments'); ?>
                <?php echo $form->textField($model,'c_o_i_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'c_o_i_comments'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'cac2_7_comments'); ?>
                <?php echo $form->textField($model,'cac2_7_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'cac2_7_comments'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'cac2_1_comments'); ?>
                <?php echo $form->textField($model,'cac2_1_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'cac2_1_comments'); ?>
            </div>


            <div class="row">
                <?php echo $form->labelEx($model,'cbn_license_comments'); ?>
                <?php echo $form->textField($model,'cbn_license_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'cbn_license_comments'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'memart_comments'); ?>
                <?php echo $form->textField($model,'memart_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'memart_comments'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'directors_profile_comments'); ?>
                <?php echo $form->textField($model,'directors_profile_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'directors_profile_comments'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'bvn_details_comments'); ?>
                <?php echo $form->textField($model,'bvn_details_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'bvn_details_comments'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'company_profile_comments'); ?>
                <?php echo $form->textField($model,'company_profile_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'company_profile_comments'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'audit_statements_comments'); ?>
                <?php echo $form->textField($model,'audit_statements_comments',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'audit_statements_comments'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'contacted_person'); ?>
                <?php echo $form->textField($model,'contacted_person',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'contacted_person'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'means_of_contact'); ?>
                <?php echo $form->dropDownList($model,'means_of_contact', array(""=>"",'Call'=>'Call','SMS'=>'SMS','Whatsapp'=>'Whatsapp')
                    ,array('class'=>'form-control')); ?>
                <?php echo $form->error($model,'means_of_contact'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'response_status'); ?>
                <?php echo $form->dropDownList($model,'response_status', array(""=>"",'Responded'=>'Responded',"Didn't respond"=>"Didn't respond")
                    ,array('class'=>'form-control')); ?>
                <?php echo $form->error($model,'response_status'); ?>
            </div>





        </div>
    </div>
<div class="row">
    <br/>
    <br/>

</div>




<!-- end of first -->



    <!-- second begins-->


    <div class="row">
        <?php echo $form->labelEx($model,'general_comments'); ?>
        <?php echo $form->textArea($model,'general_comments',array('size'=>60,'class'=>'form-control')); ?>
        <?php echo $form->error($model,'general_comments'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model,'contact_status'); ?>
        <?php echo $form->dropDownList($model,'contact_status', array(
                "Open"=>"Open",
                "Closed"=>"Closed"

            )
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'contact_status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'created_by'); ?>
        <?php echo $form->textField($model,'created_by',array('value'=>Yii::app()->user->id, 'readonly' => true)); ?>
        <?php echo $form->error($model,'created_by'); ?>
    </div>
<!--
    <div class="row">
        <?php echo $form->labelEx($model,'contact_date'); ?>
        <?php echo $form->textField($model,'contact_date',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'contact_date'); ?>
    </div>

    -->
    <div class="row">
        <?php echo $form->labelEx($model,'contact_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'contact_date',
                'name'=>'contact_date',
                'value'=>$model->contact_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'dd-mm-yy',
                    'maxDate'=> '+0',
                    'changeMonth'=> true,
                    'changeYear'=> true,
                ),
                'htmlOptions'=> array('style'=>'','value'=>date('d-m-Y' )),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'contact_date'); ?>
    </div>

<!--
	<div class="row">
		<?php echo $form->labelEx($model,'date_received'); ?>
		<?php echo $form->textField($model,'date_received'); ?>
		<?php echo $form->error($model,'date_received'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
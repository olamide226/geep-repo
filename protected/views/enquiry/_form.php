<?php
/* @var $this CasetwoController */
/* @var $model Casetwo */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'enquiry-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'customer_name'); ?>
        <?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>60)); ?>
        <?php echo $form->error($model,'customer_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'phone_number'); ?>
        <?php echo $form->textField($model,'phone_number',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'phone_number'); ?>
    </div>
    <!--
	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'date');

    // Date Entry

    $this->widget('zii.widgets.jui.CJuiDatePicker',
        array(
            'attribute'=>'date',
            'name'=>'date',
            'value'=>$model->date,
            'model'=>$model,
            'options'=>array(
                'showAnim'=>'slide',
                'showButtonPanel'=>true,
                'dateFormat'=>'dd-mm-yy',
                'maxDate'=> '+0',
            ),
            'htmlOptions'=> array('style'=>''),

        ));

    //    end

    ?>


        <?php echo $form->error($model,'date'); ?>
    </div>
-->

    <div class="row">
        <?php echo $form->labelEx($model,'association'); ?>
        <?php echo $form->textField($model,'association',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'association'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'complaints'); ?>
        <?php echo $form->dropDownList($model,'complaints', array(
                ""=>"",
                "Customer wants to know the gain to the association if they register their members."=>"Customer wants to know the gain to the association if they register their members.",
                "Customer wants to know if the money would be paid into individual accounts."=>"Customer wants to know if the money would be paid into individual accounts.",           
                "Customer wants to know maximum and minimum number of members that can apply."=>"Customer wants to know maximum and minimum number of members that can apply.",
                "Customer wants to know the maximum and minimum amount a member can apply for."=>"Customer wants to know the maximum and minimum amount a member can apply for.",
                "Customer wants the criteria for application"=>"Customer wants the criteria for application",
                "Customer wants to know how to identify genuine BOI agent"=>"Customer wants to know how to identify genuine BOI agent",
                "Customer wants to know if an individual can apply for the loan without being a member of an association"=>"Customer wants to know if an individual can apply for the loan without being a member of an association",
                "Customer wants to know if they can make monthly payments?"=>"Customer wants to know if they can make monthly payments?",
                "Call dropped before customer could lay complaints"=>"Call dropped before customer could lay complaints",
                "Customer wants to know BOI's office location"=>"Customer wants to know BOI's office location",
                "Request for personal account number by Customer"=>"Request for personal account number by Customer",
                "Can an individual apply in two different associations?"=>"Can an individual apply in two different associations?",
                "Customer's bank is not on the listed banks eligible for application"=>"Customer's bank is not on the listed banks eligible for application",               
				"Unable to access customer's details with the phone number provided."=>"Unable to access customer's details with the phone number provided." ,
				"Customer got a message from BOI to correct BVN" => "Customer got a message from BOI to correct BVN"
            )
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'complaints'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model,'other_comments'); ?>
        <?php echo $form->textArea($model,'other_comments',array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'other_comments'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model,'response'); ?>
        <?php echo $form->textArea($model,'response',array('class'=>'form-control','maxlength'=>300)); ?>
        <?php echo $form->error($model,'response'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'source'); ?>
        <?php echo $form->dropDownList($model,'source', array('Customer Called'=>'Customer Called','Customer SMS'=>'Customer SMS')
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'source'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
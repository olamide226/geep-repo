<?php
/* @var $this UnacceptedLoansCallsController */
/* @var $model UnacceptedLoansCalls */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'unaccepted-loans-calls-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>


    <div class="row">
        <?php echo $form->labelEx($model,'comment'); ?>
        <?php echo $form->dropDownList($model,'comment', array(
                ""=>"",
                "Did not receive the loan offer SMS."=>"Did not receive the loan offer SMS.",
                "Received the loan offer SMS but did not understand what to do."=>"Received the loan offer SMS but did not understand what to do.",
                "Understand the SMS, but had difficulty responding (USSD)."=>"Understand the SMS, but had difficulty responding (USSD).",
                "Number not available"=>"Number not available",
                "Others"=>"Others",

            )
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'comment'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'interest'); ?>
        <?php echo $form->dropDownList($model,'interest', array(
                ""=>"",
                "Yes"=>"Yes",
                "No"=>"No",
                "Undecided"=>"Undecided",

            )
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'interest'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'agent_comment'); ?>
        <?php echo $form->textArea($model,'agent_comment',array('class'=>'form-control')); ?>

        <?php echo $form->error($model,'agent_comment'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model,'call_duration'); ?>
        <?php echo $form->textField($model,'call_duration',array('class'=>'form-control')); ?>

        <?php echo $form->error($model,'call_duration'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model,'customer_name'); ?>
<!--        --><?php //echo $form->textField($model,'customer_name',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->textField($model,'customer_name',array('value'=>$model2->customer_name,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'customer_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'phone_number'); ?>
<!--        --><?php //echo $form->textField($model,'phone_number',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->textField($model,'phone_number',array('value'=>$model2->phone_number,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'phone_number'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'association'); ?>
<!--        --><?php //echo $form->textField($model,'association',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->textField($model,'association',array('value'=>$model2->association,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'association'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'state'); ?>
<!--        --><?php //echo $form->textField($model,'state',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->textField($model,'state',array('value'=>$model2->state,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'state'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'date_offer_was_sent'); ?>
<!--        --><?php //echo $form->textField($model,'date_offer_was_sent',array('size'=>45,'maxlength'=>45)); ?>

        <?php echo $form->textField($model,'date_offer_was_sent',array('value'=>$model2->date_offer_was_sent,'readonly'=>'true','class'=>'form-control')); ?>


        <?php echo $form->error($model,'date_offer_was_sent'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'amount'); ?>
<!--        --><?php //echo $form->textField($model,'amount',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->textField($model,'amount',array('value'=>$model2->amount,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'amount'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'tenure'); ?>
        <!--        --><?php //echo $form->textField($model,'amount',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->textField($model,'tenure',array('value'=>$model2->tenure,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'tenure'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sub_aggregators'); ?>
<!--        --><?php //echo $form->textField($model,'sub_aggregators',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->textField($model,'sub_aggregators',array('value'=>$model2->sub_aggregators,'readonly'=>'true','class'=>'form-control')); ?>


        <?php echo $form->error($model,'sub_aggregators'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'date_loan_was_requested'); ?>
<!--        --><?php //echo $form->textField($model,'date_loan_was_requested',array('size'=>45,'maxlength'=>45)); ?>

        <?php echo $form->textField($model,'date_loan_was_requested',array('value'=>$model2->date_loan_was_requested,'readonly'=>'true','class'=>'form-control')); ?>


        <?php echo $form->error($model,'date_loan_was_requested'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'beneficiaries_institution'); ?>
<!--        --><?php //echo $form->textField($model,'beneficiaries_institution',array('size'=>60,'maxlength'=>100)); ?>

        <?php echo $form->textField($model,'beneficiaries_institution',array('value'=>$model2->beneficiaries_institution,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'beneficiaries_institution'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'status'); ?>
        <!--        --><?php //echo $form->textField($model,'amount',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->textField($model,'status',array('value'=>$model2->status,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'date_received'); ?>
<!--        --><?php //echo $form->textField($model,'date_received',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->textField($model,'date_received',array('value'=>$model2->date_received,'readonly'=>'true','class'=>'form-control')); ?>

        <?php echo $form->error($model,'date_received'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model,'created_by'); ?>
        <?php echo $form->textField($model,'created_by',array('value'=>Yii::app()->user->id, 'readonly' => true)); ?>
        <?php echo $form->error($model,'created_by'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
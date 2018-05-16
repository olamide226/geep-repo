<?php
/* @var $this Boi2Controller */
/* @var $model Boi2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    <div class="row">
        <?php echo $form->label($model,'id'); ?>
        <?php echo $form->textField($model,'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'customer_name'); ?>
        <?php echo $form->textField($model,'customer_name',array('size'=>51,'maxlength'=>51)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'phone_number'); ?>
        <?php echo $form->textField($model,'phone_number',array('size'=>11,'maxlength'=>11)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'association'); ?>
        <?php echo $form->textField($model,'association',array('size'=>60,'maxlength'=>197)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'member_id'); ?>
        <?php echo $form->textField($model,'member_id',array('size'=>21,'maxlength'=>21)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'state'); ?>
        <?php echo $form->textField($model,'state',array('size'=>11,'maxlength'=>11)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'amount'); ?>
        <?php echo $form->textField($model,'amount',array('size'=>16,'maxlength'=>16)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'tenure'); ?>
        <?php echo $form->textField($model,'tenure'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'mou_status'); ?>
        <?php echo $form->textField($model,'mou_status',array('size'=>12,'maxlength'=>12)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'amount_due'); ?>
        <?php echo $form->textField($model,'amount_due',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'amount_re_paid'); ?>
        <?php echo $form->textField($model,'amount_re_paid',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'amount_in_default'); ?>
        <?php echo $form->textField($model,'amount_in_default',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'sub_aggregator'); ?>
        <?php echo $form->textField($model,'sub_aggregator',array('size'=>35,'maxlength'=>35)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'aggregator'); ?>
        <?php echo $form->textField($model,'aggregator',array('size'=>35,'maxlength'=>35)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'beneficiary_institution'); ?>
        <?php echo $form->textField($model,'beneficiary_institution',array('size'=>21,'maxlength'=>21)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'nuban'); ?>
        <?php echo $form->textField($model,'nuban',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'date_requested'); ?>
        <?php echo $form->textField($model,'date_requested',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'status'); ?>
        <?php echo $form->textField($model,'status',array('size'=>27,'maxlength'=>27)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'reason_for_rejection'); ?>
        <?php echo $form->textField($model,'reason_for_rejection',array('size'=>60,'maxlength'=>86)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'first_due_date'); ?>
        <?php echo $form->textField($model,'first_due_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'last_change_date'); ?>
        <?php echo $form->textField($model,'last_change_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'pending_icu_confirmation_date'); ?>
        <?php echo $form->textField($model,'pending_icu_confirmation_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'pending_customer_confirmation_date'); ?>
        <?php echo $form->textField($model,'pending_customer_confirmation_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'pending_f_ire_confirmation_date'); ?>
        <?php echo $form->textField($model,'pending_f_ire_confirmation_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'pending_approval_date'); ?>
        <?php echo $form->textField($model,'pending_approval_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'due_for_disbursement_date'); ?>
        <?php echo $form->textField($model,'due_for_disbursement_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'loan_disbursed_successfully_date'); ?>
        <?php echo $form->textField($model,'loan_disbursed_successfully_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'offer_declined_date'); ?>
        <?php echo $form->textField($model,'offer_declined_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'risk_request_denied_date'); ?>
        <?php echo $form->textField($model,'risk_request_denied_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'request_denied_date'); ?>
        <?php echo $form->textField($model,'request_denied_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'not_qualified_date'); ?>
        <?php echo $form->textField($model,'not_qualified_date',array('size'=>17,'maxlength'=>17)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
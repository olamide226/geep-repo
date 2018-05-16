<?php
/* @var $this ConversationsController */
/* @var $model Conversations */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conversations-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'amount'); ?>
        <?php echo $form->numberField($model,'amount',array('class'=>'form-control', 'step'=>'0.01', 'min'=>0)); ?>
        <?php echo $form->error($model,'amount'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'agent_name'); ?>
        <?php echo $form->textField($model,'agent_name',array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'agent_name'); ?>
    </div>




    <div class="row">
        <?php echo $form->labelEx($model,'date_paid');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'date_paid',
                'name'=>'date_paid',
                'value'=>$model->date_paid,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'dd-mm-yy',
                    'maxDate'=> '+0',
                    'changeMonth'=> true,
                    'changeYear'=> true,
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'date_paid'); ?>
    </div>




    <div class="row">
        <?php echo $form->labelEx($model,'categories'); ?>
        <?php echo $form->dropDownList($model,'categories', array(
            'Information correct'=>'Information correct',
            'Incorrect payment'=>'Incorrect payment',
			'Upgrade Me'=>'Upgrade Me',

            'Incomplete call'=>'Incomplete call','Customer does not have info'=>'Customer does not have info',
            'Payment made'=>'Payment made'),array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'categories'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'source'); ?>
        <?php echo $form->dropDownList($model,'source', array('Customer Called'=>'Customer Called','Customer SMS'=>'Customer SMS','Chat'=>'Chat')
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'source'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model,'phone_number'); ?>
        <?php echo $form->textField($model,'phone_number',array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'phone_number'); ?>
    </div>
    <!--
    <div class="row">
        <?php echo $form->labelEx($model,'comment'); ?>
        <?php echo $form->textArea($model,'comment',array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'comment'); ?>
    </div>
-->

    <div class="row">
        <?php echo $form->labelEx($model,'comment'); ?>
        <?php echo $form->dropDownList($model,'comment', array(
                ""=>"",
				"UPME - Qualified"=>"UPME - Qualified",
				"UPME - Not Qualified"=>"UPME - Not Qualified",
                "Customer wants to know if there are extra charges if prompt payment is not made as at when due."=>"Customer wants to know if there are extra charges if prompt payment is not made as at when due.",
                "Customer got a message to pay back a loan that was not received."=>"Customer got a message to pay back a loan that was not received.",
                "Customer does not understand the text message."=>"Customer does not understand the text message.",
                "Customer cannot remember amount paid so far."=>"Customer cannot remember amount paid so far.",
                "There is excess charge on customer's account."=>"There is excess charge on customer's account.",
                "Unable to contact agent."=>"Unable to contact agent.",
                "Customer requested for BOI account details to make payment."=>"Customer requested for BOI account details to make payment.",
                "Customer claims agent does not want to release the ATM."=>"Customer claims agent does not want to release the ATM.",
                "Customer was not able to withdraw the money on time."=>"Customer was not able to withdraw the money on time.",
                "Customer requested for an alert on each payment made."=>"Customer requested for an alert on each payment made.",
                "Customer keeps on getting text messages for defaulting without having access to the loan."=>"Customer keeps on getting text messages for defaulting without having access to the loan.",
                "Customer does not have access to the loan. Deduction ongoing from account."=>"Customer does not have access to the loan. Deduction ongoing from account.",
                "Customer does not have access to the loan."=>"Customer does not have access to the loan.",
                "Customer confirms owing and will pay."=>"Customer confirms owing and will pay.",
                "Customer claims to have paid more than listed value."=>"Customer claims to have paid more than listed value.",
                "Customer is unable to pay due to personal issues. Requires more time."=>"Customer is unable to pay due to personal issues. Requires more time.",
                "Customer cannot remember the agent name."=>"Customer cannot remember the agent name.",
                "Customer cannot remember association name."=>"Customer cannot remember association name.",
                "Customer cannot remember Account number and association."=>"Customer cannot remember Account number and association.",
                "Customer want to make online transfer."=>"Customer want to make online transfer.",
                "Customer claimed to have completed payment but still getting alert for defaulting."=>"Customer claimed to have completed payment but still getting alert for defaulting.",
                "Agent did not remit the money paid by the customer to BOI."=>"Agent did not remit the money paid by the customer to BOI.",
                "Agent did not give full value of loan."=>"Agent did not give full value of loan.",
                "Agent used customer's name to get loan."=>"Agent used customer's name to get loan.",
                "Unable to pay into the Sterling bank account."=>"Unable to pay into the Sterling bank account.",
                "Customer has not had access to the loan, agent has been trading with customer's loan on customer's behalf."=>"Customer has not had access to the loan, agent has been trading with customer's loan on customer's behalf.",
                "Customer requested for an  extension of payment."=>"Customer requested for an  extension of payment.",

            )
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'comment'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'other_comments'); ?>
        <?php echo $form->textArea($model,'other_comments',array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'other_comments'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'date'); ?>
        <?php echo $form->textField($model,'date',array('class'=>'form-control', 'readonly' => true)); ?>
        <?php echo $form->error($model,'date'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'member_id'); ?>
        <?php echo $form->textField($model,'member_id',array('class'=>'form-control', 'readonly' => true)); ?>
        <?php echo $form->error($model,'member_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fraud_suspected'); ?>
        <?php echo $form->dropDownList($model,'fraud_suspected', array('Not Fraud'=>'Not Fraud','Fraud'=>'Fraud')
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'fraud_suspected'); ?>
    </div>


    <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
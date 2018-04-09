<?php
/* @var $this CasetwoController */
/* @var $model Casetwo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'casetwo-form',
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
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>60,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cust_phone_number'); ?>
		<?php echo $form->textField($model,'cust_phone_number',array('size'=>45,'maxlength'=>11,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cust_phone_number'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'agent_name'); ?>
		<?php echo $form->textField($model,'agent_name',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'agent_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'agent_phn_number'); ?>
		<?php echo $form->textField($model,'agent_phn_number',array('size'=>45,'maxlength'=>11,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'agent_phn_number'); ?>
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
		<?php echo $form->textField($model,'association',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'association'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'complaints'); ?>
		<?php echo $form->textField($model,'complaints',array('size'=>60,'maxlength'=>300,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'complaints'); ?>
	</div>
-->

    <div class="row">
        <?php echo $form->labelEx($model,'complaints'); ?>
        <?php echo $form->dropDownList($model,'complaints', array(
                ""=>"",
					"Customer wants to know how to register."=>"Customer wants to know how to register.",
					"Already registered but wants to add a new member."=>"Already registered but wants to add a new member.",
					"Not interested in the loan"=>"Not interested in the loan",
					"Lives in a rural area, no bank and no internet."=>"Lives in a rural area, no bank and no internet. ",
					"No confirmation after sending email."=>"No confirmation after sending email.",
					"Some members are not interested in the loan."=>"Some members are not interested in the loan. ",
					"Customer wants the registration URL sent via text messages."=>"Customer wants the registration URL sent via text messages.",
					"Customer wants to know what's left to be done after submitting the form"=>"Customer wants to know what's left to be done after submitting the form",
					"Customer complained of not getting a response after submitting the form."=>"Customer complained of not getting a response after submitting the form.",
					"Customer has submitted the form a while ago but is yet to get the loan."=>"Customer has submitted the form a while ago but is yet to get the loan.",
					"Customer wants to know the gain to the association if they register their members."=>"Customer wants to know the gain to the association if they register their members.",
					"Customer wants to know when the loan will be disbursed."=>"Customer wants to know when the loan will be disbursed.",
					"Customer wants to know if the money would be paid into individual accounts."=>"Customer wants to know if the money would be paid into individual accounts.",
					"Customer wants to know the interest rate on the loan."=>"Customer wants to know the interest rate on the loan.",
					"Customer wants to know how to register."=>"Customer wants to know how to register.",
					"Customer wants to know the tenure for the loan."=>"Customer wants to know the tenure for the loan.",
					"Customer wants to know why BVN is required."=>"Customer wants to know why BVN is required.",
					"Customer wants to know maximum and minimum number of members that can apply."=>"Customer wants to know maximum and minimum number of members that can apply.",
					"Customer wants to know the maximum and minimum amount a member can apply for."=>"Customer wants to know the maximum and minimum amount a member can apply for.",
					"Customer wants to know why some members did not get a confirmation message."=>"Customer wants to know why some members did not get a confirmation message.",
					"Phone number registered with is no longer in use."=>"Phone number registered with is no longer in use.",
					"Some members are not interested in the loan."=>"Some members are not interested in the loan.",
					"Customer has submitted the form a while ago but is yet to get the loan."=>"Customer has submitted the form a while ago but is yet to get the loan.",
					"Customer wants to know when the loan will be disbursed."=>"Customer wants to know when the loan will be disbursed.",
					"Customer wants to know if the money would be paid into individual accounts."=>"Customer wants to know if the money would be paid into individual accounts.",
					"Customer wants to know the interest rate on the loan."=>"Customer wants to know the interest rate on the loan.",
					"Customer wants to know the tenure for the loan."=>"Customer wants to know the tenure for the loan.",
					"Customer wants to know why BVN is required."=>"Customer wants to know why BVN is required.",
					"Customer wants to know if the loan range can be increased"=>"Customer wants to know if the loan range can be increased",
					"Customer wants the loan offer message resent"=>"Customer wants the loan offer message resent",
					"Customer has difficulty responding to the USSD"=>"Customer has difficulty responding to the USSD",
					"Customer keeps receiving loan offer message even after responding to it."=>"Customer keeps receiving loan offer message even after responding to it.",
					"Customer has responded to the loan offer SMS"=>"Customer has responded to the loan offer SMS",
					"Customer got a message from BOI to correct BVN but claims BVN is correct"=>"Customer got a message from BOI to correct BVN but claims BVN is correct",
					"Customer got a message from BOI to correct BVN but does not know what to do."=>"Customer got a message from BOI to correct BVN but does not know what to do.",
					"Loan offer rejected."=>"Loan offer rejected.",
					"Customer not interested in the loan."=>"Customer not interested in the loan.",
					"Customer did not apply for loan."=>"Customer did not apply for loan.",
					"Customer is yet to get feedback message after BVN correction."=>"Customer is yet to get feedback message after BVN correction.",
					"Customer's bank is not on the listed banks eligible for application"=>"Customer's bank is not on the listed banks eligible for application",
					"Unable to access customer's details with the phone number provided."=>"Unable to access customer's details with the phone number provided.",
					"Customer complained that other members of the association has received the loan but yet to get any feedback."=>"Customer complained that other members of the association has received the loan but yet to get any feedback.",
					"Customer is yet to get the loan after responding to the loan offer SMS."=>"Customer is yet to get the loan after responding to the loan offer SMS.",
					"Customer has corrected account details but yet to get the loan."=>"Customer has corrected account details but yet to get the loan.",
					"Customer is having difficulty uploading MOU and Excel Sheet."=>"Customer is having difficulty uploading MOU and Excel Sheet.",

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
	
	<div class="row">
        <?php echo $form->labelEx($model,'action'); ?>
        <?php echo $form->textArea($model,'action',array('class'=>'form-control','maxlength'=>300)); ?>
        <?php echo $form->error($model,'action'); ?>
    </div>
	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this TradermoniController */
/* @var $model Tradermoni */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tradermoni-form',
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
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>60, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_no'); ?>
		<?php echo $form->numberField($model,'phone_no',array('size'=>13,'maxlength'=>13, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'phone_no'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'complaints'); ?>
		<!--<?php echo $form->textField($model,'complaints',array('class'=>'form-control','maxlength'=>300,'list'=>'complaint')); ?>--> 

<?php echo $form->dropDownList($model,'complaints', array(
			""=>"Select a complaint..",
            'Customer claims to have been registered and captured for a while, but yet to receive any SMS.'=>'Customer claims to have been registered and captured for a while, but yet to receive any SMS.',
			'Customer claims not to have received the code for accessing tradermoni loan in the SMS'=>'Customer claims not to have received the code for accessing tradermoni loan in the SMS',
			'Customer claims to be having difficulty transferring the money to bank account'=>'Customer claims to be having difficulty transferring the money to bank account',
			'Customer wants to register for Tradermoni'=>'Customer wants to register for Tradermoni',
			'Customer claims to have transferred from wallet to ATM/bank account and have not received an alert yet'=>'Customer claims to have transferred from wallet to ATM/bank account and have not received an alert yet',
			'Customer claims to have dialled a USSD code and got a message of not been verified/registered'=>'Customer claims to have dialled a USSD code and got a message of not been verified/registered',
			'Customer claims to have deleted the SMS with the pin'=>'Customer claims to have deleted the SMS with the pin',
			'Customer wants to know when tradermoni loan will be disbursed'=>'Customer wants to know when tradermoni loan will be disbursed',
			'Customer wants to know how to become a TraderMoni agent'=>'Customer wants to know how to become a TraderMoni agent',
			'Customer claims to have forgotten PIN number'=>'Customer claims to have forgotten PIN number',
			'Call dropped before customer could lay complaint'=>'Call dropped before customer could lay complaint',
			'Customer complained of not been captured'=>'Customer complained of not been captured',
			'Customer wants to know how to identify genuine TraderMoni agent'=>'Customer wants to know how to identify genuine TraderMoni agent',
			'Customer chose the wrong queue on IVR' => 'Customer chose the wrong queue on IVR',
			"Customer claims money transferred for more than 24 hours is not in wallet or account"=>"Customer claims money transferred for more than 24 hours is not in wallet or account",
			"Customer claims to have received a congratulatory message and wants to know when the loan will be disbursed." => "Customer claims to have received a congratulatory message and wants to know when the loan will be disbursed.",
			"Customer got message but does not understand the content"=>"Customer got message but does not understand the content",
			"Customer wants to know if there is an online application for Tradermoni loan"=>"Customer wants to know if there is an online application for Tradermoni loan",
			"Customer claims to be having difficulty accessing the code"=>"Customer claims to be having difficulty accessing the code",
			"Customer claims ready cash agent is not available for collection of loan"=>"Customer claims ready cash agent is not available for collection of loan",
			"Eyowo MTN beneficiaries having difficulty accessing the USSD"=>"Eyowo MTN beneficiaries having difficulty accessing the USSD",
			"Customer cannot remember content of sms received"=>"Customer cannot remember content of sms received",
			"Customer wants to change phone number used in registration"=>"Customer wants to change phone number used in registration",
			"Customer wants to know how to respond to the sms received"=>"Customer wants to know how to respond to the sms received",
			"Customer's phone number is linked to two platform"=>"Customer's phone number is linked to two platform",
			"Agent billed customer for registration"=>"Agent billed customer for registration",
			"Unable to access customer information with phone number provided"=>"Unable to access customer information with phone number provided",
			"Customer claims to be having difficulty accessing the Eyowo app"=>"Customer claims to be having difficulty accessing the Eyowo app",
			"Customer wants to know the application process"=>"Customer wants to know the application process",
			"Customer wants to know if Tradermoni is a loan or a grant"=>"Customer wants to know if Tradermoni is a loan or a grant",
			"Customer claims to have lost Tradermoni registered SIM"=>"Customer claims to have lost Tradermoni registered SIM",
			"Customer wants to know if there is an interest fee on the loan"=>"Customer wants to know if there is an interest fee on the loan",
			"Customer wants to know duration of loan repayment"=>"Customer wants to know duration of loan repayment"), array('class'=>'form-control' )); ?>
		<?php echo $form->error($model,'complaints'); ?>
	</div>
	<datalist id='complaint'>
	<option value="Customer claims to have been registered and captured for a while, but yet to receive any SMS"></option>
	<option value="Customer claims not to have received the code for accessing tradermoni loan in the SMS"></option>
	<option value="Customer claims to be having difficulty transferring the money to bank account"></option>
	<option value="Customer wants to register for Tradermoni"></option>
	<option value="Customer claims to have transferred from wallet to ATM/bank account and have not received an alert yet"></option>
	<option value="Customer claims to have dialled a USSD code and got a message of not been verified/registered"></option>
	<option value="Customer claims to have deleted the SMS with the pin"></option>
	<option value="Customer wants to know when tradermoni loan will be disbursed"></option>
	<option value="Customer wants to know how to become a TraderMoni agent"></option>
	<option value="Customer claims to have forgotten PIN number"></option>
	<option value="Call dropped before customer could lay complaint"></option>
	<option value="Customer complained of not been captured"></option>
	<option value="Customer wants to know how to identify genuine TraderMoni agent"></option>
	<option value="Customer chose the wrong queue on IVR"></option>
	</datalist

	<div class="row">
		<?php echo $form->labelEx($model,'other_comments'); ?>
		<?php echo $form->textArea($model,'other_comments',array('size'=>60,'maxlength'=>300,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'other_comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'response'); ?>
		 <!-- <?php echo $form->textField($model,'response',array('class'=>'form-control','maxlength'=>300,'list'=>'responses')); ?> -->
		 <?php echo $form->dropDownList($model,'response', array(
			""=>"Select a response..",
            'Kindly be patient as Tradermoni loan is being processed '=>'Kindly be patient as Tradermoni loan is being processed',
'Kindly be patient as you await subsequent SMS'=>'Kindly be patient as you await subsequent SMS',
'Customer was guided on the process to follow'=>'Customer was guided on the process to follow',
'Customer was given Tradermoni application criteria'=>'Customer was given Tradermoni application criteria',
'Kindly hold on for 24 hours. Please ensure the amount transferred is not less than #1,000 and not greater than #10,000'=>'Kindly hold on for 24 hours. Please ensure the amount transferred is not less than #1,000 and not greater than #10,000',
'Kindly reapply for Tradermoni loan'=>'Kindly reapply for Tradermoni loan',
'Customer was guided on how to retrieve pin'=>'Customer was guided on how to retrieve pin',
'Tradermoni loan is being processed'=>'Tradermoni loan is being processed',
'There is no platform to be registerd as an agent at the moment'=>'There is no platform to be registerd as an agent at the moment',
'Customer was guided on how to reset pin'=>'Customer was guided on how to reset pin',
'Call dropped before a response could be given to customer'=>'Call dropped before a response could be given to customer', 
'Kindly locate any Tradermoni agent and register'=>'Kindly locate any Tradermoni agent and register',
'All genuine Tradermoni agents are found wearing branded Tradermoni t-shirts and facecaps'=>'All genuine Tradermoni agents are found wearing branded Tradermoni t-shirts and facecaps',
"Kindly recheck message received"=>"Kindly recheck message received",
"There is no online platform for Tradermoni registration. Kindly, contact Tradermoni agents to apply for the loan."=>"There is no online platform for Tradermoni registration. Kindly, contact Tradermoni agents to apply for the loan.",
"Customer was guided on how to access the code"=>"Customer was guided on how to access the code",
"Kindly locate a ready cash agent in your locality or await a loan reversal within 24 hours."=>"Kindly locate a ready cash agent in your locality or await a loan reversal within 24 hours.",
"Kindly use the EYOWO App or Link"=>"Kindly use the EYOWO App or Link",
"Kindly recheck message received and call back"=>"Kindly recheck message received and call back",
"There is no platform for change of phone number used in registration."=>"There is no platform for change of phone number used in registration.",
"Kindly ignore subsequent messages"=>"Kindly ignore subsequent messages",
"Tradermoni registration does not warrant a fee"=>"Tradermoni registration does not warrant a fee",
"Kindly respond with the phone number used it in registering"=>"Kindly respond with the phone number used it in registering",
"Kindly dial *4255# or follow the link"=>"Kindly dial *4255# or follow the link",
"Application is done through Tradermoni agents"=>"Application is done through Tradermoni agents",
"Tradermoni is a loan"=>"Tradermoni is a loan",
"Kindly retrieve the registered phone number"=>"Kindly retrieve the registered phone number",
"There is no interest on Tradermoni loan but there is an administrative fee which is 2.5% of the loan received"=>"There is no interest on Tradermoni loan but there is an administrative fee which is 2.5% of the loan received",
"Loan repayment is for 24 weeks"=>"Loan repayment is for 24 weeks",
"Kindly choose the correct language option on the IVR"=>"Kindly choose the correct language option on the IVR"
            ), array('class'=>'form-control' )); ?> 
		<?php echo $form->error($model,'response'); ?>
	</div>
<datalist id=responses>
<option value="Kindly be patient as Tradermoni loan is being processed"></option>
<option value="Kindly be patient as you await subsequent SMS"></option>
<option value="Customer was guided on the process to follow"></option>
<option value="Customer was given Tradermoni application criteria"></option>
<option value="Kindly hold on for 24 hours. Please ensure the amount transferred is not less than #1,000 and not greater than #10,000"></option>
<option value="Kindly reapply for Tradermoni loan"></option>
<option value="Customer was guided on how to retrieve pin"></option>
<option value="Tradermoni loan is being processed"></option>
<option value="There is no platform to be registerd as an agent at the moment"></option>
<option value="Customer was guided on how to reset pin"></option>
<option value="Call dropped before a response could be given to customer"></option>
<option value="Kindly locate any Tradermoni agent and register"></option>
<option value="All genuine Tradermoni agents are found wearing branded Tradermoni t-shirts and facecaps"></option>
<option value="Kindly Choose the correct language option"></option>
</datalist>

	<div class="row">
        <?php echo $form->labelEx($model,'source'); ?>
        <?php echo $form->dropDownList($model,'source', array('Customer Called'=>'Customer Called','Customer SMS'=>'Customer SMS','Email'=>'Email', 'Chat'=>'Chat','whatsapp'=>'Whatsapp')
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'source'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'call_source'); ?>
        <?php echo $form->dropDownList($model,'call_source', array(
		''=>'Select call source...',
		'ivr'=>'IVR',
		'mobile'=>'Mobile Phone','not_call'=>'none of the above')
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'call_source'); ?>
    </div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<script type="text/javascript">
	
$('form').submit(function(){
    $('input[type=submit]').attr('disabled', 'disabled');
});
</script>

</div><!-- form -->v
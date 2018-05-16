<?php
/* @var $this KwikcashController */
/* @var $model Kwikcash */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kwikcash-form',
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
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cust_phone_number'); ?>
		<?php echo $form->textField($model,'cust_phone_number',array('size'=>11,'maxlength'=>11, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cust_phone_number'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'complaints'); ?>
        <?php echo $form->dropDownList($model,'complaints', array(
                ""=>"",
					"Customer is unable to access the loan."=>"Customer is unable to access the loan.",
					"Customer wants to know the criteria for applying for kwikcash loan."=>"Customer wants to know the criteria for applying for kwikcash loan.",
					"Customer wants to know the loan period."=>"Customer wants to know the loan period.",
					"Customer complained of having difficulty making payment."=>"Customer complained of having difficulty making payment.",
					"Customer received loan extension message before the due date."=>"Customer received loan extension message before the due date.",
					"Customer wants to know the payment procedure."=>"Customer wants to know the payment procedure.",
					"Customer wants to know to about Kwikcash."=>"Customer wants to know to about Kwikcash.",
					"Customer wants to know the interest rate."=>"Customer wants to know the interest rate.",
					"Customer called to confirm disbursement."=>"Customer called to confirm disbursement.",
					"Customer called to confirm payment."=>"Customer called to confirm payment.",
            )
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'complaints'); ?>
    </div>


	<div class="row">
		<?php echo $form->labelEx($model,'response'); ?>
		<?php echo $form->textArea($model,'response',array('rows'=>6, 'cols'=>50, 'class'=>'form-control','list'=>'responses')); ?>
		<?php echo $form->error($model,'response'); ?>

	</div>

<datalist id='responses'>
 <option value="Customer was guided on registration process by using the USSD *540*251#"></option>
 <option value="Ensure there is airtime on your line while dialing the USSD."></option>
 <option value="Customer bank must be among the beneficiary banks also there must be airtime available on the line."></option>
 <option value="2 weeks loan period with an opportunity for extension if requested before the due date."></option>
 <option value="Kindly use other mode of payment. (ATM, Quickteller.com/Kwikcash, Using Paydirect at the bank)."></option>
 <option value="Kindly ignore the text message."></option>
 <option value="Customer was given the payment method which is ATM, Quickteller.com/KwikCash and Using paydirect at the Bank."></option>
 <option value="Kwikcash loan is an instant loan that can be access by dial the USSD on the mobile phone."></option>
 <option value="5%"></option>
 <option value="Loan will be disbursed into the account number provided during registration."></option>
 <option value="Kindly be patient while we reconcile your account."></option>
 <option value="Kindly be patient while we rectify the issue."></option>
 <option value="Notification will be sent after reconciliation"></option>
 <option value="Kindly be patient while issue is been resolved."></option>
 <option value="Ensure there is airtime on your line while dialing the USSD."></option>
 <option value="Ensure the money was paid into the right platform. Customer detail was collected to rectify the re-payment error."></option>
 <option value="*554*261#"></option>
 <option value="Kindly be patient while we reconcile payment made."></option>
 <option value="The minimum amount is N500 and the maximum amount is N100, 000."></option>

</datalist>

	<div class="row">
		<?php echo $form->labelEx($model, 'action'); ?>
		<?php echo $form->textArea($model, 'action' ,array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'action'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

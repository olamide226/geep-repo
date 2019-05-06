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
<?php include "search_script.php"; ?>

		<div class="row">

			<?php echo $form->labelEx($model,'cust_phone_number'); ?>
			<?php echo $form->textField($model,'cust_phone_number',array('size'=>45,'maxlength'=>45,'value' => $get_boi_rec ? $get_boi_rec->phone_number : "",'class'=>'form-control', 'onkeyup'=>'loadDoc()')); ?>
			<?php echo $form->error($model,'cust_phone_number'); ?>
			<button class="btn btn-info" type="button" onclick="loadDoc()">Show/Hide Call logs</button>

		</div>
		<div style="display:none" class="row call_logs">

		</div>


	<div class="row">
		<?php echo $form->labelEx($model,'customer_name'); ?>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>60,'value' => $get_boi_rec ? $get_boi_rec->customer_name : "",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_name'); ?>
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
		<?php echo $form->textField($model,'association',array('size'=>60,'maxlength'=>100, 'value' => $get_boi_rec ? $get_boi_rec->association : "", 'class'=>'form-control')); ?>
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
					"Customer not interested in the loan."=>"Customer not interested in the loan.",
					"Customer did not apply for loan."=>"Customer did not apply for loan.",
					"Customer is yet to get feedback message after BVN correction."=>"Customer is yet to get feedback message after BVN correction.",
					"Customer's bank is not on the listed banks eligible for application"=>"Customer's bank is not on the listed banks eligible for application",
					"Unable to access customer's details with the phone number provided."=>"Unable to access customer's details with the phone number provided.",
					"Customer complained that other members of the association has received the loan but yet to get any feedback."=>"Customer complained that other members of the association has received the loan but yet to get any feedback.",
					"Customer is yet to get the loan after responding to the loan offer SMS."=>"Customer is yet to get the loan after responding to the loan offer SMS.",
					"Customer has corrected account details but yet to get the loan."=>"Customer has corrected account details but yet to get the loan.",
					"Customer is having difficulty uploading MOU and Excel Sheet."=>"Customer is having difficulty uploading MOU and Excel Sheet.",
					"Customer got a loan request message with wrong information"=>"Customer got a loan request message with wrong information",
					
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
        <?php echo $form->textField($model,'response',array('class'=>'form-control','maxlength'=>300,'list'=>'responses')); ?>
        <?php echo $form->error($model,'response'); ?>
    </div>
		<datalist id=responses>
     <option value="Marketmoni loan is being processed."></option>
		 <option value="Customer was given the URL to download the form and thereafter submit via the URL"></option>
		 <option value="Kindly register new members on New Excel sheet."></option>
		 <option value="Customer was given the correction link to rectify the error."></option>
		 <option value="Explanation was given to customer based on the message received."></option>
		 <option value="Kindly locate a BOI agent for registration"></option>
		 <option value="Kindly ignore the loan offer message."></option>
		 <option value="Customer was given the registration URL. (apply.marketmoni.com.ng)"></option>
		 <option value="Marketmoni registration form is being processed."></option>
		 <option value="Asssociation only provide the platform to their members."></option>
		 <option value="Marketmoni loan is being processed."></option>
		 <option value="Loan will be disbursed into members account."></option>
		 <option value="The loan tenure is 6 months, 2 free weeks of no repayment and 24 weeks of re-payment."></option>
		 <option value="Applicants BVN is one of the major information to be provided in order to process the loan."></option>
		 <option value="The maximum number of person's that can apply is 200 per Excel sheet and minimum of 5 person's."></option>
		 <option value="The maximum amount is N50,000 and the minimum amount is N10,000."></option>
		 <option value="Only members with correct information will receive a feedback message."></option>
		 <option value="Kindly retrieve the phone number."></option>
		 <option value="Kindly register only the interested member."></option>
		 <option value="No interest but there is an administrative fee of 5%."></option>
		 <option value="The first application maximum amount is N50,000 but subsequent applications can be increased to N100,000"></option>
		 <option value="Customer was given the USSD to access the loan offer message."></option>
		 <option value="Kindly respond through the phone number registered with, and also ensure there is airtime on the line."></option>
		 <option value="Kindly ignore subsequent messages."></option>
		 <option value="Kindly follow the link sent to update your BVN record."></option>
		 <option value="Customer was given the BVN correction link. Http://goo.gl/7jn5iC."></option>
		 <option value="Marketmoni loan can only be accessed through the listed banks on the Excel sheet."></option>
		 <option value="Customer was asked to provide the phone that was used to process the loan."></option>
		 <option value="Kindly re-apply for marketmoni loan."></option>
		 <option value="Ensure all the necessary fields are correctly filled and try to re-upload the forms."></option>
		 <option value="apply.marketmoni.com.ng"></option>
		</datalist>


    <div class="row">
        <?php echo $form->labelEx($model,'source'); ?>
        <?php echo $form->dropDownList($model,'source', array('Customer Called'=>'Customer Called','whatsapp'=>'WhatsApp','Customer SMS'=>'Customer SMS',
		'Email'=>'Email','boi_email'=>'Email(BOI)','Chat'=>'Chat','batch'=>'Batch')
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
<script>

$('form').submit(function(){
  console.log('Submitted once only');
  $(this).find(':submit').attr('disabled','disabled');
});
</script>
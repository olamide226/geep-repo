<?php
/* @var $this Boi2Controller */
/* @var $model Boi2 */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'boi-form',
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
        <?php echo $form->textField($model,'customer_name',array('size'=>51,'maxlength'=>51)); ?>
        <?php echo $form->error($model,'customer_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'phone_number'); ?>
        <?php echo $form->textField($model,'phone_number',array('size'=>11,'maxlength'=>11)); ?>
        <?php echo $form->error($model,'phone_number'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'association'); ?>
        <?php echo $form->textField($model,'association',array('size'=>60,'maxlength'=>197)); ?>
        <?php echo $form->error($model,'association'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'member_id'); ?>
        <?php echo $form->textField($model,'member_id',array('size'=>21,'maxlength'=>21)); ?>
        <?php echo $form->error($model,'member_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'state'); ?>
        <?php echo $form->textField($model,'state',array('size'=>11,'maxlength'=>11)); ?>
        <?php echo $form->error($model,'state'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'amount'); ?>
        <?php echo $form->textField($model,'amount',array('size'=>16,'maxlength'=>16)); ?>
        <?php echo $form->error($model,'amount'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'tenure'); ?>
        <?php echo $form->textField($model,'tenure'); ?>
        <?php echo $form->error($model,'tenure'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mou_status'); ?>
        <?php echo $form->textField($model,'mou_status',array('size'=>12,'maxlength'=>12)); ?>
        <?php echo $form->error($model,'mou_status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'amount_due'); ?>
        <?php echo $form->textField($model,'amount_due',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'amount_due'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'amount_re_paid'); ?>
        <?php echo $form->textField($model,'amount_re_paid',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'amount_re_paid'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'amount_in_default'); ?>
        <?php echo $form->textField($model,'amount_in_default',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'amount_in_default'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sub_aggregator'); ?>
        <?php echo $form->textField($model,'sub_aggregator',array('size'=>35,'maxlength'=>35)); ?>
        <?php echo $form->error($model,'sub_aggregator'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'aggregator'); ?>
        <?php echo $form->textField($model,'aggregator',array('size'=>35,'maxlength'=>35)); ?>
        <?php echo $form->error($model,'aggregator'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'beneficiary_institution'); ?>
        <?php echo $form->textField($model,'beneficiary_institution',array('size'=>21,'maxlength'=>21)); ?>
        <?php echo $form->error($model,'beneficiary_institution'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'nuban'); ?>
        <?php echo $form->textField($model,'nuban',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'nuban'); ?>
    </div>
<!--
    <div class="row">
        <?php echo $form->labelEx($model,'date_requested'); ?>
        <?php echo $form->textField($model,'date_requested',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'date_requested'); ?>
    </div>
-->

    <div class="row">
        <?php echo $form->labelEx($model,'date_requested');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'date_requested',
                'name'=>'date_requested',
                'value'=>$model->date_requested,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'date_requested'); ?>
    </div>






    <div class="row">
        <?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->textField($model,'status',array('size'=>27,'maxlength'=>27)); ?>
        <?php echo $form->error($model,'status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'reason_for_rejection'); ?>
        <?php echo $form->textField($model,'reason_for_rejection',array('size'=>60,'maxlength'=>86)); ?>
        <?php echo $form->error($model,'reason_for_rejection'); ?>
    </div>
<!--
    <div class="row">
        <?php echo $form->labelEx($model,'first_due_date'); ?>
        <?php echo $form->textField($model,'first_due_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'first_due_date'); ?>
    </div>
-->

    <div class="row">
        <?php echo $form->labelEx($model,'first_due_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'first_due_date',
                'name'=>'first_due_date',
                'value'=>$model->first_due_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'first_due_date'); ?>
    </div>




    <!--
    <div class="row">
        <?php echo $form->labelEx($model,'last_change_date'); ?>
        <?php echo $form->textField($model,'last_change_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'last_change_date'); ?>
    </div>
-->

    <div class="row">
        <?php echo $form->labelEx($model,'last_change_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'last_change_date',
                'name'=>'last_change_date',
                'value'=>$model->last_change_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'last_change_date'); ?>
    </div>




<!--
    <div class="row">
        <?php echo $form->labelEx($model,'pending_icu_confirmation_date'); ?>
        <?php echo $form->textField($model,'pending_icu_confirmation_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'pending_icu_confirmation_date'); ?>
    </div>
-->


    <div class="row">
        <?php echo $form->labelEx($model,'pending_icu_confirmation_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'pending_icu_confirmation_date',
                'name'=>'pending_icu_confirmation_date',
                'value'=>$model->pending_icu_confirmation_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'pending_icu_confirmation_date'); ?>
    </div>




<!--
    <div class="row">
        <?php echo $form->labelEx($model,'pending_customer_confirmation_date'); ?>
        <?php echo $form->textField($model,'pending_customer_confirmation_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'pending_customer_confirmation_date'); ?>
    </div>
-->

    <div class="row">
        <?php echo $form->labelEx($model,'pending_customer_confirmation_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'pending_customer_confirmation_date',
                'name'=>'pending_customer_confirmation_date',
                'value'=>$model->pending_customer_confirmation_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'pending_customer_confirmation_date'); ?>
    </div>







<!--
    <div class="row">
        <?php echo $form->labelEx($model,'pending_f_ire_confirmation_date'); ?>
        <?php echo $form->textField($model,'pending_f_ire_confirmation_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'pending_f_ire_confirmation_date'); ?>
    </div>
-->

    <div class="row">
        <?php echo $form->labelEx($model,'pending_f_ire_confirmation_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'pending_f_ire_confirmation_date',
                'name'=>'pending_f_ire_confirmation_date',
                'value'=>$model->pending_f_ire_confirmation_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'pending_f_ire_confirmation_date'); ?>
    </div>






<!--
    <div class="row">
        <?php echo $form->labelEx($model,'pending_approval_date'); ?>
        <?php echo $form->textField($model,'pending_approval_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'pending_approval_date'); ?>
    </div>
-->
    <div class="row">
        <?php echo $form->labelEx($model,'pending_approval_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'pending_approval_date',
                'name'=>'pending_approval_date',
                'value'=>$model->pending_approval_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'pending_approval_date'); ?>
    </div>






<!--
    <div class="row">
        <?php echo $form->labelEx($model,'due_for_disbursement_date'); ?>
        <?php echo $form->textField($model,'due_for_disbursement_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'due_for_disbursement_date'); ?>
    </div>
-->
    <div class="row">
        <?php echo $form->labelEx($model,'due_for_disbursement_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'due_for_disbursement_date',
                'name'=>'due_for_disbursement_date',
                'value'=>$model->due_for_disbursement_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'due_for_disbursement_date'); ?>
    </div>






<!--
    <div class="row">
        <?php echo $form->labelEx($model,'loan_disbursed_successfully_date'); ?>
        <?php echo $form->textField($model,'loan_disbursed_successfully_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'loan_disbursed_successfully_date'); ?>
    </div>
-->
    <div class="row">
        <?php echo $form->labelEx($model,'loan_disbursed_successfully_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'loan_disbursed_successfully_date',
                'name'=>'loan_disbursed_successfully_date',
                'value'=>$model->loan_disbursed_successfully_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'loan_disbursed_successfully_date'); ?>
    </div>







<!--
    <div class="row">
        <?php echo $form->labelEx($model,'offer_declined_date'); ?>
        <?php echo $form->textField($model,'offer_declined_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'offer_declined_date'); ?>
    </div>
-->
    <div class="row">
        <?php echo $form->labelEx($model,'offer_declined_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'offer_declined_date',
                'name'=>'offer_declined_date',
                'value'=>$model->offer_declined_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'offer_declined_date'); ?>
    </div>





<!--
    <div class="row">
        <?php echo $form->labelEx($model,'risk_request_denied_date'); ?>
        <?php echo $form->textField($model,'risk_request_denied_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'risk_request_denied_date'); ?>
    </div>
-->
    <div class="row">
        <?php echo $form->labelEx($model,'risk_request_denied_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'risk_request_denied_date',
                'name'=>'risk_request_denied_date',
                'value'=>$model->risk_request_denied_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'risk_request_denied_date'); ?>
    </div>





<!--
    <div class="row">
        <?php echo $form->labelEx($model,'request_denied_date'); ?>
        <?php echo $form->textField($model,'request_denied_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'request_denied_date'); ?>
    </div>
-->
    <div class="row">
        <?php echo $form->labelEx($model,'request_denied_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'request_denied_date',
                'name'=>'request_denied_date',
                'value'=>$model->request_denied_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'request_denied_date'); ?>
    </div>





<!--
    <div class="row">
        <?php echo $form->labelEx($model,'not_qualified_date'); ?>
        <?php echo $form->textField($model,'not_qualified_date',array('size'=>17,'maxlength'=>17)); ?>
        <?php echo $form->error($model,'not_qualified_date'); ?>
    </div>
-->
    <div class="row">
        <?php echo $form->labelEx($model,'not_qualified_date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'not_qualified_date',
                'name'=>'not_qualified_date',
                'value'=>$model->not_qualified_date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'mm-dd-yy',
                    //'maxDate'=> '+0',
                ),
                'htmlOptions'=> array('style'=>''),

            ));

        //    end

        ?>


        <?php echo $form->error($model,'not_qualified_date'); ?>
    </div>






    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
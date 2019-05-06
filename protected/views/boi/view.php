<?php
/* @var $this BoiController */
/* @var $model Boi */
//$this->redirect($this->createUrl('Boi/view &id='+$model->member_id));
//echo  Yii::app()->request->getQuery('id');
//echo '<br/>';
//echo $model->member_id;


//if(Yii::app()->request->getQuery('id') == $model->member_id ){
//
//}
//else{
//    $this->redirect($this->createUrl('Boi/view',array('id'=>$model->member_id)));
//    die();
//}




$this->breadcrumbs=array(
	'Bois'=>array('index'),
	$model->id,
);
if(strtolower(Yii::app()->user->id)=='admin') {
    $this->menu = array(
        array('label' => 'List', 'url' => array('index')),
        array('label' => 'Create', 'url' => array('create')),
        array('label' => 'Update', 'url' => array('update', 'id' => $model->id)),
        array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage', 'url' => array('admin')),
    );
}
else{
    $this->menu = array(
        // previously 'No action'
        array('label' => 'Go back', 'url' => array('admin')),

    );
}
?>


<h3>View Loan For Customer #<?php echo $model->member_id; ?></h3>
<?php //echo '<a href="?r=conversations/view&id='.$model->id.'"><button>Log a Conversation</button></a>' ;?>
<?php //echo '<a href="?r=boi/conversationlist&id='.$model->id.'"><button>See Conversations</button></a>' ;?>
<?php //echo CHtml::link('<button>Log a Conversation</button>',['boi/conversations','id'=>$model->id]); ?>


<div class="row" >

    <div class="col-md-5">
        <?php  $this->renderPartial('conversations', ['model'=>$model2,'model2'=>$model]);  ?>
    
    </div>



<div class="col-md-7    ">
<?php echo CHtml::link('<button>Move to DTA</button>',['casetwo/dta','id'=>$model->id], ['target'=>'_blank']); ?>&nbsp;
<?php echo CHtml::link('<button>Move to Aggregator</button>',['casetwo/aggregator','id'=>$model->id], ['target'=>'_blank']); ?>

<?php
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        //'id',
        'customer_name',
        'phone_number',
        'association',
        'amount',
        'amount_due',
        'amount_re_paid',
        'amount_in_default',
        'loan_disbursed_successfully_date',

        'member_id',
        'state',

        'tenure',
        'mou_status',
        'sub_aggregator',
        'aggregator',
        'beneficiary_institution',
        'nuban',
        'date_requested',
        'status',
        'reason_for_rejection',
        'first_due_date',
        'last_change_date',
        'pending_icu_confirmation_date',
        'pending_customer_confirmation_date',
        'pending_f_ire_confirmation_date',
        'pending_approval_date',
        'due_for_disbursement_date',
        'offer_declined_date',
        'risk_request_denied_date',
        'request_denied_date',
        'not_qualified_date',
	),
));

	?>

    </div>
  </div>

<div class="row">
    <div class="col-md-12">
        <?php
        $this->renderPartial('conversation_list', ['model'=>$model2,'model2'=>$model]);
        // $this->renderPartial('conversation_list', ['model'=>$model2]);
        // require_once ('conversation_list.php');
        ?>
    </div>
</div>


<?php
/* @var $this BoiController */
/* @var $model Boi */
/*
$this->breadcrumbs=array(
	'Bois'=>array('index'),
	'Manage',
);
*/

if (isset($_POST['mytext'])) {
    $conn = Yii::app()->db;
    $temp = $_POST['mytext'];
$sql = "UPDATE announcement SET info = '$temp' WHERE id=1 ";
//send query to database
$command = $conn->createCommand($sql);
$command->query();
}
if(strtolower(Yii::app()->user->id)=='admin') {
    $this->menu = array(

        array('label' => 'List Customers', 'url' => array('index')),
        array('label'=>'Loan processing issues(Aggregator)', 'url'=>array('casetwo/aggregator')),
		array('label'=>'Loan processing issues(DTA)', 'url'=>array('casetwo/dta')),
		array('label' => 'Loan Reconciliation', 'url' => array('boi/admin')),
        array('label' => 'TraderMONI', 'url' => array('tradermoni/create')),
		array('label' => 'Enquiries', 'url' => array('enquiry/create')),
		array('label' => 'Fraud', 'url' => array('fraud/create')),
		array('label'=>'kwikCash', 'url'=>array('kwikcash/create')),

		array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => '(Outgoing Calls) Unaccepted Loans', 'url' => array('unacceptedloans/admin')),
        array('label' => '(Outgoing Calls) View my Calls', 'url' => array('unacceptedloanscalls/admin')),

        array('label' => 'Micro-finance Banks', 'url' => array('mfb/admin')),
        array('label' => '(Outgoing Calls) Unaccepted Loans', 'url' => array('unacceptedloans/admin')),
        array('label' => '(Outgoing Calls) View my Calls', 'url' => array('unacceptedloanscalls/admin')),
        array('label'=>'Tradermoni Outgoing Calls', 'url'=>array('tradermoniOutgoing/admin')),


);
}
else if(strtolower(Yii::app()->user->id)== 'isaac_fasoyin') {
    $this->menu = array(

        array('label'=>'Loan processing issues(Aggregator)', 'url'=>array('casetwo/aggregator')),
		array('label'=>'Loan processing issues(DTA)', 'url'=>array('casetwo/dta')),
		array('label' => 'Loan Reconciliation', 'url' => array('boi/admin')),
        array('label' => 'TraderMONI', 'url' => array('tradermoni/create')),
		array('label' => 'Enquiries', 'url' => array('enquiry/create')),
		array('label' => 'Fraud', 'url' => array('fraud/create')),
		array('label'=>'kwikCash', 'url'=>array('kwikcash/create')),

		array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => '(Outgoing Calls) Unaccepted Loans', 'url' => array('unacceptedloans/admin')),
        array('label' => '(Outgoing Calls) View my Calls', 'url' => array('unacceptedloanscalls/admin')),
        array('label'=>'Tradermoni Outgoing Calls', 'url'=>array('tradermoniOutgoing/admin')),

        array('label' => 'Micro-finance Banks', 'url' => array('mfb/admin')),

        array('label'=>'Tradermoni vs Marketmoni (Differences)', 'url'=>array('site/base')),
        // array('label' => 'Generate Ticket', 'url' => array('tickets/create')),
    );?>

<!-- <button id = 'annB'>Enter announcement</button>
<div id="ann" style="display: none;">

    <input type="text" id="announcer" class='form-control' placeholder="leave blank to clear all Notices">
    <button id='sub' class="btn btn-primary">Submit</button>
</div> -->

<?php
}
else{
    $this->menu = array(
        //array('label' => 'No Action', 'url' => array('')),
		array('label'=>'Loan processing issues(Aggregator)', 'url'=>array('casetwo/aggregator')),
		array('label'=>'Loan processing issues(DTA)', 'url'=>array('casetwo/dta')),
		array('label' => 'Loan Reconciliation', 'url' => array('boi/admin')),
        array('label' => 'TraderMONI', 'url' => array('tradermoni/create')),
		array('label' => 'Enquiries', 'url' => array('enquiry/create')),
		array('label' => 'Fraud', 'url' => array('fraud/create')),
		array('label'=>'kwikCash', 'url'=>array('kwikcash/create')),

		array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => '(Outgoing Calls) Unaccepted Loans', 'url' => array('unacceptedloans/admin')),
        array('label' => '(Outgoing Calls) View my Calls', 'url' => array('unacceptedloanscalls/admin')),
        array('label'=>'Tradermoni Outgoing Calls', 'url'=>array('tradermoniOutgoing/create')),
        array('label'=>'Tradermoni vs Marketmoni (Differences)', 'url'=>array('site/base')),
    );
}
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#boi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<marquee ><h3><?php
$sql = "SELECT info FROM announcement WHERE id=1 ";
//send query to database
$conn = Yii::app()->db;
$command = $conn->createCommand($sql);
$command->query();
$dataReader = $command->query();
$row=$dataReader->read();
if (!empty($row)) {
    echo $row['info'];

}
?></h3></marquee>
<h1>Manage Customers</h1>



<br/>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'boi-grid',
	'dataProvider'=>$model->search(),
    //'id'=>$model->member_id,
	'filter'=>$model,
	'columns'=>array(
        //'id',
        'customer_name',
        'phone_number',
        'association',
        'member_id',
        'state',
        'amount',
        /*
        'tenure',
        'mou_status',
        'amount_due',
        'amount_re_paid',
        'amount_in_default',
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
        'loan_disbursed_successfully_date',
        'offer_declined_date',
        'risk_request_denied_date',
        'request_denied_date',
        'not_qualified_date',
        */
        array(
			//'class'=>'CButtonColumn',
            'template' => '{view}',
            'class' => 'CButtonColumn',


		),
	),
)); ?>
<br/>

<?php
/*
if(Yii::app()->user->id=='admin' || Yii::app()->user->id=='Cynthia_Onwumah' ||Yii::app()->user->id== 'Isaac_Fasoyin' ){
    echo CHtml::button("Export Today's Loans & Rec Report", array('submit' => array('boi/excelDaily')));
    echo'<br/>';
    echo'<br/>';
    echo CHtml::button('Export all Loans & Rec Reports', array('submit' => array('boi/excel')));
}
*/
?>


<?php if(strtolower(Yii::app()->user->id)=='admin' ||strtolower(Yii::app()->user->id)== 'isaac_fasoyin' ): ?>
	<div class='row'>
		<div class='col-md-3'>
			<?php echo CHtml::button("Export Today's Loans & Rec Report", array('submit' => array('boi/excelDaily')), ['class'=>'form-control btn btn-sm']);?>
		</div>
	</div>
<?php endif; ?>

<form method="POST" action = <?= $this->createUrl('boi/excel')?> >

	<?php if(strtolower(Yii::app()->user->id) == 'admin'  ||strtolower(Yii::app()->user->id)== 'isaac_fasoyin' ): ?>
		<div class='row' style="margin-top:30px">
			<div class='col-md-3'>
				<input name= 'start_date' class='form-control' type='date'></input>
			</div>

			<div class='col-md-3'>
				<input name="end_date" class='form-control' type='date' ></input>
			</div>

			<div class='col-md-3'>
				 <input type="submit" name="submit" value="Generate Report" class="form-control" />

			</div>
		</div>
	<?php endif; ?>
</form>

<script>


  $('#annB').click(function () {
      $('#ann').slideToggle();
  });

</script>

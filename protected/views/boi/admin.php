<?php
/* @var $this BoiController */
/* @var $model Boi */
/*
$this->breadcrumbs=array(
	'Bois'=>array('index'),
	'Manage',
);
*/

if(Yii::app()->user->id=='admin') {
    $this->menu = array(

        array('label' => 'List Customers', 'url' => array('index')),
        array('label' => 'Create Customers', 'url' => array('create')),
        array('label'=>'Loan processing issues(Aggregator)', 'url'=>array('casetwo/aggregator')),
		array('label'=>'Loan processing issues(DTA)', 'url'=>array('casetwo/dta')),
		array('label' => 'Loan Reconciliation', 'url' => array('boi/admin')),
		array('label' => 'Enquiries', 'url' => array('enquiry/create')),
		array('label' => 'Fraud', 'url' => array('fraud/create')),
		array('label'=>'kwikCash', 'url'=>array('kwikcash/create')),
	
		array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => '(Outgoing Calls) Unaccepted Loans', 'url' => array('unacceptedloans/admin')),
        array('label' => '(Outgoing Calls) View my Calls', 'url' => array('unacceptedloanscalls/admin')),
		
        array('label' => 'Micro-finance Banks', 'url' => array('mfb/admin')),
	array('label' => 'Create User', 'url' => array('user/create')),
        

);
}
else if(Yii::app()->user->id=='ADMIN' ||strtolower(Yii::app()->user->id)== 'isaac_fasoyin') {
    $this->menu = array(

        array('label'=>'Loan processing issues(Aggregator)', 'url'=>array('casetwo/aggregator')),
		array('label'=>'Loan processing issues(DTA)', 'url'=>array('casetwo/dta')),
		array('label' => 'Loan Reconciliation', 'url' => array('boi/admin')),
		array('label' => 'Enquiries', 'url' => array('enquiry/create')),
		array('label' => 'Fraud', 'url' => array('fraud/create')),
		array('label'=>'kwikCash', 'url'=>array('kwikcash/create')),
	
		array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => '(Outgoing Calls) Unaccepted Loans', 'url' => array('unacceptedloans/admin')),
        array('label' => '(Outgoing Calls) View my Calls', 'url' => array('unacceptedloanscalls/admin')),
		
        array('label' => 'Micro-finance Banks', 'url' => array('mfb/admin')),
        
       // array('label' => 'Generate Ticket', 'url' => array('tickets/create')),
    );
}
else{
    $this->menu = array(
        //array('label' => 'No Action', 'url' => array('')),
		array('label'=>'Loan processing issues(Aggregator)', 'url'=>array('casetwo/aggregator')),
		array('label'=>'Loan processing issues(DTA)', 'url'=>array('casetwo/dta')),
		array('label' => 'Loan Reconciliation', 'url' => array('boi/admin')),
		array('label' => 'Enquiries', 'url' => array('enquiry/create')),
		array('label' => 'Fraud', 'url' => array('fraud/create')),
		array('label'=>'kwikCash', 'url'=>array('kwikcash/create')),
	
		array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => '(Outgoing Calls) Unaccepted Loans', 'url' => array('unacceptedloans/admin')),
        array('label' => '(Outgoing Calls) View my Calls', 'url' => array('unacceptedloanscalls/admin')),
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

<h1>Manage Customers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>


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


<?php if(Yii::app()->user->id=='admin' ||strtolower(Yii::app()->user->id)== 'isaac_fasoyin' ): ?>
	<div class='row'>
		<div class='col-md-3'>
			<?php echo CHtml::button("Export Today's Loans & Rec Report", array('submit' => array('boi/excelDaily')), ['class'=>'form-control btn btn-sm']);?>
		</div>
	</div>
<?php endif; ?>

<form method="POST" action = <?= $this->createUrl('boi/excel')?> >

	<?php if(Yii::app()->user->id=='admin' ||strtolower(Yii::app()->user->id)== 'isaac_fasoyin' ): ?>
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





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
        array('label'=>' '),
        array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => 'MarketMoni Registration', 'url' => array('casetwo/create')),
        array('label' => 'Enquiries', 'url' => array('enquiry/create')),
        array('label' => 'Micro-finance Banks', 'url' => array('mfb/admin')),
        array('label' => 'Unaccepted Loans', 'url' => array('unacceptedloans/admin')),
        array('label' => 'Unaccepted Loan Calls', 'url' => array('unacceptedloanscalls/admin')),
      //  array('label' => 'Generate Ticket', 'url' => array('tickets/create')),

);
}
else if(Yii::app()->user->id=='Cynthia_Onwumah' ||Yii::app()->user->id== 'Isaac_Fasoyin') {
    $this->menu = array(

       // array('label' => 'List Customers', 'url' => array('index')),
        //array('label' => 'Create Customers', 'url' => array('create')),
       // array('label'=>' '),
        array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => 'MarketMoni Registration', 'url' => array('casetwo/create')),
        array('label' => 'Enquiries', 'url' => array('enquiry/create')),
        array('label' => 'Micro-finance Banks', 'url' => array('mfb/admin')),
       // array('label' => 'Generate Ticket', 'url' => array('tickets/create')),
    );
}
else{
    $this->menu = array(
        //array('label' => 'No Action', 'url' => array('')),
        array('label'=>'My Loans & Rec comments', 'url'=>array('conversations/admin')),
        array('label' => 'MarketMoni Registration', 'url' => array('casetwo/create')),
        array('label' => 'Enquiries', 'url' => array('enquiry/create')),
      //  array('label' => 'Generate Ticket', 'url' => array('tickets/create')),

       // array('label' => 'Micro-finance Banks', 'url' => array('mfb/admin')),
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
<?php
if(Yii::app()->user->id=='admin' || Yii::app()->user->id=='Cynthia_Onwumah' ||Yii::app()->user->id== 'Isaac_Fasoyin' ){
    echo CHtml::button("Export Today's Loans & Rec Report", array('submit' => array('boi/excelDaily')));
     echo'<br/>';
    echo'<br/>';
echo CHtml::button('Export all Loans & Rec Reports', array('submit' => array('boi/excel')));
}
?>
<br/>
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

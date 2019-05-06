<?php
/* @var $this CasetwoController */
/* @var $model Casetwo */

$this->breadcrumbs=array(
	'Market Moni'=>array('index'),
	$model->id,
);
if(strtolower(Yii::app()->user->id)=='admin' ) {
    $this->menu = array(
        //array('label' => 'List MarketMoni Registrations', 'url' => array('index')),
       array('label' => 'Loan Processing issue(DTA))', 'url' => array('casetwo/dta')),
		array('label' => 'Loan Processing issue(Aggregator))', 'url' => array('casetwo/aggregator')),
        array('label' => 'Update MarketMoni Registration', 'url' => array('update', 'id' => $model->id)),
        array('label'=>'Delete MarketMoni Registration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
        array('label' => 'Manage MarketMoni Registrations', 'url' => array('admin')),
    );

}
else{
    $this->menu = array(
        //array('label' => 'List MarketMoni Registrations', 'url' => array('index')),
        array('label' => 'Loan Processing issue(DTA))', 'url' => array('casetwo/dta')),
		array('label' => 'Loan Processing issue(Aggregator))', 'url' => array('casetwo/aggregator')),
        array('label' => 'Update MarketMoni Registration', 'url' => array('update', 'id' => $model->id)),
        //array('label'=>'Delete Case two', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
        array('label' => 'Manage MarketMoni Registrations', 'url' => array('admin')),
    );

}
?>

<h1>View MarketMoni Registration #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_name',
		'cust_phone_number',
		'agent_name',
		'agent_phn_number',
		'date',
		'association',
		'complaints',
		'other_comments',
		'response',
        'created_by',
        'source',
		'action',
		'application_source',
	),
)); ?>


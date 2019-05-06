<?php
/* @var $this TradermoniOutgoingController */
/* @var $model TradermoniOutgoing */

$this->breadcrumbs=array(
	'Tradermoni Outgoings'=>array('index'),
	$model->name,
);

if(strtolower(Yii::app()->user->id)=='admin'){
	$this->menu=array(
		array('label'=>'List TradermoniOutgoing', 'url'=>array('index')),
		array('label'=>'Create TradermoniOutgoing', 'url'=>array('create')),
		array('label'=>'Update TradermoniOutgoing', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Delete TradermoniOutgoing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage TradermoniOutgoing', 'url'=>array('admin')),
	);
} else {
	$this->menu=array(
		array('label'=>'List TradermoniOutgoing', 'url'=>array('index')),
		array('label'=>'Create TradermoniOutgoing', 'url'=>array('create')),
		array('label'=>'Update TradermoniOutgoing', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Manage TradermoniOutgoing', 'url'=>array('admin')),
	);
}

?>

<h1>View TradermoniOutgoing #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		'name',
		'phone_no',
		[
			'attribute' => 'status',
			'label' => 'Status',
			'value' => function ($model) {
				if ($model->status == 0) {
				return 'Rejected';
				} elseif ($model->status == 1) {
					return 'Verified';
				} elseif ($model->status == 2) {
					return 'Unreachable';
				} else {
						return "Unknown";
					}
		}],
		'reason',
	),
)); ?>

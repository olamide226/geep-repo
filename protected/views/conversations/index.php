<?php
/* @var $this ConversationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conversations',
);

$this->menu=array(
	array('label'=>'Create Conversations', 'url'=>array('create')),
	array('label'=>'Manage Conversations', 'url'=>array('admin')),
);
?>

<h1>Conversations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

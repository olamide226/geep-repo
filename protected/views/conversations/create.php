<?php
/* @var $this ConversationsController */
/* @var $model Conversations */

$this->breadcrumbs=array(
	'Conversations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Conversations', 'url'=>array('index')),
	array('label'=>'Manage Conversations', 'url'=>array('admin')),
);
?>

<h1>Create Conversations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
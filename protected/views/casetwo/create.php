<?php
/* @var $this CasetwoController */
/* @var $model Casetwo */

$this->breadcrumbs=array(
	'MarketMoni Registrations'=>array('index'),
	'Create',
);

$this->menu=array(
    array('label'=>'Back', 'url'=>array('boi/admin')),
	//array('label'=>'List MarketMoni Registrations', 'url'=>array('index')),
	array('label'=>'Manage MarketMoni Registrations', 'url'=>array('admin')),
);
?>

<h1>New MarketMoni Registration</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
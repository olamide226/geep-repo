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
	array('label'=>'Manage DTA Registrations', 'url'=>array('admin')),
);
?>

<!-- this code should be re-written if more views are to be added -->
<h1>Loan Processing issues  </h1>

<?php 
	
	if($view == 'aggregator')
		$this->renderPartial('aggregator', array('model'=>$model));
	
	elseif($view == 'dta')
		$this->renderPartial('dta', array('model' => $model));
		
	else
		$this->renderPartial('_form', array('model'=>$model));
	
?>

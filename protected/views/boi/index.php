<?php
/* @var $this BoiController */
/* @var $dataProvider CActiveDataProvider */
/*
$this->breadcrumbs=array(
	'Bois',
);
*/



if(Yii::app()->user->id=='admin'){


$this->menu=array(

	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
}
else{
    $this->menu = array(
        array('label' => 'No Action', 'url' => array('')),

    );
}
?>

<h1>Bois</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

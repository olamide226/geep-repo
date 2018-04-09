<?php

/* @var $this BoiController */
/* @var $model Boi */

/*$this->breadcrumbs=array(
	'Bois'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'Create', 'url'=>array('create')),
);

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
");*/
?>

<!-- <h3>Conversations for Current Loan </h3> -->

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));*/ ?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
));*/ ?>
</div><!-- search-form -->

<?php
// create database connection
$conn = Yii::app()->db;
$sql = sprintf("SELECT amount, date,categories,ticket_number,comment,comment_by FROM conversations
			WHERE member_id = '%s' ORDER BY created_on desc LIMIT 5", $model2->member_id);
//send query to database
$command = $conn->createCommand($sql);

// $dataProvider=new CActiveDataProvider('Conversations');
// $this->widget('zii.widgets.grid.CGridView', array(
// 	'id'=>'conversations-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id',
// 		'boi_id',
//         'member_id',
//         'created_on',
// 		'comment',
// 		'comment_by',
// 		'date',
// 		'phone_number',
// 		'source',
//         'categories',
//         'amount',
//         'agent_name',
//         'date_paid',
//         'other_comments',
//         'fraud_suspected',
//         'created_on',

// 	),
// ));
?>



<div class="table-responsive">
   <hr><div class="header"><h3>Call Logs For Current Customer</h3></div>

   <table class='table table-striped' cellspacing="0">
      <tr>
         <th>Categories</th>
         <th>Date Called</th>
         <th>Ticket Number</th>
         <th>Amount Paid</th>
         <th>Comment By</th>
         <th width="250">Comments</th>
      </tr>
<?php
//fetch data from db
$dataReader=$command->query();
//checks if theres a call log
if ($row=$dataReader->read()){
// calling read() repeatedly until it returns false
while(($row=$dataReader->read())!==false) {

// using foreach to traverse through every row of data
// foreach($dataReader as $row) { ... }
// retrieving all rows at once in a single array
// $rows=$dataReader->readAll();

?>

      <tr>
         <td><?php echo $row['categories']; ?></td>
	   <td><?php $mytime = $row['date']; echo date("M jS, Y", strtotime($mytime)); ?></td>
         <td><?php echo $row['ticket_number']; ?></td>
         <td><?php echo $row['amount']; ?></td>
         <td><?php echo $row['comment_by']; ?></td>
         <td><?php echo $row['comment']; ?></td>
      </tr>
<?php }} else{ echo "<h3>No Previous Record Found!!</h3>"; } ?>
   </table>

   <hr style='border:1px solid green'>
</div>

<?php
$myvar = $_REQUEST['q'];
// create database connection
//$conn = Yii::app()->db;
$conn = mysqli_connect('localhost','root','root123','geep');

$sql = sprintf("SELECT customer_name, date,complaints, response,created_by FROM casetwo
			WHERE cust_phone_number like '%s' ORDER BY date desc LIMIT 5", $myvar);
//send query to database
//$command = $conn->createCommand($sql);
$command = mysqli_query($conn, $sql);
?>

<div class="table">
   <hr><div class="header"><h3>Call Logs For Current Customer</h3></div>

   <table class='table table-striped table-bordered table-hover' cellspacing="0">
      <tr>
         <th>Customer Name</th>
         <th>Date Called</th>
         <th>Comment By</th>
         <th width="200">Complaints</th>
	 <th width='250'>Response</th>
      </tr>
<?php
//fetch data from db
//$dataReader=$command->query();
//checks if theres a call log
//if ($row=$dataReader->read()){
// calling read() repeatedly until it returns false
//while(($row=$dataReader->read())!==false)
//if (mysqli_fetch_assoc($command)!=""){
while ($row = mysqli_fetch_assoc($command)){

// using foreach to traverse through every row of data
// foreach($dataReader as $row) { ... }
// retrieving all rows at once in a single array
// $rows=$dataReader->readAll();

?>

      <tr>
         <td><?php echo $row['customer_name']; ?></td>
	   <td><?php $mytime = $row['date']; echo date("M jS, Y", strtotime($mytime)); ?></td>
	<td><?php echo $row['created_by']; ?></td>
         <td><?php echo $row['complaints']; ?></td>
         
         
         <td><?php echo $row['response']; ?></td>
      </tr>
<?php }//} else{ echo "<h3>No Previous Record Found!!</h3>"; } ?>
   </table>

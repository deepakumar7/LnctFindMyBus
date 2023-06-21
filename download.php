<?php
include('connection.php');
$date = $_POST['date'];
$slot = $_POST['Slot'];
$sql = "Select * file from upload where date='$date', slot='$slot'";  
$result = mysqli_query($con, $sql);
if($result){
    echo "<a href='uploads/<?php echo $sql; ?>'";
} 
?>
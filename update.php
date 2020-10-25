<?php
// include database connection file
include_once("function.php");
$updatedata=new DB_con(); 
if(isset($_POST['update']))
{
// Get the userid
$userid=intval($_GET['id']);
// Posted Values  
$name=$_POST['name'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];

//Function Calling
$sql=$updatedata->update($name,$father,$mother,$email,$phone,$address,$userid);

// Mesage after updation
 echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
 echo "<script>window.location.href='index.php'</script>"; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CRUD Operations using PHP OOP and MYSQL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>PHP CRUD Operations using PHP OOP and MYSQL</h3>
<hr />
</div>
</div>

<?php 
// Get the userid
$userid=intval($_GET['id']);
$onerecord=new DB_con(); 
$sql=$onerecord->fetchonerecord($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>              

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="name" value="<?php echo htmlentities($row['name']);?>" class="form-control" >
</div>
<div class="col-md-4"><b>Father</b>
<input type="text" name="father" value="<?php echo htmlentities($row['father']);?>" class="form-control">
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Mother</b>
<input type="text" name="mother" value="<?php echo htmlentities($row['mother']);?>" class="form-control">
</div>
<div class="col-md-4"><b>Phone</b>
<input type="text" name="phone" value="<?php echo htmlentities($row['phone']);?>" class="form-control" maxlength="10">
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Email</b>
<input type="email" name="email" value="<?php echo htmlentities($row['email']);?>" class="form-control">
</div>
<div class="col-md-4"><b>Entry Date</b>
<input type="text" name="address" value="<?php echo htmlentities($row['address']);?>" class="form-control" maxlength="10">
</div>
</div>  
<?php } ?>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div> 
     </form>
            
      
	</div>
</div>

</body>
</htm
<?php
// include database connection file
require_once'function.php';
$insertdata=new DB_con(); 
if(isset($_POST['insert']))
{

// Posted Values  
$name=$_POST['name'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$entry_date=$_POST['entry_date'];
//Function Calling
$sql=$insertdata->insert($name,$father,$mother,$email,$phone,$address,$entry_date);

if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index.php'</script>"; 
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CRUD Operations using PHP OOP and MYSQL </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Insert Record | PHP CRUD Operations using PHP OOP and MYSQL</h3>
<hr />
</div>
</div>


<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="name" class="form-control" required>
</div>
<div class="col-md-4"><b>Father</b>
<input type="text" name="father" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Mother</b>
<input type="text" name="mother" class="form-control" required>
</div>
<div class="col-md-4"><b>Email</b>
<input type="email" name="email" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Phone</b>
<input type="text" name="phone" class="form-control" required>
</div>
<div class="col-md-4"><b>EntryDate</b>
<input type="date" name="entry_date" class="form-control" maxlength="10" required>
</div>
</div>   



<div class="row">
<div class="col-md-8"><b>Address</b>
<textarea class="form-control" name="address" required></textarea>
</div>
</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
     
         

</form>
              
</div>
</div>
</body>
</html>
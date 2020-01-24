<html>
<head>
	<style type="text/css">
		.container{
			padding: 20px;
			width: 75%;
			margin: 15px;
		}
		.row:after {
 			 content: "";
  			display: table;
  			clear: both;
		}
		.col-25 {
  			float: left;
 			width: 15%;
  			margin-top: 9px;
		}
		.col-75 {
  			float: left;
  			width: 85%;
  			margin-top: 9px;
		}
		input[type="text"]{
			width:35%;
		}
		input[type="submit"]{
			margin-top: 25px;
			height:5%;
			width: 10%;
			float: left;
		}
	</style>
	<script type="text/javascript">
		function validation() {
			// body...
			var phone=document.myForm.pnumber.value;
			var first=document.myForm.fname.value;
			var last=document.myForm.lname.value;
			var email=document.myForm.email.value;
	
			if(first=="")
			{
				alert("Enter FIRST NAME")
				return false;
			}
			if(last=="")
			{
				alert("Enter LAST NAME")
				return false;
			}
			if(phone=="")
			{
				alert("Enter Phone Number")
				return false;
			}
			if(isNaN(phone) || phone.indexOf(" ")!=-1)
			{
				alert("Enter Numeric Value")
				return false;
			}
			if (phone.length>10 || phone.length<10)
           {
                alert("Enter 10 characters");
                return false;
           }
			if(email=="")
			{
				alert("Enter EMAIL")
				return false;
			}
			var atposition=email.indexOf("@");  
			var dotposition=email.lastIndexOf(".");  
			if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
  			alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  			return false;  
  			}  
		}
	</script>
</head>
<body>
	<form name="myForm" method="post" onsubmit="return validation()">
	<div class="container">
		<div class="row">
			<div class="col-25">
			FIRST NAME :
			</div>
			<div class="col-75">
				<input type="text" name="fname" id="fname">
			</div>
				<div class="col-25">
			LAST NAME :
			</div>
			<div class="col-75">
				<input type="text" name="lname" id="lname">
			</div>
			<div class="col-25">
			PHONE NUMBER :
			</div>
			<div class="col-75">
				<input type="text" name="pnumber" id="pnumber">
			</div>
			<div class="col-25">
			EMAIL :
			</div>
			<div class="col-75">
				<input type="text" name="email" id="email">
			</div>
		</div>
		<input type="Submit" name="submit">
	</div>
</form>
</body>
</html>

<?php
$conn=new mysqli("localhost","root","","form");
if($conn->connect_error)
{
	echo "Failed To Connect".$mysqli->connect_error;
	exit();
}
if(isset($_POST['submit']))
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST["pnumber"];
$email=$_POST["email"];

$sql="INSERT INTO info(FName,Lname,PNumber,Email)VALUES('$fname','$lname','$phone','$email')";

if(mysqli_query($conn,$sql))
{
	echo "Data Added";
}
}

if(isset($_POST['submit']))
{
	$result=mysqli_query($conn,"SELECT * from info");

	echo "<table border='1'>
			<tr>
			<th>Sr.Number</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone Number</th>
			<th>Email</th>
			</tr>";
		$count=0;
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".++$count."</td>";
		echo "<td>".$row['FName']."</td>";
		echo "<td>".$row['Lname']."</td>";
		echo "<td>".$row['PNumber']."</td>";
		echo "<td>".$row['Email']."</td>";
	}
}
?>
	
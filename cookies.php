<html>
<style type="text/css">
	
.ab
{
	color:blue;
	background-color: yellow;
	font-size: 25px;
}

.a
{
	color:purple;
	font-size: 30px;;
}

.b
{
	color:red;
	background-color: yellow;
	font-size: 40px
}

</style>
<body>

	<table cellspacing="60px" >
		
		<tr class="a">
			<td align="center">
			Your request to register is being processed.<br><br>
			</td>
		</tr>
		<tr class="b">
			<td>
				<img src="proc.gif" height="400px" width="900px">
			</td>
		</tr>
	</table>

<br><br><br>
<table cellspacing="30px" cellpadding="20px">

	<th class="b"><u><i>Personal Details</i></u></th>
	<tr class="ab"><td>First Name: <?php echo $_POST["firstName"]; ?><br></td></tr>
	<tr class="ab"><td>Last Name: <?php echo $_POST["lastName"]; ?><br></td></tr>
	<tr class="ab"><td>Email: <?php echo $_POST["email"]; ?><br></td></tr>
	<tr class="ab"><td>Address: <?php echo $_POST["address"]; ?><br></td></tr>
	<tr class="ab"><td>Phone Number: <?php echo $_POST["number"]; ?><br></td></tr>
	<tr class="ab"><td>Date of Birth: <?php echo $_POST["dob"]; ?><br></td></tr>

</table>




</body>
</html> 
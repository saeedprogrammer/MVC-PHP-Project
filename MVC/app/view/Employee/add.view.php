<html>
<head>
<style>
#form_container
{
	background-color:#f2f1f2;
	width:350px;
	margin-left:20px;
	margin-top:40px;
}
.row
{
	padding:20px;
	padding-top:0px;
	padding-bottom:10px;
}
#employee-table th
{
 border-right:2px solid #666;
 border-bottom:2px solid #666;
}
#employee-table td
{
text-align : center;
}

#employee-table tr:nth-child(odd):not(:first-child)
{
background-color : #f2f1f2;
}
#message
{
background-color:green;
color:white;
padding-left:10px;
height:30px;
line-height:30px;
margin-top:0px;
margin-bottom:10px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>

   <form method="post" id="form_container">
   <span style="display:block;width:150px;position: relative;left:5px;top:-10px;background-color:#e5e4e5;height:20px">Employee Information</span>
   <span id="message" style="display:<?= isset($message) ? 'block' :'none'?>"  > <?= $message ?> </span>
	<div class="row">
		<label for="name" style="display:block">Employee name:</label>
		<input value="<?= isset($person)? $person->name : "" ?>" required type="text" id="name" name="name" placeholder="Write employee name here" style="border:none;height:25px;padding:10px;margin-top:10px;width:300px" ><br>
	</div>
	<div class="row">
		<label for="age" style="display:block">Employee age:</label>
		<input value="<?= isset($person)? $person->age : "" ?>" required type="number" min="22" max="60" id="age" name="age" placeholder="Write employee age here " style="border:none;height:25px;padding:10px;margin-top:10px;width:300px" ><br>
	</div>
	
	<div class="row">
		<label for="address" style="display:block">Employee address:</label>
		<input value="<?= isset($person) ? $person->adress : "" ?>" required type="text" min="22" max="60" id="address" name="address" placeholder="Write address age here " style="border:none;height:25px;padding:10px;margin-top:10px;width:300px" ><br>
	</div>

	<div class="row">
		<label for="salary" style="display:block">Employee salary:</label>
		<input value="<?= isset($person) ? $person->salary : "" ?>" required type="number" step="0.01" id="salary" name="salary" placeholder="Write salary age here " style="border:none;height:25px;padding:10px;margin-top:10px;width:300px" ><br>
	</div>
	<div class="row">
		<label for="tax" style="display:block">Employee tax(%):</label>
		<input value="<?= isset($person) ? $person->tax : "" ?>" required type="number" step="0.01" id="tax" name="tax" placeholder="Write tax age here " style="border:none;height:25px;padding:10px;margin-top:10px;width:300px" ><br>
	</div>
		<input type="submit" id="submit_button"  name="submit_button" style="background-color:#006b00;color:#fff;border:none;margin:10px;padding:5px;margin-left:20px;border-radius: 3px;"><br>
	</div>
	</form>
	
	
	
</body>
</html>
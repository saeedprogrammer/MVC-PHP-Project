<div id="w">
<p>I am employee </p>
<form action="/employee/add"  method="post">

  <input type="submit" name="submit" value="Create employee">
</form> 

<style>
table
{
	width: 90%;
	margin: auto;
}
table th  {
  background-color: red;
}

table tr:nth-child(odd)  {
  background-color: #ccc;
}

table tr:nth-child(even)  {
  background-color: #fff;
}

</style>
<table>
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Address</th>
		<th>Salary</th>
		<th>OPerations</th>
	</tr>


<?php

/*echo "<pre>";
var_dump($employees);
echo "</pre>";*/
foreach ($employees as $emp) {
	echo "<tr>";
		echo "<td>".$emp->name ."</td>" ;
		echo "<td>".$emp->age."</td>" ;
		echo "<td>".$emp->adress."</td>" ;
		//echo "<td>".$emp->salary."</td>" ;
		echo "<td>$emp->salary</td>" ;
		echo "<td>"."<a href='/employee/edit/$emp->ID' >Edit</a>  <a href='/employee/delete/$emp->ID' >Delate</a>" ."</td>";
	echo "</tr>";
}
?>

</table>
</div>
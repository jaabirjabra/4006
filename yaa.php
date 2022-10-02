<style type="text/css">
	table{
		background: yellow green;
		border-radius: 5px;
		margin-left: 20%;
		margin-right: 20%;
		cursor: pointer;
	}
	tr{
		color: red white green;
		background-color: purple;

		
	}
	td:hover{
		background: #D4F1F4;

	}
	.y{
		
		font-size: 18;
		background-color: #189AB4;
	}
	td{
		font-weight: bold;

	}
	.t{
		color:white;
	}
	.t:hover{
		background-color: purple;
	}
</style>
<?php
$University="DIU";
$STID="4006";
$Name="jaabir";
$Faculty="Computer Science & ENG";
$DEP="computer Science";
$Gender="Male";


/*echo "$University<br>";
echo "STID<br>";
echo "$Name<br>";
echo "$Faculty<br>";
echo "$DEP<br>";
echo "$Gender<br>";
echo "$Date<br>";*/



?>

<table border="1">
	<tr><td class="y">University</td><td class="t"><?php echo "$University"; ?></td></tr><br>
	<tr><td class="y">Studet ID</td ><td class="t"><?php echo "$STID"; ?></td></tr><br>
	<tr><td class="y">Name</td><td class="t"><?php echo "$Name"; ?></td></tr><br>
	<tr><td class="y">Faculty</td><td class="t"><?php echo "$Faculty";?></td></tr><br>
	<tr><td class="y">DEP</td><td class="t"><?php echo "$DEP";?></td></tr><br>
	<tr><td class="y">Gender<td class="t"><?php echo "$Gender";?></td></tr><br>
	
	

</table>
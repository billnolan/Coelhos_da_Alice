<?php
    $con = mysqli_connect("localhost","root","","coelhoalpha");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Falha na conexão com MySQL: " . mysqli_connect_error();
		//header("location: ../ilhadosbrinquedos/sair.php");
	}

	$resultmonitores = mysqli_query($con, "SELECT * from rules");
	
    while($row = mysqli_fetch_array($resultmonitores))
	{
        echo $row['id'].$row['description'].$row['type'];
    }
?>
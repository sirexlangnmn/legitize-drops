<?php

	include('../classes/connection.php');

	if (isset($_POST['update']))
	{
		$client_id         = $_POST['client_id'];
		$project_id        = $_POST['project_id'];
		$client_firstname  = $_POST['client_firstname'];
		$client_middlename = $_POST['client_middlename'];
		$client_surname    = $_POST['client_surname'];

		mysqli_query($con, "UPDATE client SET project_id = '$project_id', client_firstname = '$client_firstname', client_middlename = '$client_middlename', client_surname = '$client_surname' WHERE client_id = '$client_id'")or die(mysqli_error()); ?>
		
		<script>
		window.location="../../view/modules/pages_admin/proj_client.php";
		</script>

<?php } ?>
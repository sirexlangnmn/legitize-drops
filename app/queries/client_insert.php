<?php
	
	include('../classes/connection.php');

  	if (isset($_POST['submit']))
  	{
		$project_id        = $_POST['project_id'];
		$client_firstname  = $_POST['client_firstname'];
		$client_middlename = $_POST['client_middlename'];
		$client_surname    = $_POST['client_surname'];
		$image             = $_FILES["img1"]["name"];


		move_uploaded_file($_FILES["img1"]["tmp_name"],"../../view/modules/pages_admin/images/client/".$_FILES["img1"]["name"]);
		
	  
	  	$error_project=mysqli_query($con, "SELECT * FROM client WHERE project_id = '$project_id'")
	  	or die(mysqli_error());
 		$count=mysqli_num_rows($error_project);

 		if($count == 0) {
 			mysqli_query($con, "INSERT INTO client (project_id, client_firstname, client_middlename, client_surname, image) VALUES ('$project_id', '$client_firstname', '$client_middlename', '$client_surname', '$image')")or die(mysqli_error());		
 		}
 		else { ?>
 			<script type="text/javascript">
                alert('Client Already Exist');
            </script>

  <?php } ?>
			<script>
			window.location="../../view/modules/pages_admin/proj_client.php";
			</script>
<?php } ?>
  
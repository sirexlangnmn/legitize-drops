<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/assets2/images/favicon.gif">
    <title>Legitize Drops</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/assets2/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- morris CSS -->
    <link href="../../assets/assets2/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/assets2/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../../assets/assets2/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script>
        // Toastr message 
        $(document).ready(function(){
          $(function(){
            toastr.options = {
              "closeButton": true
            }
          <?php
            session_start();
            if(isset($_SESSION['toast_message']))
            {
              echo 'toastr.'.$_SESSION['toast_message']['type'].'("'.$_SESSION['toast_message']['message'].'", "'.$_SESSION['toast_message']['title'].'")';
              unset($_SESSION['toast_message']);
            }
          ?>          
          });
        });
    </script>

</head>
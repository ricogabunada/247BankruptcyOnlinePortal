<?php
$error[0] = '';

//Process Login
if(count($_POST)){

    $input = new \rexstaffing\uFlex\Collection($_POST);

    $user->login($input->Username, $input->Password, $input->auto);


    if($user->log->hasError()){
        $error = $user->log->getErrors();
    } else {
        redirect('./');
    }

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>247 Bankruptcy Online</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../sources/AdminLTE-2.3.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form method="post" id="login">
        		<center>
                    <img src="img/logo.png" class="img-responsive" alt="Image">
                    <div class="login-box-msg "><span style="color: red; font-weight: 700;"> <?php echo $error[0];?> </span></div>
        			<input type="text" name="Username" class="form-control" placeholder="Username/Email" required autofocus><br />
        			<input type="password" name="Password" class="form-control" placeholder="Password" required><br />
                    <button type="submit" class="btn btn-green">Sign In</button>
                    <!-- <a href="forgotpass">Forgot Password?</a> -->
        		</center>
        	</form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>
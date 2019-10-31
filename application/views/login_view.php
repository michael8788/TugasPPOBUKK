<?php
    $notif = $this->session->flashdata('notif');
    if ($notif != NULL) {
        echo '
            <div class="alert alert-danger">' .$notif.'</div>
        ';
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>1</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style2.css');?>">
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form action="<?php echo base_url('index.php/login/cek_login'); ?>" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">

			<label>Password</label>
			<input type="password" name="password"  class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" >

			<br/>
			<br/>
		</form>
		
	</div>


</body>
</html>
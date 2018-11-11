<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
        <div class="container">
        <div class="jumbotron">
                  <div class="container">
                    <h1 class="text-center">Hasil Pengumuman!</h1>

                     <!-- <p align="center"> <img src="<?php echo base_url()?>assets/img/contact.png" align="center" width='20%' height='20%'  alt=""> </p> -->
                    <h3 class="text-center">1 biodata orang e yang di search</h3>
                  </div>
    
                </div>    
        </div>
        
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                <br>
                <br>
                <?php foreach ($mahasiswa as $key) { ;?>
                <h4>NIM    :  <?php echo $key->nim?></h4>
                <br>
                <h4>Nama    : <?php echo $key->namalengkap?></h4>
                <br>
                <h4>Jabatan    : <?php echo $key->jabatan?></h4>
                <br>
                <h4>Status    : <?php echo $key->status?></h4>
                <?php } ?>
                </div>
            </div>
            </div>
        </div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
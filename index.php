

<!DOCTYPE html>

<html lang="en">
<head>
<title>TS3 FREE PROXY</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="CoderBirisi">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="tasarim/bootstrap-select.css" rel="stylesheet">

    <link rel="stylesheet" href="tasarim/bootstrap-flat.css" type="text/css">
    <link rel="stylesheet" href="tasarim/font-awesome-animation.min.css">
    <link rel="stylesheet" href="tasarim/main.css" type="text/css">

    <link href="tasarim/style.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,700italic' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Maven+Pro:400,500,600,700" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.png">
    <meta name="theme-color" content="#ffffff">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <link href="tasarim/blue.css" rel="stylesheet">
    <link href="tasarim/bluex.css" rel="stylesheet">
    <script src="tasarim/icheck.js"></script>

    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src='tasarim/bootstrap-select.js'></script>
    <script src='tasarim/Chart.js'></script>
    <script src='tasarim/bootbox.js'></script>
    <script src="tasarim/jquery.uploadifive.js"></script>
    <link rel="shortcut icon" href="">
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body style="background: #f6f7f8;">



<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-controller" style="margin-top:50px;">


       <div class="panel panel-default panel-signup">
     

        <div class="panel-heading" style="background-color: #1C242B;">
          <img src="tasarim/logo.png" style="height: 30px;">
        </div>
         <div class="panel-body">
 
        <form action="" method="POST">
		
          <div class="message">    	</div>
<?PHP
error_reporting(0);
$guvenlik = $_POST['g-recaptcha-response'];
$vericek=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lcx3EkUAAAAAMAEOqNTdLMIPIdNbF6-wL12iFyv&response=".$guvenlik."&remoteip=".$_SERVER['REMOTE_ADDR']);
$gonder = json_decode($vericek);
if($gonder->success == true) {
$kafanagore = rand(1,3000);	
$ip = $_POST["ip"];
$port = $_POST["port"];	
$lokasyon = $_POST["lokasyon"];	
$ch = curl_init();	
curl_setopt($ch,CURLOPT_URL,"http://api.bugresearcher.com/api.php?anahtar=hasan&yeni=$kafanagore&host=$ip&port=$port&method=proxy");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$output=curl_exec($ch);
curl_close($ch);
$ch2 = curl_init();	
curl_setopt($ch2,CURLOPT_URL,"http://api.bugresearcher.com/api2.php?anahtar=hasan&yeni=$kafanagore&host=$ip&port=$port&method=proxy");
curl_setopt($ch2,CURLOPT_RETURNTRANSFER,true);
$output2=curl_exec($ch2);
curl_close($ch2);
echo '<div class="alert alert-success">başarıyla olusturuldu '.$lokasyon.':'.$kafanagore.'</div>';	
}else{
echo'<div class="alert alert-danger">lütfen robot olmadıgını doğrula.</div>';
}
 ?> 
          <div class="form-group">
            <label>İP</label>
            <input type="text" name="ip" id="ip" class="form-control" placeholder="İP adresi" autocapitalize="off">
          </div>  	
		  
          <div class="form-group">
            <label>PORT</label>
            <input type="text" name="port" id="port" class="form-control" placeholder="Port" autocapitalize="off">
          </div>

		   <div class="form-group">
          <label>LOKASYON</label> 
                <select name="lokasyon" class="form-control" id="lokasyon">
                                   <option value="185.114.23.233">turkiye</option>
                                  
                                </select>
           </div>

		  
<center><div class="g-recaptcha" data-sitekey="6Lcx3EkUAAAAAEutjl6hXaVpMtZol8CeXgddTECl"></div>
		 
          <BR><div class="form-group">
            <button type="submit" class="btn btn-success btn-block">
              Hemen Olustur
            </button>
          </div>		  
  
  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<center>


</body>



    
</body>
</html>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Data Diklat</title>
		<link rel="icon" type="image/png" href="assets/dist/img/logosdd2.png">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

		<!-- jQuery 3 -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
	
		<script src="lib/jquery.js"></script>
		<script src="dist/jquery.validate.js"></script>
		<script src="localization/messages_id.js"></script>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
							  <div class="login-logo">
								 <img src="assets/dist/img/sdd1.png" class="logo">
							  </div>
                            <h1><strong>Selamat Datang</strong> di Sistem Data Diklat</h1>
                            <div class="description">
                            	<p>
	                            	Sistem Data Diklat membantu menemukan data diklat karyawan <strong><a href="http://www.bpjsketenagakerjaan.go.id/" target="_blank">BPJS Ketenagakerjaan</a></strong> dengan lebih cepat. Dipersembahkan oleh Deputi Direktur Bidang Learning.
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login ke sistem</h3>
                            		<p>Masukkan login ID dan password untuk masuk</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form action="Login/doLogin" method="post" id="formLogin">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Login ID</label>
			                        	<input type="text" name = "loginId" id="loginId" placeholder="Login ID..." class="form-username form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name = "password" id="password" placeholder="Password..." class="form-password form-control">
			                        </div>
									<div id="password_validate"></div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

		<script>		  
			$("#formLogin").validate({
				rules: {
					loginId: {
						required: true
					},
					password:{
						required: true,
						remote : { 
							url : "Login/cekMatch", type :"post",
							data: {
								loginId: function() {
									return $("#loginId").val();
								}
							}
						}
					}
				},
				messages:{
					password : { remote : "Username atau password salah." }
				},
				errorPlacement: function (error, element) {
					var name = $(element).attr("name");
					error.appendTo($("#" + name + "_validate"));
				}
			});
		</script>
	
        <!-- Javascript -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
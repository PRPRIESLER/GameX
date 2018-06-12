<?php
include 'server.php';
?>
<html>
    <head>
        <title>

        </title>

        <link rel="stylesheet" type="text/css" href="css/styleHome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/styleLogin.css">

        <style>
    body{
        background-image: url("images/Background.jpg");

	}
        @font-face{
            font-family: Heading;
            src: url("font/BlackOpsOne-Regular.ttf");
        } 
        h1{
            font-family: Heading;
            font-size: 60px;
        }
</style>
    
    </head>
<body>
    <section class="a">
    <div class=Header1>
        <h1> <a href="Home.html">GaMeX</a><small>heat zone</small></h1>
    </div>



	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="Register.php" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form style="display: block;" action="Login.php" method="POST">
										<?php
										foreach($errors as $value){
											echo "$value <br>";
										}
									?>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        



	<footer style="position: relative; width:1400px;top:500px; left: 0px; height: 180px; bottom: auto;" class="fc1_footer fc1"
	 data-state=" " id="SITE_FOOTER" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER">
		<div id="SITE_FOOTERscreenWidthBackground" class="fc1screenWidthBackground" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$screenWidthBackground"
		 style="width: 758px; left: 0px;">
			<div class="fc1_bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$screenWidthBackground.0"></div>
		</div>
		<div id="SITE_FOOTERcenteredContent" class="fc1centeredContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent">
			<div id="SITE_FOOTERbg" class="fc1bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$bg"></div>
			<div id="SITE_FOOTERinlineContent" class="fc1inlineContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent">
				<div style="left: 681px; width: 1050px; position: absolute; top: 61px;" class="s_SmHkWRichTextNewSkin" id="comp-j9tym3fb"
				 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb">
					<p class="font_9" style="text-align:center; line-height:1.55em;">
						<span class="color_11">Bengaluru, Karnataka, India</span>
					</p>
				</div>
				<div style="left: 400px; width: 500px; position: absolute; top: 49px;" class="s_SmHkWRichTextNewSkin" id="comp-j9tym3fb1"
				 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb1">
					<p class="font_9" style="text-align:center; line-height:1.55em;">
						<span class="color_11">mkumarpani@gmail.com</span>
					</p>
				</div>
				<div style="left: 386px; width: 500px; position: absolute; top: 73px;" class="s_SmHkWRichTextNewSkin" id="comp-j9tym3fb2"
				 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb2">
					<p class="font_9" style="text-align:center; line-height:1.55em;">
						<span class="color_11">9108906821</span>
					</p>
				</div>
				<div style="width: 80px; left: 20px; position: absolute; top: 63px; height: 20px;" class="lb1" id="comp-j9tym3fb3" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3">
					<ul aria-label="Social bar" id="comp-j9tym3fb3itemsContainer" class="lb1itemsContainer" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer">
						<li style="width:20px;height:20px;margin-bottom:0;margin-right:10px;display:inline-block;" class="lb1imageItem" id="comp-j9tym3fb30image"
						 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0">
							<a href="https://www.facebook.com/wix" target="_blank" data-content="https://www.facebook.com/wix" data-type="external"
							 id="comp-j9tym3fb30imagelink" class="lb1imageItemlink" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0.$link">
								<div id="comp-j9tym3fb30imageimage" style="position: absolute; width: 20px; height: 20px;" data-style="position:absolute"
								 class="lb1imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0.$link.0">
									<div class="lb1imageItemimagepreloader" id="comp-j9tym3fb30imageimagepreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0.$link.0.$preloader"></div>
									<img id="comp-j9tym3fb30imageimageimage" alt="" data-type="image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0.$link.0.$image"
									 src="https://static.wixstatic.com/media/23fd2a2be53141ed810f4d3dcdcd01fa.png/v1/fill/w_20,h_20,al_c,usm_0.66_1.00_0.01/23fd2a2be53141ed810f4d3dcdcd01fa.png"
									 style="width: 20px; height: 20px; object-fit: cover;">
								</div>
							</a>
						</li>
						<li style="width:20px;height:20px;margin-bottom:0;margin-right:10px;display:inline-block;" class="lb1imageItem" id="comp-j9tym3fb31image"
						 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1">
							<a href="https://twitter.com/Wix" target="_blank" data-content="https://twitter.com/Wix" data-type="external" id="comp-j9tym3fb31imagelink"
							 class="lb1imageItemlink" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1.$link">
								<div id="comp-j9tym3fb31imageimage" style="position: absolute; width: 20px; height: 20px;" data-style="position:absolute"
								 class="lb1imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1.$link.0">
									<div class="lb1imageItemimagepreloader" id="comp-j9tym3fb31imageimagepreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1.$link.0.$preloader"></div>
									<img id="comp-j9tym3fb31imageimageimage" alt="" data-type="image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1.$link.0.$image"
									 src="https://static.wixstatic.com/media/01ab6619093f45388d66736ec22e5885.png/v1/fill/w_20,h_20,al_c,usm_0.66_1.00_0.01/01ab6619093f45388d66736ec22e5885.png"
									 style="width: 20px; height: 20px; object-fit: cover;">
								</div>
							</a>
						</li>
						<li style="width:20px;height:20px;margin-bottom:0;margin-right:10px;display:inline-block;" class="lb1imageItem" id="comp-j9tym3fb32image"
						 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2">
							<a href="https://www.linkedin.com/company/wix-com" target="_blank" data-content="https://www.linkedin.com/company/wix-com"
							 data-type="external" id="comp-j9tym3fb32imagelink" class="lb1imageItemlink" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2.$link">
								<div id="comp-j9tym3fb32imageimage" style="position: absolute; width: 20px; height: 20px;" data-style="position:absolute"
								 class="lb1imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2.$link.0">
									<div class="lb1imageItemimagepreloader" id="comp-j9tym3fb32imageimagepreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2.$link.0.$preloader"></div>
									<img id="comp-j9tym3fb32imageimageimage" alt="" data-type="image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2.$link.0.$image"
									 src="https://static.wixstatic.com/media/7528824071724d12a3e6c31eee0b40d4.png/v1/fill/w_20,h_20,al_c,usm_0.66_1.00_0.01/7528824071724d12a3e6c31eee0b40d4.png"
									 style="width: 20px; height: 20px; object-fit: cover;">
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div style="left: 480px; width: 322px; position: absolute; top: 140px;" class="s_SmHkWRichTextNewSkin" id="comp-j9tym3fb4"
				 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb4">
					<p class="font_10" style="text-align:center; line-height:1.43em;">
						<span class="color_11">©2017 by GameX. Created by Pinaki Pani</span>
					</p>
				</div>
			</div>
		</div>
	</footer>
	

    </body>
</html>
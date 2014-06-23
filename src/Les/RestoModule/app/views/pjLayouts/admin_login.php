<!doctype html>
<html>
	<head>
		<title>Restaurant Booking Script | Login</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<?php
		foreach ($controller->css as $css)
		{
			echo '<link type="text/css" rel="stylesheet" href="'.(isset($css['remote']) && $css['remote'] ? NULL : INSTALL_URL).$css['path'].$css['file'].'" />';
		}
		
		foreach ($controller->js as $js)
		{
			echo '<script type="text/javascript" src="'.(isset($js['remote']) && $js['remote'] ? NULL : INSTALL_URL).$js['path'].$js['file'].'"></script>';
		}
		?>
	</head>
	<body>
		<div id="container">
			<div id="header">
		        	<div id="lescouverts-img-container">
						<a href="#" id="img-lescouverts"><img src="<?php echo INSTALL_URL . IMG_PATH; ?>logo_lescouverts.png" alt="Restaurant Booking Script" /></a>
					</div>
			</div>
			<div id="middle">
				<div id="login-content">
				<?php require $content_tpl; ?>
				</div>
			</div> <!-- middle -->
		</div> <!-- container -->
		<div id="footer-wrap">

			<div id="footer-container">
                <a href="">
                  <div class="footer-button"> <span class="footer-text" > Home      </span>     </div>
                </a>
                <div class="footer-button"> <span class="footer-text" > Terms of Service </span>      </div>
                <div class="footer-button"> <span class="footer-text" > Privacy Guideline </span>   </div>
                <div class="footer-button" style="border-right-style: none;"> <span class="footer-text" > contact us     </span>    </div>
            </div>

<!-- 			<div id="footer">
			   	<p><a href="http://www.phpjabbers.com/" target="_blank">PHP Scripts</a> Copyright &copy; <?php echo date("Y"); ?> <a href="http://www.stivasoft.com" target="_blank">StivaSoft Ltd</a></p>
	        </div> -->
        </div>
	<style type="text/css">

		#lescouverts-img-container{
		width: 141%;
		display: inline-block;
		border-bottom-style: groove;
		border-width: 2px;
		border-color: #D8D8D8;
		position: relative;
		right: 200px;
		text-align: center;
	}

			#img-lescouverts{
				width: 300px;
				height: 62px;
				display: inline-block;
				position: relative;
				right: 60px;
			}

#footer-container{
	height:60px;
	background-color: rgb(90,105,222);
	width: 100%;
	float: left;
}

			.footer-button{
				float: left;
				text-align: center;
				height: 100%;
				border-right-style: ridge;
				border-right-color: white;
				border-right-width: 1px;
				width: 24.7%;
				cursor: pointer;
			}

							.footer-button:hover > .footer-text{
								color: #848484;
							}



					.footer-button span{
						color: white;
						font-size: 16px;
						font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
						position: relative;
						top:25%;
					}
	</style>   
	</body>
</html>
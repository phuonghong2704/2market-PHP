<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Thông tin</title>    
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
<!-- Required-js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>

</head>
<body>


<!-- //breadcrumbs -->

		<!-- //btm-wthree-left -->
			<div class="btm-wthree-left tincon">
				<div class="single-left">
				<div class="single-left1">
                    
                    <?php
                    $db = new PDO("mysql:host=localhost;dbname=duan1","root","");
                    $sql = "Select * from loaitin where idLT <2";
                    $result = $db->query($sql);
                    $so = 0;
                
                    foreach ($result as $loaitin) {
                        echo'                                       
                        <div class="col-md-6  w3-agile fea-right">
                            <h3><a href="tintuc.php?idLT='.$loaitin['idLT'].'">'.$loaitin["TenLoaiTin"].'</a></h3>
                            <ul>
                                <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#">MIDORI, THEO TRÍ THỨC TRẺ 23:55 11/06/2019</a></li>
                                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">5 Comments</a></li>
                            </ul>
                             <p href="tintuc.php?idLT='.$loaitin['idLT'].'">'.$loaitin["noiDung"].'</p>
                        </div>                    
                        ';
                    }
                ?>				
				
                   <?php
                   $db = new PDO("mysql:host=localhost;dbname=duan1","root","");
                   $sql = "Select * from tin where idTin <6";
                   $result = $db->query($sql);
                   $so = 0;
               
                   foreach ($result as $tin) {
                       echo'  
                       <div class="admin" style="float:left;">
                       <img src="../images/'.$tin["urlHinh"].'" class="img-responsive" alt="" />
                       <p href="tintuc.php?idTin='.$tin['idTin'].'">'.$tin["NoiDung"].'</p>
                       </div>
                       ';     
                   }
                   ?>
                
                   </div>
		</div>
	</div>
	<!-- footer -->

<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/bootstrap.js"></script>
</body>
</html>
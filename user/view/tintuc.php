<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tin tức thời trang</title>    
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--//fonts-->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
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
<!-- //script for smooth drop down-nav -->
</head>
<body>
     <div class="tincenter">
         		<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
                <div class="agileits_heading_section">
                    <div class="wthree_head">
                    <a href="../../index.php"><img src="../images/lOGO 2m.png"></img></a>
                    </div>
                    <p class="agileinfo_para">Tin tức thời trang gần đây</p>
                </div>
                    <div class="events w3">
                        <div class="events-main">
                            <div class="events-top">

                                <?php
                                    $db = new PDO("mysql:host=localhost;dbname=duan1","root","");
                                    $sql = "Select * from loaitin where idLT";
                                    $result = $db->query($sql);
                                    $so = 0;
                                
                                    foreach ($result as $loaitin) {
                                        $so++;
                                        if($so%2==0){
                                        echo'                                       
                                        <div class="col-md-6  w3ls fea-left">
                                        <div class="w3agile_special_deals_grid_left_grid">
                                            <a href="singlepage.html"><img src="../images/'.$loaitin["urlHinh"].'" class="img-responsive" alt="" /></a>
                                        </div>
                                        </div>
                                    <div class="col-md-6 wthree fea-right">
                                        <h3><a href="tintuc.php?idLT='.$loaitin['idLT'].'">'.$loaitin["TenLoaiTin"].'</a></h3>
                                        <p href="tintuc.php?idLT='.$loaitin['idLT'].'">'.$loaitin["noiDung"].'</p>
                                        <a class="agileits w3layouts" href="singlepage.php">Đọc thêm <span><i class="fas fa-angle-right" style="font-size:24px"></i></span></a>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <br>    <br>
                                        ';
                                    }
                             
                                else{
                                    echo'
                                    <div class="col-md-6  w3-agile fea-right">
                                        <h3><a href="tintuc.php?idLT='.$loaitin['idLT'].'">'.$loaitin["TenLoaiTin"].'</a></h3>
                                        <p href="tintuc.php?idLT='.$loaitin['idLT'].'">'.$loaitin["noiDung"].'</p>
                                        <a class="agileits w3layouts" href="singlepage.php">Đọc thêm <span><i class="fas fa-angle-right" style="font-size:24px"></i></span></a>
                                    </div>
                                <div class="col-md-6  fea-left">
                                    <div class="w3agile_special_deals_grid_left_grid">
                                    <a href="singlepage.html"><img src="../images/'.$loaitin["urlHinh"].'" class="img-responsive" alt="" /></a>
                                    </div>
                                </div>   
                                <div class="clearfix"> </div> 
                                <br>       <br>
                                    ';
                                }
                            }
                                ?>
                                
                            </div>    
                
                            <!-- <div class="events-top">
                                <?php
                                    // $db = new PDO("mysql:host=localhost;dbname=duan1","root","");
                                    // $sql = "Select * from loaitin where idLT < 3";
                                    // $result = $db->query($sql);
                                    // foreach ($result as $loaitin) {
                                    //     echo'
                                    //     <div class="col-md-6  w3-agile fea-right">
                                    //         <h3><a href="tintuc.php?idLT='.$loaitin['idLT'].'">'.$loaitin["TenLoaiTin"].'</a></h3>
                                    //         <p href="tintuc.php?idLT='.$loaitin['idLT'].'">'.$loaitin["noiDung"].'</p>
                                    //         <a class="agileits w3layouts" href="singlepage.html">Đọc thêm <span><i class="fas fa-angle-right" style="font-size:24px"></i></span></a>
                                    //     </div>
                                    // <div class="col-md-6  fea-left">
                                    //     <div class="w3agile_special_deals_grid_left_grid">
                                    //     <a href="singlepage.html"><img src="../images/'.$loaitin["urlHinh"].'" class="img-responsive" alt="" /></a>
                                    //     </div>
                                    // </div>   
                                    // <div class="clearfix"> </div> 
                                    // <br>       <br>
                                    //     ';
                                    // }
                                    ?> 
                            </div> -->
                      
                        </div>
                    </div>	
    
                <!-- //btm-wthree-left -->
                    <!-- btm-wthree-right -->
       
<!-- //copyright -->
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
<script src="js/bootstrap.js"></script>
</body>
</html>
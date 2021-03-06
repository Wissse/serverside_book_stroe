
<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <!--  add this  -->
    
    <link href="<?php echo base_url();?>assets/css/myStyle.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="home"><img src="<?php echo base_url();?>assets/images/home/logo.png" alt="" height="50" width="100"></a>
                        </div>
                        
                    </div>
                   <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="login"><i class="fa fa-lock"></i>ورود</a></li>
                                <li><a href="profile"><i class="fa fa-user"></i> حساب کاربری</a></li>
                                <li><a href="checkout"><i class="fa fa-crosshairs"></i> صورت حساب</a></li>
                                <li><a href="cart"><i class="fa fa-shopping-cart"></i> سبد خرید</a></li>
				<li><a href="statusadmin"><i class="fa fa-map-marker"></i> رهگیری</a></li>
				    
                                <?php 

                                sec_session_start();
                                if (login_check($mysqli) == true) {?>
                                <li><a href="login/logout"><i class="fa fa-shopping-cart"></i>خروج</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
        
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-14">
                        <div class="mainmenu pull-right">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="home">خانه</a></li>
                                <li><a href="shop">محصولات</a></li>
                                <li><a href="search">جستجو</a></li>
                                <li><a href="contact_us">تماس با ما</a></li>
                                <li><a href="about">درباره ما</a></li>
                        
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-9 padding-right" >
                        <div class="features_items"  style="direction:rtl;"> <!--features_items-->
                            <h2 class="title text-center">سبد خرید</h2>
                            
                            <div id="tableCartDetail" class="table-responsive cart_info" style="direction: rtl;">
                                <table class="table table-condensed"}>
                                    <thead>
                                        <tr class="cart_menu" align="center">
                                            <td class="image">کتاب</td>
                                            <td class="description">توضیحات</td>
                                            <td class="price">قیمت</td>
                                            <td class="quantity">تعداد</td>
                                            <td class="total">مجموع</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div><!--features_items-->
                    
                        <div class="recommended_items"><!--recommended_items-->
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>
                        </div><!--/recommended_items-->
                        
                    </div>
                </div>
            </div>
        </div>
    </section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
                <div class="col-sm-8">
                    <div class="total_area" id="totalTable" style="margin-left: 130px;">
						<ul>
							<li style="direction: rtl;">۵۹۰۰۰ تومان<span>جمع سبد خرید</span></li>
							<li style="direction: rtl;">۱۰۰۰ تومان<span>مالیات</span></li>
							<li style="direction: rtl;">رایگان<span>هزینه حمل و نقل</span></li>
							<li style="direction: rtl;">۶۰۰۰۰ تومان<span>مجموع</span></li>
						</ul>
							<a class="btn btn-default check_out" href="checkout" style="width: 100px;margin-left:190px;" >تایید</a>
                       
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<footer id="footer"><!--Footer-->
    <div class="footer-top" >
        <div class="container" style=direction:rtl;>
            <div class="row" >
                <div class="col-sm-3">
                    <div class="address">
                        <img src="<?php echo base_url();?>assets/images/home/map.png" alt="" />
                        <p> آدرس شرکت</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="companyinfo" >
                        <h2><span>کتاب-</span>آنلاین</h2>
                        <p>توضیحات درباره کتاب-آنلاین</p>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>
    
    
</footer><!--/Footer-->
<script type="text/javascript">
    
         var username=<?php echo json_encode(get_username()); ?> 

window.onload=function()
{
    //document.getElementById("totalTable").style.display="none";
    loadData();


}
function loadData()
{
    $.post('cart/select', {
      'username' : username },
      function(data) {
     /* document.getElementById("changed_name").value=data[0].name;
      document.getElementById("changed_last_name").value=data[0].fname;
      document.getElementById("changed_address").value=data[0].address;
      document.getElementById("changed_email").value=data[0].email;
      document.getElementById("changed_tel").value=data[0].phoneNumber;*/

        for(var i=0; i<data.length; i++)
        {
            //var row = document.createElement('tr');
            var name = data[i].name;
            var writer = data[i].writer;
            var category = data[i].category;
            var publishedDate = data[i].publishedDate;
            var publisher = data[i].publisher;
            var price = data[i].price;
            var counter = data[i].counter;
            var total = price*counter;
            var newRow = "<tr align=\"center\"><td style=\" padding-right:190px; margin-left: 200px;\"  class=\"cart_product\"><a>" + name + "</a></td> <td c style=\"padding-right: 30px;\" class=\"cart_description\"><p>نام نویسنده: " + writer+ "</p><p>دسته بندی: " + writer + "</p><p>سال انتشار: " + publishedDate + "</p><p>ناشر: " + publisher + "</p></td><td style=\"padding-right: 180px;\" class=\"cart_price\"><p>" + price + " تومان" + "</p></td><td style=\"padding-right:140px;\" class=\"cart_quantity\"><div class=\"cart_quantity_button\"><input class=\"cart_quantity_input\" type=\"text\" name=\"quantity\" value= " + counter + " size=\"2\"></div></td><td style=\"padding-right:115px;\" class=\"cart_total\"><p class=\"cart_total_price\">" + total + " تومان"+ "</p></td></tr>";

            $(newRow).appendTo($("#tableCartDetail"));  
        }
     }, "json");
   
}
</script>

    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>


<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

?>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
<style id="__web-inspector-hide-shortcut-style__" type="text/css">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
<style type="text/css">
	
	input{
		direction:rtl;
	}
</style>
</style></head><!--/head-->

<body>
			<header id="header"><!--header-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="home"><img src="<?php echo base_url();?>/assets/images/home/logo.png" alt="" height="50" width="100"></a>
                        </div>
                        
                    </div>
                   <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                             <?php 

								sec_session_start();
                                if (login_check($mysqli) == true) {?>
                                <li><a href="login/logout"><i class="fa fa-shopping-cart"></i>خروج</a></li>
                                <?php } ?>
								<li><a href="statusadmin"><i class="fa fa-map-marker"></i> رهگیری</a></li>
                                <li><a href="cart"><i class="fa fa-shopping-cart"></i> سبد خرید</a></li>
								<li><a href="checkout"><i class="fa fa-crosshairs"></i> صورت حساب</a></li>
								<li><a href="profile"><i class="fa fa-user"></i> حساب کاربری</a></li>
								<li><a href="login"><i class="fa fa-lock"></i>ورود</a></li>
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
                                <li><a href="about">درباره ما</a></li>
								<li><a href="contact_us">تماس با ما</a></li>
								<li><a href="search">جستجو</a></li>
								<li><a href="shop">محصولات</a></li>
								<li><a href="home">خانه</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner" >
							<div class="item active" style=direction:rtl;>
								<div class="col-sm-6">
									<img src="<?php echo base_url();?>assets/images/home/book1.jpg" class="girl img-responsive" alt="" height="2000" width="2000">
								</div>
								<div class="col-sm-6" style=right:100px;>
									<h1><span>کتاب</span>-آنلاین</h1>
									<h2>نایاب ترین کتاب ها</h2>
									<p>..توضیحات..</p>
								</div>
							</div>
							<div class="item" style=direction:rtl;>
								<div class="col-sm-6">
									<img src="<?php echo base_url();?>assets/images/home/book2.jpg" class="girl img-responsive" alt="" height="2000" width="2000">
								</div>
								<div class="col-sm-6" style=right:100px; >
									<h1><span>کتاب</span>-آنلاین</h1>
									<h2>کتاب هایی که دنبالشان هستید </h2>
									<p>..توضیحات..</p>
								</div>
							</div>
							
							<div class="item" style=direction:rtl;>
								<div class="col-sm-6" >
									<img src="<?php echo base_url();?>assets/images/home/book3.jpg" class="girl img-responsive" alt="" height="2000" width="2000">
								</div>
								<div class="col-sm-6" style=right:100px; >
									<h1><span>کتاب</span>-آنلاین</h1>
									<h2>با نازلترین قیمت ها</h2>
									<p>..توضیحات..</p>
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3" style="float:right" >
					<div class="left-sidebar">
						<h2>دسته بندی</h2>
						<div class="panel-group category-products" id="accordian" style="direction:rtl;"><!--category-productsr-->
						
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop">آموزشی</a></h4>
								</div>
							</div>
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop" id="research" onclick=showCategory("research");>پژوهشی</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop" id="litrature" onclick=showCategory("litrature")>ادبیات</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop" id="kids" onclick=showCategory("kids")>کودک و نوجوان</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop" id="history" onclick=showCategory("history")>تاریخی</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop" id="health" onclick=showCategory("health")>سلامت</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop" id="story" onclick=showCategory("story")>رمان</a></h4>
								</div>
							</div>
						
							
						</div><!--/category-products-->
					<h2>رهگیری خرید</h2>
						<div class="panel-group category-products" style="direction:rtl;"><!--category-productsr-->
						  <input id="invoiceID" type="text" style="margin-right: 45px; margin-bottom: 10px;" placeholder="کد رهگیری" background="#f0f0e9">

						 <a class="btn btn-default update" style="margin-right: 45px;margin-bottom: 10px; margin-top: 0px;" onclick="track()">جستجو</a>
                          <input  id="place" type="text" style="margin-right: 45px;margin-bottom: 10px;">

						  <input id="status" type="text" style="margin-right: 45px;margin-bottom: 10px;">
						</div>
					</div>
				</div>
	

				
				<div class="col-sm-9 padding-right" >
					<div class="features_items" style=direction:rtl; ><!--features_items-->
						<h2 class="title text-center">کتب</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img id="photo0" >
											<h2><label id="price0"></label></h2>
											<p><label id="name0"></label></p>
											<a class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a onclick=showDetails("id0") href="product_details"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده : <label id="writer0"></label></p>
												<p>ناشر : <label id="publisher0"></label></p>
												<p>سال چاپ : <label id="publishedDate0"></label></p>
												<p>خلاصه : <label id="description0"></label></p>
												<label style="display: none" id="id0"></label> 
												</div>
												<h2><label id="price0"></label></h2>
												<p><label id="name0"></label></p>
												<a class="btn btn-default add-to-cart" onclick=addToCart("id0");><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products" >
									<div class="productinfo text-center">
											<img id="photo1">
											<h2><label id="price1"></label></h2>
											<p><label id="name1"></label></p>
											<a class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a onclick=showDetails("id1") href="product_details"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده : <label id="writer1"></label></p>
												<p>ناشر : <label id="publisher1"></label></p>
												<p>سال چاپ : <label id="publishedDate1"></label></p>
												<p>خلاصه : <label id="description1"></label></p>
												<label style="display: none" id="id1"></label>
												</div>
												<h2><label id="price1"></label></h2>
												<p><label id="name1"></label></p>
												<a class="btn btn-default add-to-cart" onclick=addToCart("id1");><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<img id="photo2">
											<h2><label id="price2"></label></h2>
											<p><label id="name2"></label></p>
											<a class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a onclick=showDetails("id2") href="product_details"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده : <label id="writer2"></label></p>
												<p>ناشر : <label id="publisher2"></label></p>
												<p>سال چاپ : <label id="publishedDate2"></label></p>
												<p>خلاصه : <label id="description2"></label></p>
												<label style="display: none"; id="id2"></label>
												</div>
												<h2><label id="price2"></label></h2>
												<p><label id="name2"></label></p>
												<label style="display: none" id="id2"></label>
												<a class="btn btn-default add-to-cart" onclick=addToCart("id2");><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<img id="photo3">
											<h2><label id="price3"></label></h2>
											<p><label id="name3"></label></p>
											<a class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a onclick=showDetails("id3") href="product_details"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده : <label id="writer3"></label></p>
												<p>ناشر : <label id="publisher3"></label></p>
												<p>سال چاپ : <label id="publishedDate3"></label></p>
												<p>خلاصه : <label id="description3"></label></p>
												<label style="display: none"; id="id3"></label>
												</div>
												<h2><label id="price3"></label></h2>
												<p><label id="name3"></label></p>
												<label style="display: none" id="id3"></label>
												<a class="btn btn-default add-to-cart" onclick=addToCart("id3");><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<img id="photo4">
											<h2><label id="price4"></label></h2>
											<p><label id="name4"></label></p>
											<a class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a onclick=showDetails("id4") href="product_details"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده : <label id="writer4"></label></p>
												<p>ناشر : <label id="publisher4"></label></p>
												<p>سال چاپ : <label id="publishedDate4"></label></p>
												<p>خلاصه : <label id="description4"></label></p>
												<label style="display: none"; id="id4"></label>
												</div>
												<h2><label id="price4"></label></h2>
												<p><label id="name4"></label></p>
												<label style="display: none" id="id4"></label>
												<a class="btn btn-default add-to-cart" onclick=addToCart("id4");><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<img id="photo5">
											<h2><label id="price5"></label></h2>
											<p><label id="name5"></label></p>
											<a class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a onclick=showDetails("id5") href="product_details"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده : <label id="writer5"></label></p>
												<p>ناشر : <label id="publisher5"></label></p>
												<p>سال چاپ : <label id="publishedDate5"></label></p>
												<p>خلاصه : <label id="description5"></label></p>
												<label style="display: none"; id="id5"></label>
												</div>
												<h2><label id="price5"></label></h2>
												<p><label id="name5"></label></p>
												<label style="display: none" id="id5"></label>
												<a class="btn btn-default add-to-cart" onclick=addToCart("id5");><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
											</div>
										</div>
								</div>
							</div>
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
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top" >
			<div class="container" style=direction:rtl;>
				<div class="row" >		
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo base_url();?>/assets/images/home/map.png" alt="" />
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

    
		window.onload = function (){
		loadInfo();
		}

 function showDetails(inputId)
	{
		var id = document.getElementById(inputId).innerHTML;
			
		$.post('book/saveid',{
		'id' : id},
      function(data) {
		
		}, "json");
		
	}
	function showCategory(inputCategory)
	{
		var category = document.getElementById(inputCategory).innerHTML;
			
		$.post('book/saveCategory',{
		'category' : category},
      function(data) {
		
		}, "json");
		
	}
  function loadInfo()
  {
     $.post('book/loadBookCategory',{
		'offset' : 0},
      function(data) {
		{
			if(data[0]===null)
			{
				document.getElementById("name0").innerHTML="";
				document.getElementById("price0").innerHTML="";
				document.getElementById("writer0").innerHTML="";
				document.getElementById("publisher0").innerHTML="";
				document.getElementById("publishedDate0").innerHTML="";
				document.getElementById("description0").innerHTML="";
				document.getElementById("photo0").src = "";
				document.getElementById("id0").innerHTML="";
				
			}
			if(data[1]===null)
			{
				document.getElementById("name1").innerHTML="";
				document.getElementById("price1").innerHTML="";
				document.getElementById("writer1").innerHTML="";
				document.getElementById("publisher1").innerHTML="";
				document.getElementById("publishedDate1").innerHTML="";
				document.getElementById("description1").innerHTML="";
				document.getElementById("photo1").src = "";
				document.getElementById("id1").innerHTML="";
				
			}
			if(data[2]===null)
			{
				document.getElementById("name2").innerHTML="";
				document.getElementById("price2").innerHTML="";
				document.getElementById("writer2").innerHTML="";
				document.getElementById("publisher2").innerHTML="";
				document.getElementById("publishedDate2").innerHTML="";
				document.getElementById("description2").innerHTML="";
				document.getElementById("photo2").src = "";
				document.getElementById("id2").innerHTML="";
				
			}
			if(data[3]===null)
			{
				document.getElementById("name3").innerHTML="";
				document.getElementById("price3").innerHTML="";
				document.getElementById("writer3").innerHTML="";
				document.getElementById("publisher3").innerHTML="";
				document.getElementById("publishedDate3").innerHTML="";
				document.getElementById("description3").innerHTML="";
				document.getElementById("photo3").src = "";
				document.getElementById("id3").innerHTML="";
				
			}
			if(data[4]===null)
			{
				document.getElementById("name4").innerHTML="";
				document.getElementById("price4").innerHTML="";
				document.getElementById("writer4").innerHTML="";
				document.getElementById("publisher4").innerHTML="";
				document.getElementById("publishedDate4").innerHTML="";
				document.getElementById("description4").innerHTML="";
				document.getElementById("photo4").src = "";
				document.getElementById("id4").innerHTML="";
				
			}
			if(data[5]===null)
			{
				document.getElementById("name5").innerHTML="";
				document.getElementById("price5").innerHTML="";
				document.getElementById("writer5").innerHTML="";
				document.getElementById("publisher5").innerHTML="";
				document.getElementById("publishedDate5").innerHTML="";
				document.getElementById("description5").innerHTML="";
				document.getElementById("photo5").src = "";
				document.getElementById("id5").innerHTML="";
				
			}
			
			document.getElementById("name0").innerHTML=data[0].name;
			document.getElementById("price0").innerHTML=data[0].price;
			document.getElementById("writer0").innerHTML=data[0].writer;
			document.getElementById("publisher0").innerHTML=data[0].publisher;
			document.getElementById("publishedDate0").innerHTML=data[0].publishedDate;
			document.getElementById("description0").innerHTML=data[0].description;
			document.getElementById("photo0").src = data[0].photo;
			document.getElementById("id0").innerHTML=data[0].id;
			
			document.getElementById("name1").innerHTML=data[1].name;
			document.getElementById("price1").innerHTML=data[1].price;
			document.getElementById("writer1").innerHTML=data[1].writer;
			document.getElementById("publisher1").innerHTML=data[1].publisher;
			document.getElementById("publishedDate1").innerHTML=data[1].publishedDate;
			document.getElementById("description1").innerHTML=data[1].description;
			document.getElementById("photo1").src = data[1].photo;
			document.getElementById("id1").innerHTML=data[1].id;
			
			document.getElementById("name2").innerHTML=data[2].name;
			document.getElementById("price2").innerHTML=data[2].price;
			document.getElementById("writer2").innerHTML=data[2].writer;
			document.getElementById("publisher2").innerHTML=data[2].publisher;
			document.getElementById("publishedDate2").innerHTML=data[2].publishedDate;
			document.getElementById("description2").innerHTML=data[2].description;
			document.getElementById("photo2").src = data[2].photo;
			document.getElementById("id2").innerHTML=data[2].id;
			
			document.getElementById("name3").innerHTML=data[3].name;
			document.getElementById("price3").innerHTML=data[3].price;
			document.getElementById("writer3").innerHTML=data[3].writer;
			document.getElementById("publisher3").innerHTML=data[3].publisher;
			document.getElementById("publishedDate3").innerHTML=data[3].publishedDate;
			document.getElementById("description3").innerHTML=data[3].description;
			document.getElementById("photo3").src = data[3].photo;
			document.getElementById("id3").innerHTML=data[3].id;
			
			document.getElementById("name4").innerHTML=data[4].name;
			document.getElementById("price4").innerHTML=data[4].price;
			document.getElementById("writer4").innerHTML=data[4].writer;
			document.getElementById("publisher4").innerHTML=data[4].publisher;
			document.getElementById("publishedDate4").innerHTML=data[4].publishedDate;
			document.getElementById("description4").innerHTML=data[4].description;
			document.getElementById("photo4").src = data[4].photo;
			document.getElementById("id4").innerHTML=data[4].id;
			
			document.getElementById("name5").innerHTML=data[5].name;
			document.getElementById("price5").innerHTML=data[5].price;
			document.getElementById("writer5").innerHTML=data[5].writer;
			document.getElementById("publisher5").innerHTML=data[5].publisher;
			document.getElementById("publishedDate5").innerHTML=data[5].publishedDate;
			document.getElementById("description5").innerHTML=data[5].description;
			document.getElementById("photo5").src = data[5].photo;
			document.getElementById("id5").innerHTML=data[5].id;
			
		}
		
     }, "json");

  }
  function track()
    {
    	var invoiceID = document.getElementById("invoiceID").value;
      
    	if((invoiceID!=""))
    	{
        
        	$.post('home/track', {
        	'invoiceID' : invoiceID},
         	function(data) {  
         		if(data != null)
         		{ 
         			var place = document.getElementById("place");
         			var status = document.getElementById("status");

         			place.value=data[0].place;
         			status.value=data[0].sts;

         			place.style.display="block";
         			status.style.display="block";
         		}

        	}, "json");
        
    	
    	}
    }
function addToCart(input){
  		
		 var username=<?php echo json_encode(get_username()); ?> ;
        
       var userid=<?php echo json_encode(get_userId()); ?> ;

  		var inputId = document.getElementById(input).innerHTML;
		
		 $.post('cart/insert', {
      'userid' : userid ,'bookId':inputId},
      function(data) {
 
     }, "json");
	 }
  </script>



  
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a>

</body>
</html>

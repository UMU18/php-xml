<?php
$xml = simplexml_load_file("product.xml");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Poetry Home & Decor Studio</title>
	
	<link rel="shortcut icon" href="img/icon.png"  type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
			    <div class="intro-heading">Poetry Home & Decor Studio</div>
				<a href="catalog.php" class="page-scroll btn btn-xl">View Catalog</a>
            </div>
        </div>
    </header>


    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Product</h2>
                    <h3 class="section-subheading text-muted">high quality furniture dan accecoris for your home</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes = $xml->xpath('//Catalog/product/id[.="1"]/parent::*');
                        $result = $nodes[0];
						/*if($result->status == '2'){$status='On Sale';}
						else if ($result->status == '1'){$status='Dijual';}
						else $status='Tidak Dijual';*/
				?>
				    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                       <h4><?php echo $result->name;?></h4>
					   <p class="text-muted"><?php echo $result->short_desc;?></p>
                    </div>      
			   
                </div>
                <div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes2 = $xml->xpath('//Catalog/product/id[.="2"]/parent::*');
                        $result2 = $nodes2[0];
				?>
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result2->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result2->name;?></h4>
                        <p class="text-muted"><?php echo $result2->short_desc;?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes3 = $xml->xpath('//Catalog/product/id[.="3"]/parent::*');
                        $result3 = $nodes3[0];
				?>
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result3->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result3->name;?></h4>
                        <p class="text-muted"><?php echo $result3->short_desc;?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes4 = $xml->xpath('//Catalog/product/id[.="4"]/parent::*');
                        $result4 = $nodes4[0];
				?>
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result4->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result4->name;?></h4>
                        <p class="text-muted"><?php echo $result4->short_desc;?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes5 = $xml->xpath('//Catalog/product/id[.="5"]/parent::*');
                        $result5 = $nodes5[0];
				?>
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result5->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result5->name;?></h4>
                        <p class="text-muted"><?php echo $result5->short_desc;?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes6 = $xml->xpath('//Catalog/product/id[.="6"]/parent::*');
                        $result6 = $nodes6[0];
				?>
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result6->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result6->name;?></h4>
                        <p class="text-muted"><?php echo $result6->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes7 = $xml->xpath('//Catalog/product/id[.="7"]/parent::*');
                        $result7 = $nodes7[0];
				?>
                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result7->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result7->name;?></h4>
                        <p class="text-muted"><?php echo $result7->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes8 = $xml->xpath('//Catalog/product/id[.="8"]/parent::*');
                        $result8 = $nodes8[0];
				?>
                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result8->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result8->name;?></h4>
                        <p class="text-muted"><?php echo $result8->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-12 col-sm-6 portfolio-item">
				<p onclick="toogle()" value="View More" id="change" style="text-align:center;font-style:italic;font-size:22px;">View More</p>
				<!--input onclick="toogle()" type="button" value="View More" id="change"></input-->
				</div>
				
				<div id="toogle">
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes9 = $xml->xpath('//Catalog/product/id[.="9"]/parent::*');
                        $result9 = $nodes9[0];
				?>
                    <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result9->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result9->name;?></h4>
                        <p class="text-muted"><?php echo $result9->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes10 = $xml->xpath('//Catalog/product/id[.="10"]/parent::*');
                        $result10 = $nodes10[0];
				?>
                    <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result10->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result10->name;?></h4>
                        <p class="text-muted"><?php echo $result10->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes11 = $xml->xpath('//Catalog/product/id[.="11"]/parent::*');
                        $result11 = $nodes11[0];
				?>
                    <a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result11->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result11->name;?></h4>
                        <p class="text-muted"><?php echo $result11->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes12 = $xml->xpath('//Catalog/product/id[.="12"]/parent::*');
                        $result12 = $nodes12[0];
				?>
                    <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result12->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result12->name;?></h4>
                        <p class="text-muted"><?php echo $result12->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes13 = $xml->xpath('//Catalog/product/id[.="13"]/parent::*');
                        $result13 = $nodes13[0];
				?>
                    <a href="#portfolioModal13" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result13->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result13->name;?></h4>
                        <p class="text-muted"><?php echo $result13->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes14 = $xml->xpath('//Catalog/product/id[.="14"]/parent::*');
                        $result14 = $nodes14[0];
				?>
                    <a href="#portfolioModal14" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result14->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result14->name;?></h4>
                        <p class="text-muted"><?php echo $result14->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes15 = $xml->xpath('//Catalog/product/id[.="15"]/parent::*');
                        $result15 = $nodes15[0];
				?>
                    <a href="#portfolioModal15" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result15->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result15->name;?></h4>
                        <p class="text-muted"><?php echo $result15->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes16 = $xml->xpath('//Catalog/product/id[.="16"]/parent::*');
                        $result16 = $nodes16[0];
				?>
                    <a href="#portfolioModal16" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result16->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result16->name;?></h4>
                        <p class="text-muted"><?php echo $result16->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes17 = $xml->xpath('//Catalog/product/id[.="17"]/parent::*');
                        $result17 = $nodes17[0];
				?>
                    <a href="#portfolioModal17" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result17->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result17->name;?></h4>
                        <p class="text-muted"><?php echo $result17->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes18 = $xml->xpath('//Catalog/product/id[.="18"]/parent::*');
                        $result18 = $nodes18[0];
				?>
                    <a href="#portfolioModal18" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result18->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result18->name;?></h4>
                        <p class="text-muted"><?php echo $result18->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes19 = $xml->xpath('//Catalog/product/id[.="19"]/parent::*');
                        $result19 = $nodes19[0];
				?>
                    <a href="#portfolioModal19" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result19->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result19->name;?></h4>
                        <p class="text-muted"><?php echo $result19->short_desc;?></p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 portfolio-item">
				<?php
						$nodes20 = $xml->xpath('//Catalog/product/id[.="20"]/parent::*');
                        $result20 = $nodes20[0];
				?>
                    <a href="#portfolioModal20" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $result20->tn_img_url;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $result20->name;?></h4>
                        <p class="text-muted"><?php echo $result20->short_desc;?></p>
                    </div>
                </div>
				
				</div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; poetry home and decor studio 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result->img_url;?>" alt="">
                            <p><?php echo $result->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result->discount;?></li>
                                <li>Stock: <?php echo $result->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result2->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result2->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result2->img_url;?>" alt="">
                            <p><?php echo $result2->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result2->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result2->discount;?></li>
                                <li>Stock: <?php echo $result2->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result3->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result3->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result3->img_url;?>" alt="">
                            <p><?php echo $result3->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result3->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result3->discount;?></li>
                                <li>Stock: <?php echo $result3->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result4->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result4->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result4->img_url;?>" alt="">
                            <p><?php echo $result4->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result4->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result4->discount;?></li>
                                <li>Stock: <?php echo $result4->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result5->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result5->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result5->img_url;?>" alt="">
                            <p><?php echo $result5->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result5->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result5->discount;?></li>
                                <li>Stock: <?php echo $result5->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result6->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result6->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result6->img_url;?>" alt="">
                            <p><?php echo $result6->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result6->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result6->discount;?></li>
                                <li>Stock: <?php echo $result6->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result7->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result7->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result7->img_url;?>" alt="">
                            <p><?php echo $result7->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result7->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result7->discount;?></li>
                                <li>Stock: <?php echo $result7->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 <!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result8->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result8->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result8->img_url;?>" alt="">
                            <p><?php echo $result8->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result8->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result8->discount;?></li>
                                <li>Stock: <?php echo $result8->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 9 -->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result9->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result9->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result9->img_url;?>" alt="">
                            <p><?php echo $result9->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result9->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result9->discount;?></li>
                                <li>Stock: <?php echo $result9->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 10 -->
    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result10->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result10->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result10->img_url;?>" alt="">
                            <p><?php echo $result10->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result10->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result10->discount;?></li>
                                <li>Stock: <?php echo $result10->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 11 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result11->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result11->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result11->img_url;?>" alt="">
                            <p><?php echo $result11->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result11->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result11->discount;?></li>
                                <li>Stock: <?php echo $result11->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 12 -->
    <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result12->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result12->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result12->img_url;?>" alt="">
                            <p><?php echo $result12->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result12->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result12->discount;?></li>
                                <li>Stock: <?php echo $result12->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 13 -->
    <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result13->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result13->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result13->img_url;?>" alt="">
                            <p><?php echo $result13->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result13->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result13->discount;?></li>
                                <li>Stock: <?php echo $result13->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 14 -->
    <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result14->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result14->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result14->img_url;?>" alt="">
                            <p><?php echo $result14->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result14->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result14->discount;?></li>
                                <li>Stock: <?php echo $result14->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 15 -->
    <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result15->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result15->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result15->img_url;?>" alt="">
                            <p><?php echo $result15->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result15->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result15->discount;?></li>
                                <li>Stock: <?php echo $result15->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 16 -->
    <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result16->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result16->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result16->img_url;?>" alt="">
                            <p><?php echo $result16->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result16->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result16->discount;?></li>
                                <li>Stock: <?php echo $result16->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 17 -->
    <div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result17->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result17->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result17->img_url;?>" alt="">
                            <p><?php echo $result17->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result17->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result17->discount;?></li>
                                <li>Stock: <?php echo $result17->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 18 -->
    <div class="portfolio-modal modal fade" id="portfolioModal18" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result18->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result18->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result18->img_url;?>" alt="">
                            <p><?php echo $result18->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result18->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result18->discount;?></li>
                                <li>Stock: <?php echo $result18->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 19 -->
    <div class="portfolio-modal modal fade" id="portfolioModal19" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result19->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result19->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result19->img_url;?>" alt="">
                            <p><?php echo $result19->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result19->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result19->discount;?></li>
                                <li>Stock: <?php echo $result19->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Portfolio Modal 20 -->
    <div class="portfolio-modal modal fade" id="portfolioModal20" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                         <div class="modal-body">
                            <!-- Product Details Go Here -->
                            <h2><?php echo $result20->name;?></h2>
                            <p class="item-intro text-muted"><?php echo $result20->short_desc;?></p>
                            <img class="img-responsive img-centered" src="<?php echo $result20->img_url;?>" alt="">
                            <p><?php echo $result20->long_desc;?></p>
                            <p>
                                <strong>Price : </strong>IDR <?php echo $result20->price;?></p>
                            <ul class="list-inline">
                                <li>Discount: <?php echo $result20->discount;?></li>
                                <li>Stock: <?php echo $result20->quantity;?> pcs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
	
	<script>
	var x = document.getElementById("toogle");
	var y = document.getElementById("change");
	x.style.display = "none";
	var hidden = "true";
	
	function toogle(){
		if(hidden === "true"){
		x.style.display = "block";
		hidden="false"; 
		//y.value ="View Less";
		y.innerHTML="View Less";}
		else if(hidden === "false") {
			x.style.display = "none";
			hidden = "true";
			//y.value ="View More";
			y.innerHTML="View More";
		     }
	}
	
	</script>
	
</body>

</html>

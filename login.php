<?php
include "includes/app.php";

$uargs=Fun::mergeifunset($_GET,array("type"=>"login"));

$msg="";
$redurl=HOST.((isset($_SESSION["iid"]) && $_SESSION["iid"]!=null)?"assignment.php?aid=".$_SESSION["iid"]:"profile.php");
//echo $redurl;
if(Fun::isSetP("signup","email","name","password")){//For direct create account..
  $_POST['type']='u';
  $_POST["name"]=Fun::capName($_POST["name"]);
  $temp=User::signUp( array('email'=>$_POST['email'],'password'=>$_POST['password'],'type'=>'u', 'name'=>$_POST['name'])   );
  if($temp>0){
    Fun::redirect($redurl);
  }
  else{
    $msg="Unable to Signup";
  }
}
else if(Fun::isSetP("login","email","password")){//For login..
  $temp=User::signIn($_POST['email'],$_POST['password']);
  if($temp>0){
    Fun::redirect($redurl);
  }
  else{
    $msg="Login error";
  }
}






Disps::page_top2();
?>
 <body class="html front not-logged-in no-sidebars page-node parallax-active sff-7 slff-7 hff-7 pff-7 form-style-1" style="overflow-y:scroll;" >
  <div id="toTop">
   <i class="fa fa-angle-up">
   </i>
  </div>

  <?php
  Disps::page_header();
  if(false){
  ?>
  <div id="banner" class="clearfix" >
   <div id="banner-inside" class="clearfix">
    <div class="banner-area">
     <div class="region region-banner">
      <div id="block-views-slideshow-full-block-1" class="block block-views clearfix">
       <div class="content">
        <div class="view view-slideshow-full view-id-slideshow_full view-display-id-block_1 view-dom-id-ca4a06c1d84ecc516a437f8a94b5b30f">
         <div class="view-content">
          <div id="slideshow" class="fullwidthbanner-container main-slider">
           <div class="fullwidthbanner">
            <ul>
             <li data-transition="random" data-link="/startupgrowth/default/node/10" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide1.png?itok=ZF-WDm0n" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="/startupgrowth/default/node/10">
                 Innovation & Creativity
                </a>
               </div>
               <p>
                We do innovation, creativity, effectiveness in our assignment solutions and all that with love
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/10" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/12" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide2.png?itok=ZI7lmxNw" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="/startupgrowth/default/node/12">
                 Simplicity
                </a>
               </div>
               <p>
                We Make Education Simple : 24x7 Online Assignment and Homework Help.
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/12" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/11" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide3.png?itok=5y1DXt4H" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="">
                 Our Service
                </a>
               </div>
               <p>
                Our Service is Global : Crossing All Bariers To Help.
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/11" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/14" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide4.png?itok=zE1trovh" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="/startupgrowth/default/node/14">
                 Ultra Advanced
                </a>
               </div>
               <p>
                We Help You To Advance : Over 1300+ Expert From Across The World To Help .
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/14" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/15" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide5.png?itok=RxGwIgat" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="/startupgrowth/default/node/15">
                 We are Passionate,Cool Nerds
                </a>
               </div>
               <p>
                Available when you need us 24x7 support , 100+ subjects, 3500+Experts.We create experiences that transform grades.<br> 90k Orders delivered , 98.39% satisfaction ratio, 1 millon satisfied customers
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/15" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
            </ul>
            <div class="tp-bannertimer tp-bottom">
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <?php
  }
  ?>
  <div id="page" class="clearfix">


   <div id="top-content" class="clearfix">
    <div class="container">
     <div id="top-content-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-top-content">
         <div id="block-views-benefits-block" class="block block-views clearfix">
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div class="view-content">


             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-6" style="padding:40px;" >





              <div id="main" class="clearfix">
               <div id="logindiv" style="<?php if($uargs["type"]!="login") echo "display:none;"; ?>" >
                <div class="title" id="page-title" style="font-size:35px;font-weight:700;" >
                 Login to AHT
                </div>
                <div>
                 We will provide you better service if you login.
                </div>
                      <form class="webform-client-form" enctype="multipart/form-data"  method="post" id="webform-client-form-22" accept-charset="UTF-8">
                       <div style="display:non" id="page1" >
                        <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                         <label for="edit-submitted-name">
                          Email id
                         </label>
                         <input autofocus placeholder="Email Id" id="edit-submitted-name" name="email" value="" size="60" maxlength="128" class="form-text required" type="text">
                        </div>
                        <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                         <label for="edit-submitted-name">
                          Password
                         </label>
                         <input placeholder="Password" id="edit-submitted-name" name="password" value="" size="60" maxlength="128" class="form-text required" type="password">
                        </div>
                        <div class="form-item webform-component webform-component-textfield" id="webform-component-name" align="left" >
                          <a href="forget.php" >Forget password</a><br>
                          Don't have an account ? <a onclick="hideshowdown('logindiv','signupdiv');" >Sign Up</a><br>
                        </div>
                        <div class="form-actions form-wrapper" id="edit-actions">
                         <div id="uploadfilenamemain" style="float:left;margin-left:20px;margin-top:5px;" ></div>
                         <input id="edit-submit" value="Login" name="login" class="form-submit" type="submit" style="float:right;margin-top:0px;" />
                         <div style="clear:both;"></div>
                        </div>
                       </div>
                      </form>
               </div>
               <div id="signupdiv" style="<?php if($uargs["type"]!="signup") echo "display:none;"; ?>" >

               <div class="title" id="page-title" style="font-size:35px;font-weight:700;" >
                New User ? Register now.
               </div>
               <div>
                If you create new account, we can serve you better.
               </div>
               <form class="webform-client-form" enctype="multipart/form-data"  method="post" id="webform-client-form-22" accept-charset="UTF-8">
                <div style="display:non" id="page1" >
                 <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                  <label for="edit-submitted-name">
                   Your Name
                  </label>
                  <input placeholder="Name" id="edit-submitted-name" name="name" value="" size="60" maxlength="128" class="form-text required" type="text">
                 </div>
                 <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                  <label for="edit-submitted-name">
                   Email id
                  </label>
                  <input placeholder="Email Id" id="edit-submitted-name" name="email" value="" size="60" maxlength="128" class="form-text required" type="text">
                 </div>
                 <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                  <label for="edit-submitted-name">
                   Phone
                  </label>
                  <input placeholder="Phone no." id="edit-submitted-name" name="phone" value="" size="60" maxlength="128" class="form-text required" type="text">
                 </div>
                 <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                  <label for="edit-submitted-name">
                   Choose a Password
                  </label>
                  <input placeholder="Password" id="edit-submitted-name" name="password" value="" size="60" maxlength="128" class="form-text required" type="password">
                 </div>
                 <div class="form-item webform-component webform-component-textfield" id="webform-component-name" align="left" >
                   Already have an account ? <a onclick="hideshowdown('signupdiv','logindiv');" >Sign In</a><br>
                 </div>
                 <div class="form-actions form-wrapper" id="edit-actions">
                  <div id="uploadfilenamemain" style="float:left;margin-left:20px;margin-top:5px;" ></div>
                  <input id="edit-submit" value="Create Account" class="form-submit" name="signup" type="submit" style="float:right;margin-top:0px;" />
                  <div style="clear:both;"></div>
                 </div>
                </div>
               </form>

               </div>
              </div>

















             </div>

             <div class="views-row views-row-2 views-row-even col-sm-1 col-md-1" style="padding:40px;" align="center" >
              <div style="width:25px;border-right:solid #bbbbbb 1px;height:195px;" ></div>
              <div style="border:solid #bbbbbb 2px;width:50px;height:50px;overflow:auto;border-radius:25px;padding:8px;font-size:19px;font-weight:600;" >
               OR
              </div>
              <div style="width:25px;border-right:solid #bbbbbb 1px;height:195px;" ></div>
             </div>
             <div class="views-row views-row-2 views-row-even col-sm-5 col-md-5" style="padding:40px;" >

              <div id="main" class="clearfix">
               <div style="margin-top:100px;padding:20px;border:solid #cccccc 1px;border-radius:5px;" >
                <img src='photo/lwf.png' />
               </div>
               <div style="margin-top:5px;" >
                Its an awesome way of connecting with friends and classmates.
               </div>
              </div>
             </div>

            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>




   <div id="top-content" class="clearfix" style="display:none;" >
    <div class="container">
     <div id="top-content-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-top-content">
         <div id="block-views-benefits-block" class="block block-views clearfix">
          <h2 class="title">
           Our Simplest Process of Working.!
          </h2>
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div class="view-content">
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-4 col-md-4">
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <a class="icon" href="/startupgrowth/default/node/31">
                 <i class="fa fa-thumbs-o-up">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content"  align=center  >
                <a href="/startupgrowth/default/node/31">
                 Submit Your Assignment
                </a>
               </h3>
              </div>
              <div class="views-field views-field-body"  align=center  >
               <div class="field-content">
                <p>
                 Submit your Assignment/Homework in our submission form, mention the assignment requirements and you can chat with our 24x7 assignment Experts to get the best price. 
                </p>
               </div>
              </div>
             </div>
             <div class="views-row views-row-2 views-row-even col-sm-4 col-md-4">
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <a class="icon" href="/startupgrowth/default/node/30">
                 <i class="fa fa-cloud-download">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content" align=center >
                <a href="/startupgrowth/default/node/30">
                 Make Your Payment 
                </a>
               </h3>
              </div>
              <div class="views-field views-field-body"  align=center  >
               <div class="field-content">
                <p>
                 Once you get the best price for your assignment , process the payment though paypal, credit card, debit card or online banking. 
                </p>
               </div>
              </div>
             </div>
             <div class="views-row views-row-3 views-row-odd views-row-last col-sm-4 col-md-4">
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <a class="icon" href="/startupgrowth/default/node/29">
                 <i class="fa fa-globe">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content" align=center >
                <a href="/startupgrowth/default/node/29">
                 Get Solution

                </a>
               </h3>
              </div>
              <div class="views-field views-field-body"  align=center  >
               <div class="field-content">
                <p>
Receive your high quality, plagiarism free, accurately referenced assignment solution before the deadline in your Assignmentshelptutors.com’s student account.

                </p>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>




   <div id="highlighted" style="display:none;" >
    <div class="container">
     <div id="highlighted-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-highlighted">
         <div id="block-views-promoted-posts-block-1" class="block block-views clearfix">
          <h2 class="title" >
           Our Services
           <div align=center style='font-size:15px;padding-top:5px;' >A highly skilled professional academic help with a creative touch</div>
          </h2>
          <div class="content">
           <div class="view view-promoted-posts view-id-promoted_posts view-display-id-block_1 row view-promoted-items view-dom-id-d37b5d8e2dbcb9c0b9a8bba2d2d9f8fe">
            <?php
            $images=array("http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/service-1.jpg","http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/service-2.jpg","http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/service-3.jpg");
            $sl=Funs::services_list();
            for($i=0;$i<3;$i++){
            ?>
            <div class="view-content">
             <?php
             for($j=0;$j<3;$j++){
              $title=$sl[$i*3+$j]["title"];
              $body=$sl[$i*3+$j]["body"];
             ?>
             <div class="views-row views-row-<?php echo $i+1; ?> views-row-odd views-row-first col-sm-4 col-md-4">
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <div class="views-field-field-image">
                 <a class="overlayed" href="">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="<?php echo $images[($i+$j+rand(0,1000))%3]; ?>" width="750" height="501" alt="Appropriately communicate adaptive imperatives rather than value-added potentialities." title="Title of First Slide" />
                 </a>
                </div>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content">
                <a href="">
                 <?php echo $title; ?>
                </a>
               </h3>
              </div>
              <div class="views-field views-field-body">
               <div class="field-content">
                <p>
                 <?php echo $body; ?>
                </p>
               </div>
              </div>
              <div class="views-field views-field-view-node">
               <span class="field-content more-link">
                <a href="">
                 Know more
                </a>
               </span>
              </div>
             </div>
             <?php
             }
             ?>
           </div>
           <?php
           }
           ?>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div id="main-content">
    <div class="container">
     <div class="row">
      <section class="col-md-12">
       <div id="main" class="clearfix">
        <div class="tabs">
        </div>
       </div>
      </section>
     </div>
    </div>
   </div>
  </div>


  <div id="highlighted-bottom" style="display:none;" >
   <div id="highlighted-bottom-transparent-bg">
   </div>
   <div class="container">
    <div id="highlighted-bottom-inside" class="clearfix">
     <div class="row">
      <div class="col-md-8">
       <div id="highlighted-bottom-left">
        <div class="region region-highlighted-bottom-left">
         <div id="block-views-testimonials-block-2" class="block block-views clearfix">
          <div class="content">
           <div class="view view-testimonials view-id-testimonials view-display-id-block_2 testimonials-block highlighted view-dom-id-e9e9210bbf74449a7290fe3c7d7e15d2">
            <div class="view-content">
             <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
              <div class="views-field views-field-body">
               <div class="field-content">
                <p>
                 AHT is such an awesome service. It helps everybody in their assignments. It not just helps, but also make their assignment.
                </p>
               </div>
              </div>
              <div class="views-field views-field-title">
               <span class="field-content">
                <a href="">
                 Mohit Saini
                </a>
               </span>
              </div>
              <div class="views-field views-field-field-subtitle">
               <div class="field-content">
                <p>
                 Student at IITD
                </p>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-4">
       <div id="highlighted-bottom-right">
        <div class="region region-highlighted-bottom-right">
         <div id="block-block-21" class="block block-block clearfix">
          <div class="content">
           <div class="call-to-action">
            <p>
             Not sure yet?
             <a href="#">
              <br />
              Get in touch
             </a>
             with us or take our
             <a href="#">
              free trial
             </a>
             .
            </p>
            <p>
             <a href="#" class="more">
              get the free trial
             </a>
            </p>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>


  <div id="bottom-content" class="clearfix" style="display:none;" >
   <div class="container">
    <div id="bottom-content-inside" class="clearfix">
     <div class="row">
      <div class="col-md-12">
       <div class="region region-bottom-content">
        <div id="block-views-showcases-block-1" class="block block-views clearfix">
         <h2 class="title">
          Our Unmatched Features
          <div align=center style='font-size:15px;padding-top:5px;' >
           These features are the reasons why you love us
          </div>
         </h2>
         <div class="content">
          <div class="view view-showcases view-id-showcases view-display-id-block_1 row view-promoted-items view-dom-id-b584bb1de55826478c8984bbaed8e8eb">
           <?php
            $images=array();
            for($i=0;$i<6;$i++){
             $images[]="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-".($i+1).".jpg";
            }
            $fl=Funs::features_list();
            $flid=0;
            for($j=0;$j<3;$j++){
           ?>
           <div class="view-content">
            <?php
             $mylimit=8;
             for($i=0;$i<4 && $flid<count($fl) && $flid<$mylimit ;$i++,$flid++){
            ?>
            <div class="views-row views-row-<?php echo $i+1; ?> views-row-odd views-row-first col-md-3 col-sm-6">
             <div class="views-field views-field-field-font-awesome-classes">
              <div class="field-content">
               <div class="views-field-field-image">
                <div class="overlayed-wrapper">
                 <a class="overlayed-inner" href="">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="<?php echo $images[rand(0,5)]; ?>" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
                 </a>
                 <span class="info"  style='display:none;'  >
                  <span class="date">
                   Jun 4
                  </span>
                  <a href="" class="comments">
                   3
                  </a>
                  <span class="author">
                   By admin
                  </span>
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="views-field views-field-title">
              <h2 class="field-content">
               <a href="">
                <?php echo $fl[$flid]["title"]; ?>
               </a>
              </h2>
             </div>
             <div class="views-field views-field-body">
              <div class="field-content">
               <p>
                <?php echo $fl[$flid]["body"]; ?>
               </p>
              </div>
             </div>
             <div class="views-field views-field-view-node">
              <span class="field-content more-link">
               <a href="">
                Read more
               </a>
              </span>
             </div>
            </div>
            <?php
            }
            if(false){
            ?>
            <div class="views-row views-row-2 views-row-even col-md-3 col-sm-6">
             <div class="views-field views-field-field-font-awesome-classes">
              <div class="field-content">
               <div class="views-field-field-image">
                <div class="overlayed-wrapper">
                 <a class="overlayed-inner" href="/startupgrowth/default/node/21">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-3.jpg?itok=vg_5wJN5" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
                 </a>
                 <span class="info">
                  <span class="date">
                   Dec 4
                  </span>
                  <a href="/startupgrowth/default/node/21#comments" class="comments">
                   1
                  </a>
                  <span class="author">
                   By admin
                  </span>
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="views-field views-field-title">
              <h2 class="field-content">
               <a href="/startupgrowth/default/node/21">
                Company name
               </a>
              </h2>
             </div>
             <div class="views-field views-field-body">
              <div class="field-content">
               <p>
                Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform...
               </p>
              </div>
             </div>
             <div class="views-field views-field-view-node">
              <span class="field-content more-link">
               <a href="/startupgrowth/default/node/21">
                Read more
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-3 views-row-odd col-md-3 col-sm-6">
             <div class="views-field views-field-field-font-awesome-classes">
              <div class="field-content">
               <div class="views-field-field-image">
                <div class="overlayed-wrapper">
                 <a class="overlayed-inner" href="/startupgrowth/default/node/19">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-2.jpg?itok=3eyZfK8h" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
                 </a>
                 <span class="info">
                  <span class="date">
                   Dec 4
                  </span>
                  <a href="/startupgrowth/default/node/19#comments" class="comments">
                   1
                  </a>
                  <span class="author">
                   By admin
                  </span>
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="views-field views-field-title">
              <h2 class="field-content">
               <a href="/startupgrowth/default/node/19">
                Company name
               </a>
              </h2>
             </div>
             <div class="views-field views-field-body">
              <div class="field-content">
               <p>
                Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform...
               </p>
              </div>
             </div>
             <div class="views-field views-field-view-node">
              <span class="field-content more-link">
               <a href="/startupgrowth/default/node/19">
                Read more
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-4 views-row-even views-row-last col-md-3 col-sm-6">
             <div class="views-field views-field-field-font-awesome-classes">
              <div class="field-content">
               <div class="views-field-field-image">
                <div class="overlayed-wrapper">
                 <a class="overlayed-inner" href="/startupgrowth/default/node/18">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-6.jpg?itok=FwuCT5Q0" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
                 </a>
                 <span class="info">
                  <span class="date">
                   Dec 4
                  </span>
                  <a href="/startupgrowth/default/node/18#comments" class="comments">
                   0
                  </a>
                  <span class="author">
                   By admin
                  </span>
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="views-field views-field-title">
              <h2 class="field-content">
               <a href="/startupgrowth/default/node/18">
                Company name
               </a>
              </h2>
             </div>
             <div class="views-field views-field-body">
              <div class="field-content">
               <p>
                Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform...
               </p>
              </div>
             </div>
             <div class="views-field views-field-view-node">
              <span class="field-content more-link">
               <a href="/startupgrowth/default/node/18">
                Read more
               </a>
              </span>
             </div>
            </div>
            <?php
            }
            ?>
           </div>
           <?php
           }
           ?>
           <div class="more-link" style='display:none;' >
            <a href="/startupgrowth/default/showcase">
             View All
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <div id="footer-top" class="clearfix">
   <div class="container">
    <div id="footer-top-inside" class="clearfix">
     <div class="row">
      <div class="col-md-12">
       <div class="region region-footer-top">
        <div id="block-block-16" class="block block-block clearfix">
         <div class="content">
          <ul class="social-bookmarks text-right">
           <li class="text">
            Follow us on social media
           </li>
           <li class="facebook">
            <a href="https://www.facebook.com/AssignmentsHelpTutors">
             <i class="fa fa-facebook">
             </i>
            </a>
           </li>
           <li class="twitter">
            <a href="https://twitter.com/Assignments_H_T">
             <i class="fa fa-twitter">
             </i>
            </a>
           </li>
           <li class="googleplus">
            <a href="https://plus.google.com/u/0/b/105455772845615681168/">
             <i class="fa fa-google-plus">
             </i>
            </a>
           </li>
           <li class="linkedin">
            <a href="http://in.linkedin.com/pub/assignments-help-tutors/65/b1b/9b8">
             <i class="fa fa-linkedin">
             </i>
            </a>
           </li>
           <li class="youtube">
            <a href="https://www.youtube.com/AssignmentHelpTutors">
             <i class="fa fa-youtube-play">
             </i>
            </a>
           </li>
           <li class="instagram">
            <a href="">
             <i class="fa fa-instagram">
             </i>
            </a>
           </li>
           <li class="flickr">
            <a href="">
             <i class="fa fa-flickr">
             </i>
            </a>
           </li>
           <li class="vimeo">
            <a href="">
             <i class="fa fa-vimeo-square">
             </i>
            </a>
           </li>
           <li class="pinterest">
            <a href="http://www.pinterest.com/assignmenthelps/">
             <i class="fa fa-pinterest">
             </i>
            </a>
           </li>
           <li class="skype">
            <a href="">
             <i class="fa fa-skype">
             </i>
            </a>
           </li>
          </ul>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <footer id="footer" class="clearfix">
   <div class="container">
    <div class="row">
     <div class="col-sm-6">
      <div class="footer-area">
       <div class="region region-footer-first">
        <div id="block-block-17" class="block block-block clearfix">
         <h2 class="title">
          About us
         </h2>
         <div class="content">
          <p>
           AssignmentsHelpTutors.com is a global team and our true initiative is to bring education and technology together, and providing a single platform across the world. Here at Assignmentshelptutors.com, we have gathered some brilliant minds for you, who will create the difference in your life and will make your career a success. We are a team who thought of providing services and help with the assignments to those students nationally and world wide, who initially finds difficulty while doing their assignments, and need a way to come out of their problem.
          </p>
          <div class="more-link">
           <a href="">
            Read more
           </a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-sm-3">
      <div class="footer-area">
       <div class="region region-footer-third">
        <div id="block-views-popular-tags-block" class="block block-views clearfix">
         <h2 class="title">
          Popular Tags
         </h2>
         <div class="content">
          <div class="view view-popular-tags view-id-popular_tags view-display-id-block view-dom-id-81eacddc8320e44bdd68cbc6bfc529e0">
           <div class="view-content">
            <div class="views-row views-row-1 views-row-odd views-row-first">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/13">
                #maths
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-2 views-row-even">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/11">
                #coding
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-3 views-row-odd">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/10">
                #ahtIsAwesome
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-4 views-row-even">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/14">
                #Deadline
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-5 views-row-odd">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/12">
                #Ontime
               </a>
              </span>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-sm-3">
      <div class="footer-area">
       <div class="region region-footer-fourth">
        <div id="block-menu-menu-footer-menu" class="block block-menu clearfix">
         <h2 class="title">
          Footer menu
         </h2>
         <div class="content">
          <ul class="menu">
           <li class="first leaf">
            <a href="/startupgrowth/default/node/2" title="">
             About
            </a>
           </li>
           <li class="collapsed">
            <a href="/startupgrowth/default/blog" title="">
             Blog
            </a>
           </li>
           <li class="leaf">
            <a href="/startupgrowth/default/contact-us" title="">
             Contact
            </a>
           </li>
           <li class="leaf">
            <a href="/startupgrowth/default/node/26" title="">
             Team
            </a>
           </li>
           <li class="leaf">
            <a href="/startupgrowth/default/services" title="">
             Careers
            </a>
           </li>
           <li class="leaf">
            <a href="/startupgrowth/default/showcase" title="">
             Tutor Registration
            </a>
           </li>
           <li class="last leaf">
            <a href="/startupgrowth/default/node/1" title="">
             T &C
            </a>
           </li>
          </ul>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </footer>
  <div id="subfooter" class="clearfix">
   <div class="container">
    <div id="subfooter-inside" class="clearfix">
     <div class="row">
      <div class="col-md-6">
       <div class="subfooter-area left">
        <div class="region region-sub-footer-left">
         <div id="block-block-9" class="block block-block clearfix">
          <div class="content">
           <p>
            Copyright &copy; 2015 Assignments Help Tutors. All rights reserved.
           </p>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-6">
       <div class="subfooter-area right">
        <div class="region region-footer">
         <div id="block-menu-menu-footer-bottom-menu" class="block block-menu clearfix">
          <div class="content">
           <ul class="menu">
            <li class="first leaf">
             <a href="/startupgrowth/default/services" title="">
              Services
             </a>
            </li>
            <li class="leaf">
             <a href="" title="">
              About us
             </a>
            </li>
            <li class="last leaf">
             <a href="" title="">
              Contact
             </a>
            </li>
           </ul>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="region region-page-bottom">
  </div>
 </body>
 <?php
Disps::bottom_js();
 ?>
<script>
jQuery(document).ready(function($) { 
  $("a").click(function(){
//    return false;
  });
});
</script>
</html>

<?php
include "includes/app.php";

Fun::issetlogout();

$myf=User::myprofile();

if(Fun::isSetP("csubject","question","quote","deadline")  ){
 if (isset($_FILES["uploadfile"]))
  $fn=Fun::uploadfile($_FILES["uploadfile"],array(),"_".$_ginfo["ip"]);
 else
  $fn=array("ec"=>4,"fn"=>"");
 if($fn["ec"]>0){
  $_POST["quote"]=0+$_POST["quote"];
  $insdata=array( "subject" => $_POST["csubject"] , "content" => $_POST["question"] ,"time"=>time() ,"ufile"=>$fn['fn'],"status"=>($_POST["quote"]<=0?1:2),"quote"=>$_POST["quote"],"deadline"=>strtotime( $_POST["deadline"]) );
  if(User::islogin())
   $insdata["uid"]=User::loginId();
  $iid=Sqle::insertVal("questions",$insdata);
  if(!User::islogin()){
   $_SESSION["iid"]=$iid;
   $page_type="login";
   Fun::redirect(HOST."login.php");
  }
  else{
   Help::assignuploadaction(array("student name"=>$myf["name"],"aid"=>$iid));
   Fun::redirect(HOST."assignment.php?aid=".$iid);
  }
 }
 else
  $msg="Unable to upload file";
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
?>



  <div id="banner" class="clearfix">




   <div style="margin-top:-25px;" ></div>
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
             <li data-transition="random" data-link="/startupgrowth/default/node/10" data-masterspeed="800"  >
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide1.png?itok=ZF-WDm0n" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn" style="display:none;" >
               <div class="title">
                <a href="">
                 Innovation & Creativity
                </a>
               </div>
               <p>
                We do innovation, creativity, effectiveness in our assignment solutions and all that with love
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/12" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide2.png?itok=ZI7lmxNw" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn" style="display:none;" >
               <div class="title">
                <a href="">
                 Simplicity
                </a>
               </div>
               <p>
                We Make Education Simple : 24x7 Online Assignment and Homework Help.
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/11" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide3.png?itok=5y1DXt4H" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn" style="display:none;" >
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
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn" style="display:none;" >
               <div class="title">
                <a href="">
                 Ultra Advanced
                </a>
               </div>
               <p>
                We Help You To Advance : Over 1300+ Expert From Across The World To Help .
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/15" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide5.png?itok=RxGwIgat" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn" style="display:none;" >
               <div class="title">
                <a href="">
                 We are Passionate,Cool Nerds
                </a>
               </div>
               <p>
                Available when you need us 24x7 support , 100+ subjects, 3500+Experts.We create experiences that transform grades.<br> 90k Orders delivered , 98.39% satisfaction ratio, 1 millon satisfied customers
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="" class="more">
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
  Disps::assign_submitting_form(array("page"=>"index"));
?>



  <div id="page" class="clearfix">




   <div id="top-content" class="clearfix">
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
                <a class="icon" href="">
                 <i class="fa fa-thumbs-o-up">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content"  align=center  >
                <a href="">
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
                <a class="icon" href="">
                 <i class="fa fa-cloud-download">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content" align=center >
                <a href="">
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
                <a class="icon" href="">
                 <i class="fa fa-globe">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content" align=center >
                <a href="">
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




   <div id="highlighted">
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
            $images=genfilearr("photo/slider/pic%d.png",22,0);
            
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
                  <img typeof="foaf:Image" src="<?php echo $images[3*$i+$j]; ?>" width="750" height="501" alt="Appropriately communicate adaptive imperatives rather than value-added potentialities." title="Title of First Slide" />
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
  <div id="highlighted-bottom">
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
  <div id="bottom-content" class="clearfix">
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
             if(false){
              $images=array();
              for($i=0;$i<6;$i++){
               $images[]="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-".($i+1).".jpg";
              }
             }
             $images=genfilearr("photo/slider/pic%d.png",8,9);
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
                  <img typeof="foaf:Image" src="<?php echo $images[$flid]; ?>" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
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
                 <a class="overlayed-inner" href="">
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
                  <a href="" class="comments">
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
               <a href="">
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
               <a href="">
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
                 <a class="overlayed-inner" href="">
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
                  <a href="" class="comments">
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
               <a href="">
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
               <a href="">
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
                 <a class="overlayed-inner" href="">
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
                  <a href="" class="comments">
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
               <a href="">
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
               <a href="">
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
            <a href="">
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
        <div id="block-views-popular-tags-block" class="block block-views clearfix" style="display:none;" >
         <h2 class="title">
          Popular Tags
         </h2>
         <div class="content">
          <div class="view view-popular-tags view-id-popular_tags view-display-id-block view-dom-id-81eacddc8320e44bdd68cbc6bfc529e0">
           <div class="view-content">
            <div class="views-row views-row-1 views-row-odd views-row-first">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="">
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
            <a href="" title="">
             About
            </a>
           </li>
           <li class="collapsed">
            <a href="" title="">
             Blog
            </a>
           </li>
           <li class="leaf">
            <a href="content.php?cname=contactus" title="">
             Contact
            </a>
           </li>
           <li class="leaf">
            <a href="" title="">
             Team
            </a>
           </li>
           <li class="leaf">
            <a href="" title="">
             Careers
            </a>
           </li>
           <li class="leaf">
            <a href="" title="">
             Tutor Registration
            </a>
           </li>
           <li class="last leaf">
            <a href="" title="">
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
             <a href="" title="">
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
<?php


if(!User::isloginas('a'))
  Disps::disp_chat();


?>
 </body>
 <?php
Disps::bottom_js();
closedb();
 ?>
</html>

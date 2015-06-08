<?php
include "includes/app.php";

$cname=get("cname");
$caddress="data/filtered/filter_".$cname;
if($cname!=null && file_exists($caddress)){
  $content=file_get_contents($caddress);
}
else{
 Fun::redirectinv();
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

  <div id="page" class="clearfix">


   <div id="top-content" class="clearfix">
    <div class="container">
     <div id="top-content-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-top-content">
         <div id="block-views-benefits-block" class="block block-views clearfix" >
          <?php
          echo $content;
          ?>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>


  <?php
   Disps::page_footer();
  ?>


  <div class="region region-page-bottom">
  </div>
 </body>
 <?php
Disps::bottom_js();
 ?>
</html>
<?php
closedb();
?>
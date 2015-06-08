<?php
include "includes/app.php";

Fun::gotohome();//If not login then redirect to home page.
$myf=User::myprofile();
$utype=User::loginType();
$uid=User::loginId();

$allnotf=Sql::getArray("select * from notf where uid=? order by time desc " ,'i',array(&$uid));

?>


<?php
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
          <h2 class="title" style="text-align:left;" >
           <?php echo "Notifications"; ?><br><br>
          </h2>

<?php
foreach($allnotf as $i=>$val){
?>
<?php
Disps::disp_notf($val);
?>
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




  <?php
   Disps::page_footer();
  ?>


  <div class="region region-page-bottom">
  </div>
 </body>
 <?php
Disps::bottom_js();
 ?>
<script>


function keeploading_assign_comments(){
 button.sendreq_v2_t3({'aid':'<?php echo $aid; ?>','action':'conv'},null,funcs.f3);
 setTimeout(keeploading_assign_comments,5000);
}


$(document).ready(function(){
// keeploading_assign_comments();
});


</script>
</html>






<?php
closedb();
?>
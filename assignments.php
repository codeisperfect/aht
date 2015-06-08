<?php
include "includes/app.php";

Fun::gotohome();//If not login then redirect to home page.
$myf=User::myprofile();
$aid=(isset($_GET["aid"])?(0+$_GET["aid"]):0);
$utype=User::loginType();
$uid=User::loginId();

$argsinfo=Fun::mergeifunset($_GET,array("list"=>"all"));

$head_title="";
$numbidding="(select aid,count(id) as numbid from bidding where btype='e' group by aid)numbidding";
if(User::isloginas('a')){
  $alla=Sql::getArray("select numbidding.numbid, questions.* from questions left join $numbidding on numbidding.aid=questions.id order by time desc ");
  $head_title="All Assignments";
}
else if(User::isloginas('e')){
  $eid=User::loginId();
  if($argsinfo["list"]=="all"){
    $alla=Sql::getArray("select numbidding.numbid, questions.* from questions left join $numbidding on numbidding.aid=questions.id  left join expert on expert.eid=? where concat(',',expert.mytopics,',') like concat('%,',questions.subject,',%') AND myprice is not NULL  order by time desc ",'i',array(&$eid));
    $head_title="Assignments matching your profile";
  }
  else if($argsinfo["list"]=="my"){
    $alla=Sql::getArray("select numbidding.numbid, questions.* from questions left join $numbidding on numbidding.aid=questions.id where expid=? order by time desc ",'i',array(&$eid));
    $head_title="Assignments, assigned to you.";
  }
  else
    $alla=array();
}
else if(User::isloginas('u')){
  $sid=User::loginId();
  $rtype=User::loginType();
  $query="select * from questions left join (select aid,count(*) as numcomment from conv where sid=? or rtype=? group by aid) assignconv on  assignconv.aid=questions.id where uid=? order by time desc";
  $alla=Sql::getArray($query,'isi',array(&$sid,&$rtype,&$sid));
}
else{
  Fun::gotohome('',true);
}



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
           <?php echo $head_title; ?><br><br>
          </h2>

<?php
foreach($alla as $i=>$val){
  Disps::disp_assignlistelm_expert($val);
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
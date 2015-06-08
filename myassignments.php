<?php
include "includes/app.php";
Fun::gotohome();//If not login then redirect to home page.
$myf=User::myprofile();
$utype=User::loginType();
$uid=User::loginId();

$uargs=Fun::mergeifunset($_GET,array("list"=>"myassign"));

$sid=User::loginId();
$rtype=User::loginType();
$query="select admincomments.num_admin_comment,solnfiles.num_soln_files,assignconv.numcomment, questions.* from questions left join (select aid,count(*) as numcomment from conv where sid=? or rtype=? group by aid) assignconv on  assignconv.aid=questions.id  left join (select aid,count(*) as num_admin_comment from conv where rtype!='a' group by aid) admincomments on admincomments.aid=questions.id  left join (select qid as aid,count(*) as num_soln_files from soln group by qid) solnfiles on solnfiles.aid=questions.id where uid=? AND (questions.deadline> ".time()." OR ".($uargs["list"]=="myassign"?"true":"false")." ) order by time desc";
$alla=Sql::getArray($query,'isi',array(&$sid,&$rtype,&$sid));





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
  	Disps::page_header($myf);
  ?>

  <div id="page" class="clearfix">


   <div id="top-content" class="clearfix">
    <div class="container">
     <div id="top-content-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-top-content">
         <div id="block-views-benefits-block" class="block block-views clearfix" >
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">


            <div class="view-content" style="margin-top:-100px;" >
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-3 col-md-3">
              <div style="width:200px;height:200px;overflow:hidden;border-radius:100px;" >
                <img src='<?php echo $myf["profilepic"]; ?>' height="200" width="200" />
              </div>
              <table>
              <?php
                Disp::disptabletitle1(array("Name : ",$myf["name"]),array("style"=>""));
                Disp::disptabletitle1(array("Email : ",$myf["email"]));
                Disp::disptabletitle1(array("Phone : ",$myf["phone"]));
              ?>
              </table>


             </div>
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-9 col-md-9" align="left" >




               <?php
               Disps::disp_myassign_top_menu();
          $assign_table=new Table(array('params'=>array('class'=>'table-hover table-bordered table p10px ')));


          $titles=array("Order ID","Subject","Payment","Assignment Status","Due Date","Time Left","My Rating");
          $row=new Row();
          foreach($titles as $i=>$v){
            $row->tdlist[]=new Td(array("html"=>new Text($v)));
          }
          $assign_table->trlist[]=$row;
          for($i=0;$i<count($alla);$i++){
//              $rowlist=array($alla[$i]["id"],$_ginfo["subjects"][$alla[$i]["subject"]],$alla[$i]["paid"].' $',$_ginfo["assign_status"][Funs::assign_status($alla[$id])], Fun::timetostr($alla[$id]["deadline"])  );
              $rowlist=array($alla[$i]["id"],$_ginfo["subjects"][$alla[$i]["subject"]],$alla[$i]["paid"].' $',$_ginfo["assign_status"][Funs::assign_status($alla[$i])], Fun::timetostr($alla[$i]["deadline"]), Fun::time_remaining($alla[$i]["deadline"]-time()));
              $row=new Row();
              foreach($rowlist as $j){
                $row->tdlist[]=new Td(array('html'=>new Text($j))  );
              }
              $assign_table->trlist[]=$row;
          }
          $assign_table->disp();

               ?>










             </div>
            </div>
            <?php
            clear();
            ?>


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
   Disps::page_footer();
  ?>


  <div class="region region-page-bottom">
  </div>
 </body>
 <?php
Disps::bottom_js();
 ?>
<script>




</script>
</html>






<?php
closedb();
//$DB->close();
?>
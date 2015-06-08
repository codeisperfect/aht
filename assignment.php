<?php
include "includes/app.php";
Fun::gotohome();//If not login then redirect to home page.
$myf=User::myprofile();
$aid=(isset($_GET["aid"])?(0+$_GET["aid"]):0);
$utype=User::loginType();
$uid=User::loginId();

if(isset($_SESSION["iid"]) && $_SESSION["iid"]!=null && $_SESSION["iid"]==$aid ){
  Sqle::updateVal("questions",array("uid"=>User::loginId()),array("id"=>$_SESSION["iid"]));
  $_SESSION["iid"]=null;
  Help::assignuploadaction(array("student name"=>$myf["name"],"aid"=>$aid));
}




$query="select users.name as expname,admincomments.num_admin_comment,solnfiles.num_soln_files, thisquestion.* from (select users.name as adminname,questions.* from questions left join users on users.id=questions.adminid where questions.id=? AND (uid=? OR ".($utype=="a"?"1":"0")."  OR ".($utype=="e"?"1":"0")."  )  LIMIT 1)thisquestion left join users on users.id=thisquestion.expid left join (select aid,count(*) as num_admin_comment from conv where rtype!='a' group by aid)admincomments on admincomments.aid=thisquestion.id  left join (select qid as aid,count(*) as num_soln_files from soln group by qid) solnfiles on solnfiles.aid=thisquestion.id";
$ainfo=Sql::getArray($query,'ii',array(&$aid,&$uid));
if(count($ainfo)>0)
  $ainfo=$ainfo[0];
else{
  Fun::redirectinv();
}


if(Fun::isSetP("expprice") && User::isloginas('a') ){
  Sqle::updateVal("questions",array("myprice"=>(0+$_POST["expprice"])),array("id"=>$aid));
  Help::assignapproveaction($aid,$ainfo);
  $ainfo["myprice"]=(0+$_POST["expprice"]);
}


if(isset($_FILES["postsoln"]) && ($utype=='a' ||  $ainfo["expid"]==$uid )  ) {
  Help::postsoln($aid,$_FILES["postsoln"]);
}


if(isset($_GET["notfid"])){
	Help::readnotf($_GET["notfid"]);
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

              <div class="views-field views-field-field-font-awesome-classes">

               <div class="field-content">
                <a class="icon" >
                 <i class="fa fa-cloud-download">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content" align=center >
                 <div>
                  <?php
                   if(User::loginType()=='a' || User::loginType()=='e'){
                  ?>
                  <a onclick='$("#subsoln").slideToggle();' >Submit Solution</a>
                  <div style='margin-top:5px;display:none;' id="subsoln" >
                   <form method="post"  enctype="multipart/form-data"  >
                    <input type=file name="postsoln"  style='margin-bottom:5px;' />
                    <?php
                     button(array("html"=>"Submit","type"=>"submit"));
                    ?>
                   </form>
                  </div><br><br>
                  <?php
                   }
                   else{
                   ?>
                   <a href='payment.php' >Make your Payment</a>
                   <?php
                   }
                  ?>
                 </div>
               </h3>
              </div>


             </div>
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-9 col-md-9" align="left" >

            <div id="block-quicktabs-sidebar-tabs" class="block block-quicktabs clearfix">
             <div class="content">
              <div id="quicktabs-sidebar_tabs" class="quicktabs-wrapper quicktabs-style-nostyle jquery-once-1-processed">

               <div class="item-list">

                <ul class="quicktabs-tabs quicktabs-style-nostyle">
                <?php
                $inp=array('list'=>array("myassignments.php?list=current"=>"Current Assignment","myassignments.php?list=myassign"=>"My Assignment"));
                if(User::isloginas('u'))
                  $inp["list"]["submitnew.php"]="Submit New Assignment";
                foreach($inp["list"] as $id=>$name){
                ?>
                <li class="<?php echo ""; ?>" style="list-style-type: none;" >
                <a  class="active quicktabs-loaded jquery-once-2-processed" href="<?php echo $id; ?>" >
                <?php echo $name; ?>
                </a>
                </li>
                <?php
                }
                ?>
                <li style="list-style-type:none;" >
                  <a>&nbsp;</a>
                </li>
                </ul>
                 </div>
               </div>
              </div>
            </div>



               <?php


          $dispinfo=array("Order Id"=>$ainfo["id"],"Manager"=>"Mohit Saini","Due Date"=>Fun::timetostr($ainfo["deadline"])  );
          if(User::isloginas('a') || User::isloginas('u') ){
            $dispinfo["Price Paid"]=$ainfo["paid"];
            $dispinfo["My Price Quote"]=$ainfo["quote"]."$"."<a class='hiddenedit' style='padding-left:30px;display:none;' onclick='$(\"#editquote\").slideDown();' >Edit</a><div id='editquote' style='display:none;' ><br><input class='form-control' style='display:table-row-group;width:200px;' value='".$ainfo["quote"]."' /><button class='btn btn-default' style='margin-left:10px;' >Save</button></div>";

            $dispinfo["Status"]=$_ginfo["assign_status"][Funs::assign_status($ainfo)];
          }
          $dispinfo["Expert Assigned"]=$ainfo["expname"];
          $dispinfo["Subject"]=$_ginfo["subjects"][$ainfo["subject"]];
          $dispinfo["Assignment"]=Fun::displayMsgBody($ainfo["content"] ).($ainfo["ufile"]!=""?"<br><a href='".HOST.$ainfo["ufile"]."' >"."Attachment"."</a>":"");
          $temp_soln=Sql::getArray("select id,filename from soln where qid=?",'i',array(&$aid));
          if(User::isloginas('a')|| ($ainfo["expid"]==User::loginId())  ){
            $dispinfo['Expert Price']="$".$ainfo["myprice"];
          }
          if(!(User::isloginas('e') && $ainfo["expid"]!=User::loginId() )){
            $dispinfo["Solutions"]="";
            for($i=0;$i<count($temp_soln);$i++){
              $solnid=$temp_soln[$i]["id"];
              $dispinfo["Solutions"].= "<div><a href='".$temp_soln[$i]["filename"]."' >"."Solution ".($i+1)."</a>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".( ($utype=='a' || $utype=='e' ) ?"<a onclick='delete_soln(this,$solnid);' >Delete</a>":"")."</div>";
            }
          }

          $keys=array_keys($dispinfo);

          $assign_table=new Table(array('params'=>array('class'=>'table-hover table-bordered table p10px ')));
          for($i=0;$i<count($keys);$i++){
            if("My Price Quote"==$keys[$i])
              $row=new Row(array('params'=>array('onmouseenter'=>'if(false){funcs.f1(this);};' ,'onmouseleave'=>'funcs.f2(this);' )));
            else
              $row=new Row();
            foreach(array( $keys[$i] , $dispinfo[$keys[$i]] ) as $ind=>$val ){
              $row->tdlist[]=new Td(array('html'=>new Text($ind!=1?$val:"<div style='' >".$val."</div>"),'params'=> ($ind==1?array("style"=>""):array() )  ));
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
           <div>
            <div style="width:300px;" >
            <?php
              if(User::isloginas('a')){
                opent("form",array("method"=>"post"));
                Disps::disp_form_elm(array("name"=>"expprice", "ph"=>"expert price in $","label"=>"Make is visible to experts","value"=>($ainfo["myprice"]>0?$ainfo["myprice"]:"")));
                Disps::disp_form_elm(array("value"=>"Make Visiable","type"=>"submit"));
                closet("form");
              }
            ?>
            </div>
           </div>
          </div>


<div id="block-quicktabs-sidebar-tabs" class="block block-quicktabs clearfix">
 <div class="content">
  <div id="quicktabs-sidebar_tabs" class="quicktabs-wrapper quicktabs-style-nostyle jquery-once-1-processed">

   <div class="item-list">
   <?php
    if(User::isloginas('a') || (User::isloginas('e') && $ainfo["expid"]==$uid )  ){
     $tabs=array(
      "selected"=>"comments",
      "list"=>array(
       "comments"=>"Comments",
       "bidding"=>"Bidding"
       )
      );
    }
    else if(User::isloginas('e') && $ainfo["expid"]!=$uid ){
     $tabs=array(
      "selected"=>"bidding",
      "list"=>array(
       "bidding"=>"Bidding"
       )
      );
    }
    else{
     $tabs=array(
      "selected"=>"comments",
      "list"=>array(
       "comments"=>"Comments"
       )
      );
    }
    Disps::disp_menu_tags($tabs);
   ?>
    <div class="mymenutabs" >
    <?php
    $tabno=0;
    foreach($tabs["list"] as $id=>$name){
     if(Funs::in_tabs($tabs,$id)){
      $div_params=array("id"=>$id);
      if($tabno==0)
       $div_params["style"]="display:inline;";
      opent("div",$div_params);
      if($id=="comments"){
       Disps::disp_assign_conv_t2($myf,$aid);
      }
      else if($id=="bidding"){
       Disps::disp_bidding_conv_t2($myf,$aid,$ainfo);
      }
      closet("div");
      $tabno++;
     }
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

function keeploading_assign_bidding(){
 button.sendreq_v2_t3({'aid':'<?php echo $aid; ?>','action':'bidding'},null,function(d){ funcs.f4(d,'assignmentbidding');} );
 setTimeout(keeploading_assign_bidding,5000);
}


$(document).ready(function(){
// keeploading_assign_comments();
// keeploading_assign_bidding();
});


</script>
</html>






<?php
closedb();
//$DB->close();
?>
<?php
include "includes/app.php";
Fun::gotohome('u');//If not login then redirect to home page.
$myf=User::myprofile();
if($myf==null)
  Fun::gotohome('',true);

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

            
          <div class="content" style="background-color:rgba(0,0,0,0.4);" >
              <?php
                  Disps::assign_submitting_form(array("page"=>"submitnew"));
              ?>
          </div>
 




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
<?php
include "includes/app.php";

Fun::gotohome();//If not login then redirect to home page.

$msg="";
$cururl=HOST."profile.php";
if(Fun::isSetP("uploadprofileinfo","name","address","phone","dob")){
  $_POST["dob"]=strtotime($_POST["dob"]);
  Sqle::updateVal("users",Fun::getflds( array("name","address","phone","dob") , $_POST ) , array("id"=>User::loginId()));
//  Fun::redirect($cururl);
  $msg="Saved";
}
if(Fun::isSetP("opassword","npassword","rpassword")){
  if($_POST["npassword"]==$_POST["rpassword"]){
    if(Sqle::updateVal("users",array("password"=>$_POST["rpassword"]),array("id"=>User::loginId(),"password"=>$_POST["opassword"])))
      $msg="Done ! ";
    else
      $msg="Unable to Change";
  }
  else
    $msg="Password not matched";
}

if(isset($_FILES["profilepic"])){
  $uf=Fun::uploadfile($_FILES["profilepic"],array());
  if($uf["ec"]>0){
    Sqle::updateVal("users",array("profilepic"=>$uf["fn"]),array("id"=>User::loginId()));
  }
}





$myf=User::myprofile();
if($myf==null)
  Fun::gotohome('',true);



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
           Edit Your Profile ( <?php echo User::accountNames(User::loginType()); ?> )
          </h2>
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div align="center"  style="color:red;" ><?php echo $msg; ?></div>
            <div class="view-content">

             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-4 col-md-4">
              <div id="main" class="clearfix" style="padding:30px;" align="" >
                <img src="<?php echo $myf["profilepic"]; ?>" height="200" width="200" />
                <div align="" style="margin-left:15px;" >
                  <a style="cursor:pointer;" onclick="$('#profilepicinput').slideToggle();" >Edit Profile Pic</a><br><br>
                  <div  id="profilepicinput" style="display:none;" >
                  <form method="post" enctype="multipart/form-data" >
                    <input type="file" name="profilepic" />
                    <button type="submit" >Upload profile pic</button>
                  </form>
                  </div>
                </div>
              </div>
             </div>

             <div class="views-row views-row-2 views-row-even col-sm-4 col-md-4" style="" >
             <p style="font-size:25px;" >Edit profile Info.</p>
             <form method="post" >
              <?php
                Disps::disp_form_elm(array("label"=>"Name","value"=>$myf["name"],"name"=>"name"));
                Disps::disp_form_elm(array("label"=>"Address","value"=>$myf["address"],"name"=>"address"));
                Disps::disp_form_elm(array("label"=>"Phone no.","value"=>$myf["phone"],"name"=>"phone"));
                Disps::disp_form_elm(array("label"=>"Date of birth","value"=>$myf["dob"]>0?Fun::timetodate($myf["dob"]):"","name"=>"dob"));
                Disps::disp_form_elm(array("type"=>"submit","value"=>"Save","name"=>"uploadprofileinfo"));
              ?>
              </form>
             </div>
             <div class="views-row views-row-2 views-row-even col-sm-4 col-md-4" style="" >
             <p style="font-size:25px;" >Change Password</p>
             <form method="post" >
              <?php
                Disps::disp_form_elm(array("label"=>"old password","name"=>"opassword","type"=>"password"));
                Disps::disp_form_elm(array("label"=>"new password","name"=>"npassword","type"=>"password"));
                Disps::disp_form_elm(array("label"=>"Enter Again","name"=>"rpassword","type"=>"password"));
                Disps::disp_form_elm(array("type"=>"submit","value"=>"Change","name"=>"chagepassword"));
              ?>
             </div>

            </div>
           </div>
          </div>


<div id="block-quicktabs-sidebar-tabs" class="block block-quicktabs clearfix">
 <div class="content">
  <div id="quicktabs-sidebar_tabs" class="quicktabs-wrapper quicktabs-style-nostyle jquery-once-1-processed">

   <div class="item-list">
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



</script>
</html>






<?php

closedb();
?>
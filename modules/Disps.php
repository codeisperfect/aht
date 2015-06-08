<?php
class Disps extends Sql{
	public static function page_top($inp=array()){
		$inp=Fun::mergeifunset($inp,array("title"=>"AHT"));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" >
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="shortcut icon" href="http://demo.morethanthemes.com/startupgrowth/grayorange/misc/favicon.ico" type="image/vnd.microsoft.icon"/>
<title><?php echo $inp["title"]; ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo "css/font-awesome.css"; ?>" media="all"/>
<?php
for($i=0;false && $i<=8;$i++){
?>
<link type="text/css" rel="stylesheet" href="<?php echo "css/file".$i.".css"; ?>" media="all"/>
<?php
}
if(true){
?>
<link type="text/css" rel="stylesheet" href="css/file0.css" media="all"/>

<link type="text/css" rel="stylesheet" href="css/file1.css" media="all"/>
<link type="text/css" rel="stylesheet" href="css/file2.css" media="all"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" media="all"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" media="all"/>
<link type="text/css" rel="stylesheet" href="css/file5.css" media="all"/>

<!-- <link type="text/css" rel="stylesheet" href="http://demo.morethanthemes.com/startupgrowth/grayorange/sites/default/files/css/css_D8oxqRbRE-SBy_VOgqG96xXE7cqJ5vhN20VZ0Sp1smo.css" media="all"/>
 -->
<?php
csslink("css/file6.css");
?>


<link type="text/css" rel="stylesheet" href="css/file7.css" media="all"/>
<link type="text/css" rel="stylesheet" href="css/main.css" media="all"/>
<link type="text/css" rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" media="all"/>

<?php
}
?>

<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_0gj6QcpfRH2jzTbCQqf7kEkm4MXY0UA_sRhwPc8jC1o.js"></script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_msE2ES1FxGfnHoaUwxn6fU-7RaGvtiDsLxm3WPxeMRU.js"></script>

<script type="text/javascript">
    var tpj=jQuery;
    tpj.noConflict();
    
    tpj(document).ready(function($) { 

    if (tpj.fn.cssOriginal!=undefined)
        tpj.fn.css = tpj.fn.cssOriginal;

    
    var api = tpj(".fullwidthbanner").revolution({
        delay:"10000",
        startheight:500,
        startwidth: 1140,
        onHoverStop: "off"
    });
    
    api.bind("revolution.slide.onloaded",function (e,data) {
         jQuery(".tparrows.default").css("display", "block");
         jQuery(".tp-bullets").css("display", "block");
         jQuery(".tp-bannertimer").css("display", "block");
    });

});
//--><!]]>
</script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_xza51gRKd-DDm8ZutFDynCREGOzyWI6IOk-MIpwpULI.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) { 
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$("#toTop").addClass("show");	
			} else {
				$("#toTop").removeClass("show");
			}
		});
		
		$("#toTop").click(function() {
			$("body,html").animate({scrollTop:0},800);
		});	
		
		});
//--><!]]>
</script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/all/themes/startupgrowth/js/isotope/jquery.isotope.js?nlck8k"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) { 

	    var map;
	    var myLatlng;
	    var myZoom;
	    var marker;
		
		});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) { 

		if ($("#map-canvas").length) {
		
			myLatlng = new google.maps.LatLng(Drupal.settings.startupgrowth['google_map_latitude'], Drupal.settings.startupgrowth['google_map_longitude']);
			myZoom = 13;
			
			function initialize() {
			
				var mapOptions = {
				zoom: myZoom,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: myLatlng,
				scrollwheel: false
				};
				
				map = new google.maps.Map(document.getElementById(Drupal.settings.startupgrowth['google_map_canvas']),mapOptions);
				
				marker = new google.maps.Marker({
				map:map,
				draggable:true,
				position: myLatlng
				});
				
				google.maps.event.addDomListener(window, "resize", function() {
				map.setCenter(myLatlng);
				});
		
			}
		
			google.maps.event.addDomListener(window, "load", initialize);
			
		}
		
		});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) { 

			var	headerHeight = $("#header").height();
			$(window).scroll(function() {
			if(($(this).scrollTop() > headerHeight) && ($(window).width() > 767)) {
				$("body").addClass("onscroll");	
				$("body").css("paddingTop", (headerHeight)+"px");
				if( $(this).scrollTop() > headerHeight+40 ) {
				$("body").addClass("show");	
				}
			} else {
				$("body").removeClass("onscroll");
				$("body").removeClass("show");
				$("body").css("paddingTop", (0)+"px");
				$("body.logged-in").css("paddingTop", (64)+"px");
			}
			});
		});
//--><!]]>
</script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/all/themes/startupgrowth/js/meanmenu/jquery.meanmenu.min.js?nlck8k"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) {

			$("#main-navigation .sf-menu, #main-navigation .content>ul.menu, , #main-navigation ul.main-menu").wrap("<div class='meanmenu-wrapper'></div>");
/*
			$("#main-navigation .meanmenu-wrapper").meanmenu({
				meanScreenWidth: "767",
				meanRemoveAttrs: true,
				meanMenuContainer: "#header-inside",
				meanMenuClose: ""
			});

		});
*/
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) {

			$(window).load(function() {
				$("#highlighted-bottom-transparent-bg").css("backgroundColor", "rgba(255,255,255,0.8)");
			});

		});
//--><!]]>
</script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_pVx70STWSzS03iL2UOIgrKagSPyS-L8beybp_XAqDfo.js"></script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_yRXKjllCZKLJnznEs27fyXxmvuH5eo-vNFvWk-vpGOM.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/startupgrowth\/grayorange\/","pathPrefix":"","ajaxPageState":{"theme":"startupgrowth","theme_token":"Ti1Q89dFKHREnd6yHrSpdBRztdtWuBo3xCaOsIzGoic","js":{"0":1,"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.7\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/mtheader\/mtheader.js":1,"sites\/all\/modules\/mtheader\/js\/data.js":1,"sites\/all\/modules\/mtheader\/js\/jquery.ddslick.js":1,"sites\/all\/modules\/mtheader\/js\/color-switcher.js":1,"1":1,"sites\/all\/themes\/startupgrowth\/bootstrap\/js\/bootstrap.min.js":1,"2":1,"sites\/all\/themes\/startupgrowth\/js\/isotope\/jquery.isotope.js":1,"3":1,"https:\/\/maps.googleapis.com\/maps\/api\/js?v=3.exp\u0026sensor=false":1,"4":1,"5":1,"sites\/all\/themes\/startupgrowth\/js\/meanmenu\/jquery.meanmenu.min.js":1,"6":1,"7":1,"sites\/all\/libraries\/superfish\/supposition.js":1,"sites\/all\/libraries\/superfish\/superfish.js":1,"sites\/all\/libraries\/superfish\/supersubs.js":1,"sites\/all\/modules\/superfish\/superfish.js":1,"sites\/all\/themes\/startupgrowth\/js\/flexslider\/jquery.flexslider.js":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/js\/jquery.themepunch.plugins.min.js":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/js\/jquery.themepunch.revolution.min.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/comment\/comment.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/mtheader\/mtheader.css":1,"sites\/all\/modules\/mtheader\/color-switcher.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"http:\/\/netdna.bootstrapcdn.com\/font-awesome\/4.0.3\/css\/font-awesome.css":1,"\/\/netdna.bootstrapcdn.com\/font-awesome\/4.0.3\/css\/font-awesome.css":1,"sites\/all\/themes\/startupgrowth\/js\/isotope\/jquery.isotope.css":1,"sites\/all\/themes\/startupgrowth\/js\/meanmenu\/meanmenu.css":1,"sites\/all\/libraries\/superfish\/css\/superfish.css":1,"sites\/all\/themes\/startupgrowth\/bootstrap\/css\/bootstrap.css":1,"sites\/all\/themes\/startupgrowth\/js\/flexslider\/flexslider.css":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/css\/settings.css":1,"sites\/all\/themes\/startupgrowth\/style.css":1,"sites\/all\/themes\/startupgrowth\/style-gray-orange.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/lato-font.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/sourcecodepro-font.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/ptserif-blockquote-font.css":1,"sites\/all\/themes\/startupgrowth\/ie9.css":1,"sites\/all\/themes\/startupgrowth\/local.css":1}},"superfish":{"1":{"id":"1","sf":{"pathLevels":"0","delay":"200","animation":{"opacity":"show"},"speed":"\u0027fast\u0027","autoArrows":false,"dropShadows":false,"disableHI":false},"plugins":{"supposition":true,"bgiframe":false,"supersubs":{"minWidth":"15","maxWidth":"27","extraWidth":1}}}},"startupgrowth":{"google_map_latitude":"40.726576","google_map_longitude":"-74.046822","google_map_canvas":"map-canvas"}});
//--><!]]>
</script>
</head>

<?php
	}
	public static function page_top1(){
?>
<!DOCTYPE html>
<html  lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="http://demo.morethanthemes.com/startupgrowth/grayorange/misc/favicon.ico" type="image/vnd.microsoft.icon" />
  <meta name="HandheldFriendly" content="true" />
  <link rel="shortlink" href="/startupgrowth/grayorange/node/12" />
  <meta name="Generator" content="Drupal 7 (http://drupal.org)" />
  <link rel="canonical" href="/startupgrowth/grayorange/node/12" />
  <meta name="MobileOptimized" content="width" />
  <title>
   Second Service | STARTUP GROWTH
  </title>

  <style id="css-ddslick" type="text/css">
   .dd-select{ border-radius:2px; border:solid 1px #ccc; position:relative; cursor:pointer;}.dd-desc { color:#aaa; display:block; overflow: hidden; font-weight:normal; line-height: 1.4em; }.dd-selected{ overflow:hidden; display:block; padding:10px; font-weight:bold;}.dd-pointer{ width:0; height:0; position:absolute; right:10px; top:50%; margin-top:-3px;}.dd-pointer-down{ border:solid 5px transparent; border-top:solid 5px #000; }.dd-pointer-up{border:solid 5px transparent !important; border-bottom:solid 5px #000 !important; margin-top:-8px;}.dd-options{ border:solid 1px #ccc; border-top:none; list-style:none; box-shadow:0px 1px 5px #ddd; display:none; position:absolute; z-index:2000; margin:0; padding:0;background:#fff; overflow:auto;}.dd-option{ padding:10px; display:block; border-bottom:solid 1px #ddd; overflow:hidden; text-decoration:none; color:#333; cursor:pointer;-webkit-transition: all 0.25s ease-in-out; -moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;-ms-transition: all 0.25s ease-in-out; }.dd-options &gt; li:last-child &gt; .dd-option{ border-bottom:none;}.dd-option:hover{ background:#f3f3f3; color:#000;}.dd-selected-description-truncated { text-overflow: ellipsis; white-space:nowrap; }.dd-option-selected { background:#f6f6f6; }.dd-option-image, .dd-selected-image { vertical-align:middle; float:left; margin-right:5px; max-width:64px;}.dd-image-right { float:right; margin-right:15px; margin-left:5px;}.dd-container{ position:relative;}​ .dd-selected-text { font-weight:bold}​
  </style>


 </head>
<?php		
	}
	public static function bottom_js(){
		global $_ginfo;
?>
<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_0gj6QcpfRH2jzTbCQqf7kEkm4MXY0UA_sRhwPc8jC1o.js"></script>

<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_msE2ES1FxGfnHoaUwxn6fU-7RaGvtiDsLxm3WPxeMRU.js"></script>


<script type="text/javascript">


    var tpj=jQuery;
    tpj.noConflict();
    
    tpj(document).ready(function($) { 

    if (tpj.fn.cssOriginal!=undefined)
        tpj.fn.css = tpj.fn.cssOriginal;

    
    var api = tpj(".fullwidthbanner").revolution({
        delay:"10000",
        startheight:500,
        startwidth: 1140,
        onHoverStop: "off"
    });
    
    api.bind("revolution.slide.onloaded",function (e,data) {
         jQuery(".tparrows.default").css("display", "block");
         jQuery(".tp-bullets").css("display", "block");
         jQuery(".tp-bannertimer").css("display", "block");
    });

	});
</script>

<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_xza51gRKd-DDm8ZutFDynCREGOzyWI6IOk-MIpwpULI.js"></script>


<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) { 
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$("#toTop").addClass("show");	
			} else {
				$("#toTop").removeClass("show");
			}
		});
		
		$("#toTop").click(function() {
			$("body,html").animate({scrollTop:0},800);
		});	
		
		});
//--><!]]>
</script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/all/themes/startupgrowth/js/isotope/jquery.isotope.js?nlck88"></script>


<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) { 

	    var map;
	    var myLatlng;
	    var myZoom;
	    var marker;
		
		});
//--><!]]>
</script>



<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) { 

		if ( false && $("#map-canvas").length) {
		
			myLatlng = new google.maps.LatLng(Drupal.settings.startupgrowth['google_map_latitude'], Drupal.settings.startupgrowth['google_map_longitude']);
			myZoom = 13;
			
			function initialize() {
			
				var mapOptions = {
				zoom: myZoom,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: myLatlng,
				scrollwheel: false
				};
				
				map = new google.maps.Map(document.getElementById(Drupal.settings.startupgrowth['google_map_canvas']),mapOptions);
				
				marker = new google.maps.Marker({
				map:map,
				draggable:true,
				position: myLatlng
				});
				
				google.maps.event.addDomListener(window, "resize", function() {
				map.setCenter(myLatlng);
				});
		
			}
		
			google.maps.event.addDomListener(window, "load", initialize);
			
		}
		
		});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) { 

			var	headerHeight = $("#header").height();
			$(window).scroll(function() {
			if(($(this).scrollTop() > headerHeight) && ($(window).width() > 767)) {
				$("body").addClass("onscroll");	
				$("body").css("paddingTop", (headerHeight)+"px");
				if( $(this).scrollTop() > headerHeight+40 ) {
				$("body").addClass("show");	
				}
			} else {
				$("body").removeClass("onscroll");
				$("body").removeClass("show");
				$("body").css("paddingTop", (0)+"px");
				$("body.logged-in").css("paddingTop", (64)+"px");
			}
			});
		});
//--><!]]>
</script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/all/themes/startupgrowth/js/meanmenu/jquery.meanmenu.min.js?nlck88"></script>



<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) {

			$("#main-navigation .sf-menu, #main-navigation .content>ul.menu, , #main-navigation ul.main-menu").wrap("<div class='meanmenu-wrapper'></div>");
			$("#main-navigation .meanmenu-wrapper").meanmenu({
				meanScreenWidth: "767",
				meanRemoveAttrs: true,
				meanMenuContainer: "#header-inside",
				meanMenuClose: ""
			});

		});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function($) {

			$(window).load(function() {
				$("#highlighted-bottom-transparent-bg").css("backgroundColor", "rgba(255,255,255,0.8)");
			});

		});
//--><!]]>
</script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_pVx70STWSzS03iL2UOIgrKagSPyS-L8beybp_XAqDfo.js"></script>
<script type="text/javascript" src="startupgrowth/grayorange/sites/default/files/js/js_yRXKjllCZKLJnznEs27fyXxmvuH5eo-vNFvWk-vpGOM.js"></script>


<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/startupgrowth\/default\/","pathPrefix":"","ajaxPageState":{"theme":"startupgrowth","theme_token":"ipufQ9Msi6n-79SDwY6pITVo6InRJYjs4TUALzj5LQw","js":{"0":1,"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.7\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/mtheader\/mtheader.js":1,"sites\/all\/modules\/mtheader\/js\/data.js":1,"sites\/all\/modules\/mtheader\/js\/jquery.ddslick.js":1,"sites\/all\/modules\/mtheader\/js\/color-switcher.js":1,"1":1,"sites\/all\/themes\/startupgrowth\/bootstrap\/js\/bootstrap.min.js":1,"2":1,"sites\/all\/themes\/startupgrowth\/js\/isotope\/jquery.isotope.js":1,"3":1,"https:\/\/maps.googleapis.com\/maps\/api\/js?v=3.exp\u0026sensor=false":1,"4":1,"5":1,"sites\/all\/themes\/startupgrowth\/js\/meanmenu\/jquery.meanmenu.min.js":1,"6":1,"7":1,"sites\/all\/libraries\/superfish\/supposition.js":1,"sites\/all\/libraries\/superfish\/superfish.js":1,"sites\/all\/libraries\/superfish\/supersubs.js":1,"sites\/all\/modules\/superfish\/superfish.js":1,"sites\/all\/themes\/startupgrowth\/js\/flexslider\/jquery.flexslider.js":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/js\/jquery.themepunch.plugins.min.js":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/js\/jquery.themepunch.revolution.min.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/comment\/comment.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/mtheader\/mtheader.css":1,"sites\/all\/modules\/mtheader\/color-switcher.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"http:\/\/netdna.bootstrapcdn.com\/font-awesome\/4.0.3\/css\/font-awesome.css":1,"\/\/netdna.bootstrapcdn.com\/font-awesome\/4.0.3\/css\/font-awesome.css":1,"sites\/all\/themes\/startupgrowth\/js\/isotope\/jquery.isotope.css":1,"sites\/all\/themes\/startupgrowth\/js\/meanmenu\/meanmenu.css":1,"sites\/all\/libraries\/superfish\/css\/superfish.css":1,"sites\/all\/themes\/startupgrowth\/bootstrap\/css\/bootstrap.css":1,"sites\/all\/themes\/startupgrowth\/js\/flexslider\/flexslider.css":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/css\/settings.css":1,"sites\/all\/themes\/startupgrowth\/style.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/lato-font.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/sourcecodepro-font.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/ptserif-blockquote-font.css":1,"sites\/all\/themes\/startupgrowth\/ie9.css":1,"sites\/all\/themes\/startupgrowth\/local.css":1}},"superfish":{"1":{"id":"1","sf":{"pathLevels":"0","delay":"200","animation":{"opacity":"show"},"speed":"\u0027fast\u0027","autoArrows":false,"dropShadows":false,"disableHI":false},"plugins":{"supposition":true,"bgiframe":false,"supersubs":{"minWidth":"15","maxWidth":"27","extraWidth":1}}},"2":{"id":"2","sf":{"pathLevels":"0","delay":"200","animation":{"opacity":"show"},"speed":"\u0027fast\u0027","autoArrows":false,"dropShadows":false,"disableHI":false},"plugins":{"supposition":true,"bgiframe":false,"supersubs":{"minWidth":"15","maxWidth":"27","extraWidth":1}}}},"startupgrowth":{"google_map_latitude":"40.726576","google_map_longitude":"-74.046822","google_map_canvas":"map-canvas"}});
//--><!]]>
</script>


<script type="text/javascript">
		var fidx = "none";
		jQuery(document).ready(

			function($){

				$('#select-themes').ddslick({
				    data: ddData,
				    width: 300,
				    imagePosition: "left",
				    selectText: "Select your favorite theme",
				    onSelected: function (data) {
				        console.log(data);

				        data_copy = data;

				        $('#select-flavors').ddslick('destroy');

						$('#select-flavors').ddslick({
							data: ddDataFlavor[data.selectedData.value],
						    width: 300,
						    imagePosition: "left",
						    selectText: '<label class="dd-selected-text">Select one of the available flavors</label><small class="dd-selected-description dd-desc dd-selected-description-truncated">Each flavor is a combination of a color scheme <br />with a typographic style.</small>',
						    onSelected: function (data) {
						        console.log(data);
						        console.log("open url: " +  data.selectedData.value);
						        if (fidx == "none") //of the flavor id has not been set by the initializing process.
						        {
						        	//window.open("http://demo.morethanthemes.com/" + data_copy.selectedData.value + "/" + data.selectedData.value, '_blank');
						        	window.location = "http://demo.morethanthemes.com/" + data_copy.selectedData.value + "/" + data.selectedData.value;
						        }
						    }
						});

						if (fidx != "none"){
				        	$('#select-flavors').ddslick('select', {index: fidx});
				        	fidx = "none";
				        }else{
				        	window.location = "http://demo.morethanthemes.com/" + data_copy.selectedData.value + "/default/";
				        }
				    }
				});

				$('.toggle-button').click(
						function() {
							$("#demos-navigation").toggleClass("toggled");
      				$("#demos-navigation").slideToggle();
      				$("#demos-navigation-toggle").toggleClass("toggled");
              $("body").toggleClass("mttmenu-off");
							return false;
						}
				);

				function findIndex(key){
					v = 0;

					jQuery.each(ddData, function() {
						console.log(this);
					    if(this.value === key){
					    	console.log("index: " + v);
					    	return false; // We can break the $.each() loop at a particular iteration by making the callback function return false
					    }
					    v++;
					});

					return v;
				}

				function findFlavorIndex(theme, key){
					v = 0;
					jQuery.each(ddDataFlavor[theme], function() {
						console.log(this);
					    if(this.value === key){
					    	console.log("index: " + v);
					    	return false; // We can break the $.each() loop at a particular iteration by making the callback function return false
					    }
					    v++;
					});

					if (v >= ddDataFlavor[theme].length){
						v="none";
					}

					return v;
				}

				function get(name){
					   if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
					      return decodeURIComponent(name[1]);
				}

				function initialize(){
					idx  = findIndex("startupgrowth");
					fidx = findFlavorIndex("startupgrowth", "default");
					$('#select-themes').ddslick('select', {index: idx});
				}

				function initialize_colorswitcher(){
					var key = "startupgrowth";

					$.each(ddDataFlavor[key], function(i, item) {
    					console.log("Appending entry for item: " + item.text + "...");
    					if (item.backgroundColor!=null){
    						$(".color-switcher ul.styleChange").append('<li style="background: ' + item.backgroundColor + '"><a href="http://mojo.morethanthemes.com/startupgrowth/' + item.value + '">' + item.value + '</a></li>');
    					}
					});
				}

				var $navbarClass = ($('#demos-navigation').attr("class"));
				if ($navbarClass == "demo-morethanthemes-com"){
					//alert ($navbarClass);
					initialize();
				}

				if ($navbarClass == "mojo-morethanthemes-com"){
					initialize_colorswitcher();
				}



		});

	</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5988785-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
		jQuery(document).ready(function($) {

	    $(window).load(function() {

        $(".filters").fadeIn("slow");
        $(".filter-items").fadeIn("slow");
        var container = $(".filter-items"),
        filters= $(".filters");

        container.isotope({
            itemSelector: ".isotope-item",
            layoutMode : "sloppyMasonry",
            filter: "*"
        });

		$(".filters").prepend( "<li class=\"active\"><a href=\"#\" data-filter=\"*\">All</a></li>" );
        filters.find("a").click(function(){
            var $this = $(this);
            var selector = $this.attr("data-filter").replace(/\s+/g, "-");
            
            filters.find("li.active").removeClass("active");
            $this.parent().addClass("active");

            container.isotope({ filter: selector });
            return false;
        });

	    
	    });

		});
</script>
<?php
//popupalert(null);
//popupconfirm(null);

if(true){
?>
<script src="bootstrap-3.1.1-dist/js/jquery1.js" ></script>
<script src="bootstrap-3.1.1-dist/js/bootstrap.js" ></script>
<script src="bootstrap-3.1.1-dist/js/lib.js" ></script>
<script src="bootstrap-3.1.1-dist/js/mohit.js" ></script>
<script src="js/errorcodes.js" ></script>
<script src="js/mohitlib.js" ></script>
<script src="js/main.js" ></script>
<script type="text/javascript">


auto_reaload=5000;
cur_load_delay=auto_reaload;
function reload_chat(){
	if(cur_load_delay==auto_reaload)
		funcs.f7();
	else
		cur_load_delay=auto_reaload;
	setTimeout(reload_chat,auto_reaload);
}
<?php
if($_ginfo["isreloadchat"]){
?>
reload_chat();
<?php
}
?>

</script>

<?php		
}
	}
	public static function page_top2($inp=array()){
		$inp=Fun::mergeifunset($inp,array("title"=>"AHT"));
?>
<!DOCTYPE html>
<html>
 <head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="http://demo.morethanthemes.com/startupgrowth/default/misc/favicon.ico" type="image/vnd.microsoft.icon" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="Generator" content="Drupal 7 (http://drupal.org)" />
  <link rel="alternate" type="application/rss+xml" title="STARTUP GROWTH RSS" href="http://demo.morethanthemes.com/startupgrowth/default/rss.xml" />
  <title>
   <?php echo $inp["title"]; ?>
  </title>

  <link type="text/css" rel="stylesheet" href="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/css/css_7HXM1TUNtEhrTvVJGGyfGh1c8rtCinHRQ6q3wwuX304.css" media="all" />
  <link type="text/css" rel="stylesheet" href="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/css/css_w5hV80HUuubLL6CJquhNGew5InkLS7p4AJA_NSggqjM.css" media="all" />
  <link type="text/css" rel="stylesheet" href="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/css/css__MXlhjoYV57Y1qAmc9uzul9J16nVHnrp1-DcVqe-yi0.css" media="all" />
  <link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" media="all" />
  <link type="text/css" rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" media="all" />
  <link type="text/css" rel="stylesheet" href="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/css/css_32_DxQm6vJVeq5pX07oASwUotNTugqt1JmCGRe2ndE8.css" media="all" />
  <link type="text/css" rel="stylesheet" href="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/css/css_sfeOA_E0eGXsbQ3A7Rn2WTHtl_g53lIlIIg3rSlSPPo.css" media="all" />
  <link type="text/css" rel="stylesheet" href="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/css/css_6pmWsyBMs1PyYvGmZqZ5CIBPt3Fcyvx1Enk02CCbFlY.css" media="all" />
  <link type="text/css" rel="stylesheet" href="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/css/css_AbpHGcgLb-kRsJGnwFEktk7uzpZOCcBY74-YBdrKVGs.css" media="all" />


  <?php
  for($i=0;false && $i<8;$i++){
?>
  <link type="text/css" rel="stylesheet" href="css/file<?php echo $i; ?>.css" media="all" />
<?php    
  }

  ?>
		<link rel="stylesheet" type="text/css" href="css/lib.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script type="text/javascript">
		 	var HOST="<?php echo HOST; ?>";
		</script>
		
 </head>
<?php		
	}
	public static function page_header($myf=null){
		global $_ginfo;
?>
  <header id="header" role="banner" class="clearfix">
   <div class="container">
    <div id="header-inside" class="clearfix">
     <div class="row">
      <div class="col-md-4">
       <div id="header-inside-left" class="clearfix">
        <div id="logo">
         <a href="<?php echo HOST; ?>" title="Home" rel="home">
          <img src="startupgrowth/grayorange/sites/all/themes/startupgrowth/logo3.jpg" alt="Home" />
         </a>
        </div>
        <div id="site-name">
         <a href="<?php echo HOST; ?>" title="Home">
          AHT
         </a>
        </div>
        <div id="site-slogan">
         Internet's #1 Assignment Help Provider
        </div>
       </div>
      </div>
      <div class="col-md-8">
       <div id="header-inside-right" class="clearfix">
        <div id="search-area" class="clearfix">
         <div class="region region-search-area">
          <div id="block-block-19" class="block block-block clearfix">
           <div class="content">
            <form action="/startupgrowth/default/" method="post" id="search-block-form" accept-charset="UTF-8">
             <div>
              <div class="container-inline">
               <h2 class="element-invisible">
                Search form
               </h2>
               <div class="form-item form-type-textfield form-item-search-block-form">
                <input onblur="if (this.value == '') {this.value = 'Enter terms then hit Search...';}" onfocus="if (this.value == 'Enter terms then hit Search...') {this.value = '';}" type="text" id="edit-search-block-form--2" name="search_block_form" value="Enter terms then hit Search..." size="15" maxlength="128" class="form-text" />
               </div>
               <div class="form-actions form-wrapper" id="edit-actions">
                <input value="" type="submit" id="edit-submit" name="op" class="form-submit" />
               </div>
               <input type="hidden" name="form_build_id" value="form-RzB66fXBLl91lePhVru0jn6lsuYM28ZRNVyf6UbhuNQ" />
               <input type="hidden" name="form_id" value="search_block_form" />
              </div>
             </div>
            </form>
           </div>
          </div>
         </div>
        </div>
        <div id="main-navigation" class="clearfix  with-search-bar ">
         <nav role="navigation">
          <div class="region region-navigation">
           <div id="block-superfish-1" class="block block-superfish clearfix">
            <div class="content">
             <ul id="superfish-1" class="menu sf-menu sf-main-menu sf-horizontal sf-style-none sf-total-items-6 sf-parent-items-4 sf-single-items-2">




             <?php
             Disps::disp_services();
              if(!User::islogin()){
             ?>
              <li id="menu-530-1" class="middle even sf-depth-1 sf-no-children">
               <a href="<?php echo HOST."login.php"; ?>" title="" class="sf-depth-1">
                Sign In
               </a>
              </li>
              <?php
              }
              else{
              ?>
              <li id="menu-530-1" class="middle even sf-depth-1 sf-no-children">
               <a href="<?php echo HOST."notf.php"; ?>" title="" class="sf-depth-1">
                Notification
               </a>
              </li>
              <?php
              }
              ?>
              <?php
              Disps::disp_mymenu($myf);
              ?>

             </ul>
            </div>
           </div>
          </div>
         </nav>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </header>
<?php		
	}
	public static function page_footer(){
?>
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
<?php
popupalert(null);
popupconfirm(null);
	}
	public static function disp_menu($inp){
?>
              <li id="menu-895-1" class="middle even sf-depth-1 sf-total-children-6 sf-parent-children-3 sf-single-children-3 menuparent">
               <a href="<?php echo $inp['title']['link']; ?>" title="Features" class="sf-depth-1 menuparent">
                <?php echo $inp['title']['disp']; ?>
               </a>
               <ul>
               <?php
               	foreach($inp['list'] as $link=>$disp){
               	?>
                <li id="menu-1009-1" class="first odd sf-depth-2 sf-no-children">
                 <a href="<?php echo HOST.$link; ?>" class="sf-depth-2">
                  <?php echo $disp; ?>
                 </a>
                </li>
               	<?php
               	}
               ?>
               </ul>
              </li>
<?php
	}
	public static function disp_mymenu($myf=null){
		Disps::disp_menu(Funs::my_menu($myf));
	}
	public static function disp_assign_conv($aid){
?>
             	 <?php
             	 	$myconv=Help::assignconv($aid);
             	 	for($i=0;$i<count($myconv);$i++){
             	 ?>
             		<tr>
             			<td style="width:100px;" align=center >
	             			<div align="center" >
	             				<div style="overflow:hidden;border-radius:40px;height:80px;width:80px;" >
	             				<img src='<?php echo $myconv[$i]["profilepic"]; ?>'  width="80"  /><br>
	             				</div>
	             				<span style='' ><?php echo $myconv[$i]["name"]; ?></span>
	             			</div>
             			</td>
             			<td align=left style="border-bottom:solid gray 1px;border-top:solid gray 1px;" >
             				<div>
             					<div align="left"  ><span style="font-size:10px;color:gray;" ><?php echo Fun::timepassed(time()-$myconv[$i]["time"]); ?></span><br><span style='font-size:11px;display:none;' >Can be seen by </span><?php if(User::loginType()=='a') echo Funs::canbeseen($myconv[$i]["rtype"],$myconv[$i]["type"]); ?></div>
             				[<?php echo User::accountNames($myconv[$i]["type"]); ?>]: <?php echo Fun::smilymsg($myconv[$i]["content"]); ?>
             				</div>
             			</td>
             		</tr>
             		<?php
             		 }
             		?>

<?php		
	}
	public static function disp_menu_tags($inp,$add=array()){
		$add=Fun::mergeifunset($add,array("styleli"=>"","stylea"=>"","opentab"=>"openmytab"));//padding-left:3px;padding-right:3px;
  if(false && "This is example input" ){
    $inp=array(
     "selected"=>"comments",
     "list"=>array(
      "comments"=>"Comments",
      "bidding"=>"Bidding"
      )
     );
   }


?>
    <ul class="quicktabs-tabs quicktabs-style-nostyle">
    <?php
     foreach($inp["list"] as $id=>$name){
    ?>
     <li class="<?php echo ($id==$inp["selected"]?"active":""); ?>" style="list-style-type: none;<?php echo $add["styleli"]; ?>" >
      <a  class="active quicktabs-loaded jquery-once-2-processed" data-mytab="<?php echo $id; ?>" onclick="a.<?php echo $add["opentab"]; ?>(this);" style="<?php echo $add["stylea"]; ?>" >
       <?php echo $name; ?>
      </a>
     </li>
     <?php
     }
     ?>
    </ul>
<?php		
	}
 public static function disp_assign_conv_t2($myf,$aid){
?>
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div class="view-content">
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-12 col-md-12">
              <table class="p10px" border="0" id="assignmentcomments"  >
               <tr>
                <td style="width:100px;" align=center >
                 <div align="center" >
	 				<div style="overflow:hidden;border-radius:40px;height:80px;width:80px;" >
		 				<img src='<?php echo $myf["profilepic"]; ?>'  width="80"  /><br>
	 				</div>



                  <span style='' ><?php echo $myf["name"]; ?></span>
                 </div>
                </td>
                <td align=left style="border-bottom:solid gray 1px;border-top:solid gray 1px;" >
                 <div style="" >
                  <textarea placeholder="Comment Here." id="assignment_reply" ></textarea>
                 </div>
                 <div  >
                 <?php
                  $mallow=Funs::msgallow();
                  foreach($mallow as $i=>$rtype){
                  ?>
                  <button onclick="button.sendreq_v2(this);" type="button" data-action="msg" data-rtype="<?php echo $rtype; ?>"  data-aid="<?php echo $aid; ?>" data-eparams="{'content':$('#assignment_reply').val()};" class="mybutton" data-res="$('#assignment_reply').val('');button.sendreq_v2_t3({'aid':'<?php echo $aid; ?>','action':'conv'},null,funcs.f3)"  >Send to <?php echo User::accountNames($rtype); ?></button>
                  <?php
                  }
                 ?>
                 </div>
                </td>
               </tr>
               <?php
                Disps::disp_assign_conv($aid);
               ?>
              </table>
              <?php
              ?>
             </div>
            </div>
           </div>
          </div>
<?php  
 }
	public static function disp_bidding_conv($aid,$ainfo){
?>
             	 <?php
             	 	$myconv=Help::assignbidding($aid);
             	 	for($i=0;$i<count($myconv);$i++){
             	 ?>
             		<tr>
             			<td style="width:100px;" align=center >
	             			<div align="center" >
	             				<img src='<?php echo $myconv[$i]["profilepic"]; ?>' class="img-circle" width="80" /><br>
	             				<span style='' ><?php echo $myconv[$i]["name"]; ?></span>
	             			</div>
             			</td>
             			<td align=left style="border-bottom:solid gray 1px;border-top:solid gray 1px;" >
             				<div>
             					<div align="left"  ><span style="font-size:10px;color:gray;" ><?php echo Fun::timepassed(time()-$myconv[$i]["time"]); ?></span><br></div>
             					<?php
             						if($myconv[$i]["btype"]=="a"){
             						?>
             				[ Admin ] : 
             						<?php
             						}
             						else{
             					?>
             				[ $<?php echo $myconv[$i]["price"]; ?> ]
             				<?php
             								}
             				?>

             				&nbsp;&nbsp;&nbsp;&nbsp; 


             				<?php echo Fun::smilymsg($myconv[$i]["content"]); ?>
             				<?php
             					if(User::isloginas('a') && $myconv[$i]["btype"]=='e'){
             				?>
	             				<br>
	             				<button class='mybutton' onclick="button.sendreq(this);" data-action="assign_exp" data-aid="<?php echo $aid; ?>" data-eid="<?php echo $myconv[$i]["uid"]; ?>" data-res="obj.disabled=true;obj.innerHTML='Assigned';" ><?php echo ($myconv[$i]["uid"]!=$ainfo["expid"])?"Assign him":"Assigned"; ?></button>
             				<?php
             					}
             				?>
             				</div>
             			</td>
             		</tr>
             		<?php
             		 }
             		?>

<?php		
	}
 public static function disp_bidding_conv_t2($myf,$aid,$ainfo){
?>
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div class="view-content">
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-12 col-md-12">
             	Be part of bidding
              <table class="p10px" border="0" id="assignmentbidding"  >
               <tr>
                <td style="width:100px;" align=center >
                 <div align="center" >
                  <img src='<?php echo $myf["profilepic"]; ?>' class="img-circle" width="80" /><br>
                  <span style='' ><?php echo $myf["name"]; ?></span>
                 </div>
                </td>



                <td align=left style="border-bottom:solid gray 1px;" >
                	<?php
                		if(User::isloginas('e')){
                	?>
			               <div style="font-size:25px;border:solid gray 1px;border-radius:5px;margin-bottom:5px;width:240px;float:left;margin-right:10px;" >
			                $<input type="text" style="border:solid gray 0px;padding:5px;margin:5px;font-size:25px;width:200px;" placeholder="Your Price" id="biddingprice"  >
			               </div>
			               <div style="float:left;" >
			               	<button onclick="button.sendreq_v2(this);" type="button" data-action="bidding"   data-aid="<?php echo $aid; ?>" data-eparams="{'content':$('#bidding_reply').val(),'price':$('#biddingprice').val()};" class="mybutton" data-res="$('#bidding_reply').val('');$('#biddingprice').val('');button.sendreq_v2_t3({'aid':'<?php echo $aid; ?>','action':'bidding'},null,function(d){funcs.f4(d,'assignmentbidding');} )"  ><?php echo (User::isloginas('a')?"Reply":"Bid"); ?></button>
			               </div>
			               <?php
			               clear();
			               ?>
		                 <div style="" >
		                  <textarea placeholder="Want to Say anything ?" id="bidding_reply" ></textarea>
		                 </div>
                	<?php
                		}
                		else if(User::isloginas('a')){
                			opent("input",array("id"=>"biddingprice","type"=>"hidden","value"=>""));
                	?>

                <div style="" >
                 <textarea placeholder="Want to Say anything ?" id="bidding_reply" ></textarea>
                </div>
	               <div style="" >
	               	<button onclick="button.sendreq_v2(this);" type="button" data-action="bidding"   data-aid="<?php echo $aid; ?>" data-eparams="{'content':$('#bidding_reply').val(),'price':$('#biddingprice').val()};" class="mybutton" data-res="$('#bidding_reply').val('');$('#biddingprice').val('');button.sendreq_v2_t3({'aid':'<?php echo $aid; ?>','action':'bidding'},null,function(d){funcs.f4(d,'assignmentbidding');} )"  ><?php echo (!User::isloginas('a')?"Bid":"Reply"); ?></button>
	               </div>
                	<?php
                		}
                	?>
                </td>
               </tr>
               <?php
                Disps::disp_bidding_conv($aid,$ainfo);
               ?>
              </table>
              <?php
              ?>
             </div>
            </div>
           </div>
          </div>
<?php  
 }
 public static function disp_assignlistelm_expert($inp){
 	global $_ginfo;
?>
	 <article id="node-15" class="node node-blog node-teaser clearfix"  style='' >
	  <div class="post-submitted-info">
	   <div class="submitted-date">
	    <div class="month">
	     <?php echo date("M",$inp["time"]); ?>
	    </div>
	    <div class="day">
	     <?php echo date("j",$inp["time"]); ?>
	    </div>
	    <div class="year">
	     <?php echo date("Y",$inp["time"]); ?>
	    </div>
	   </div>
	   <div class="comments-count">
	    <i class="fa fa-comment">
	    </i>
	    <div class="comment-counter"><?php echo (User::isloginas('u') ?$inp["numcomment"]:$inp["numbid"]); ?></div>
	   </div>
	  </div>
	  <div class="node-main-content custom-width">
	   <header>
	    <h2>
	     <a href="<?php echo HOST."assignment.php?aid=".$inp["id"]; ?>">
	      <?php echo $_ginfo["subjects"][$inp["subject"]].(User::isloginas('e')? "  ( $ ".$inp["myprice"]." )  ":"") ; ?>
	     </a>
	    </h2>
	    <div class="submitted-user">
	     <?php echo Fun::timepassed(time()-$inp["time"]); ?>,
	    </div>
	   </header>
	   <div class="content">
	       <p style="margin-top:-10px;" ><?php echo Fun::smilymsg($inp["content"]); ?>
	       	<br><?php 
	       		if($inp["ufile"]!=""){
	       			ocloset("a","PFA",array("href"=>HOST.$inp["ufile"]));
	       		}
	       	  ?>
	       </p>
	   </div>
	  </div>
	 </article>
	 <hr>
<?php 	
 }
 public static function choose_subjects_popup($inp=array()){
 	global $_ginfo;
	$tabs=array("list"=>array(),"tabid"=>array());
	$tabid=0;
	foreach($_ginfo["subjtree"] as $i=>$val){
	  $tabs["list"]["mainsubj_".$tabid]=$i;
	  $tabs["tabid"][]=$i;
	  $tabid++;
	}
	$tabs["selected"]="mainsubj_0";

?>
<div id="block-quicktabs-sidebar-tabs" class="block block-quicktabs clearfix" style="border-color:solid gray 1px;" >
 <div class="content">
  <div id="quicktabs-sidebar_tabs" class="quicktabs-wrapper quicktabs-style-nostyle jquery-once-1-processed">
   <div class="item-list" style="font-size:12px;" >
<?php
	Disps::disp_menu_tags($tabs,array("stylea"=>"padding-left:3px;padding-right:3px;","opentab"=>"openmytab_t2"));
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
        $tlist=$_ginfo['subjtree'][$tabs["tabid"][$tabno]];
        for($j=0;$j<2;$j++){
          opent("div",array("style"=>"float:left;"));
          opent("ui");
          for($i=($j==0?0:(count($tlist)+1)/2);$i<($j==0?count($tlist)/2:count($tlist));$i++){
          ?>
          <li class="box" data-value="<?php echo $tlist[$i][0]; ?>" >
            <?php echo $tlist[$i][1]; ?>
          </li>
          <?php
          }
          closet("ui");
          closet("div");
        }
        clear();
      closet("div");
      $tabno++;
     }
    }

    	?>
    </div>
</div></div></div></div>
<?php 	
 }
 public static function disp_chat(){
?>
<div style="position:fixed;bottom:0px;right:100px;width:300px;border:solid gray 1px;z-index:100000;background-color:#dddddd;" >
	<div style="cursor:pointer;height:40px;background-color:#aaaaaa;padding:8px;font-size:18px;" onclick="$('#hiddensection').slideToggle();" >
		Customer Support
	</div>
	<div style="<?php  echo User::isloginas('a') ? "":"display:none;"; ?>" id="hiddensection" >
		<div style="height:280px;overflow-y:scroll;" id="dispmsgdiv" >
			<?php
				Disps::disp_chat_list(0);
			?>
		</div>
		<div>
			<textarea id="chatmsg"  placeholder="Write Message Here."  style="resize:none;width:100%;border:solid red 0px;margin-bottom:5px;padding:5px;background-color:#eeeeee;" ></textarea>
			<button onclick="button.sendreq_v2(this);" data-action="sendchatmsg" data-eparams="{'msg':$('#chatmsg').val() }" data-res="funcs.f6(data);funcs.f7();cur_load_delay=0;" >Send</button><button>End Conversation</button>
		</div>
	</div>
</div>
<?php
 }
 public static function disp_chat_list($msgid=0){
 	$allmsg=Help::mymsglist($msgid);
// 	$allmsg=array();
 	foreach($allmsg as $i=>$row){
 		$float=($row["stype"]==User::loginType())?"right":"left";
?>
		<div data-msgid="<?php echo $row["id"]; ?>" >
			<div style="float:<?php echo $float; ?>;" class="msgdiv" ><?php echo Fun::smilymsg($row["msg"]); ?></div>
			<div style="clear:both;" ></div>
		</div>
<?php 	
	}
 }
 public static function assign_submitting_form1($inp=array()){
 	$inp=Fun::mergeifunset($inp,array("page"=>"index"));
?>
   <div id="top-content" class="clearfix" <?php if($inp["page"]=="index"){ ?>style="z-index:100;position:absolute;top:120px;left:10px;padding:0px;" <?php } ?> >
    <div class="container" style="" > 
     <div id="top-content-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-top-content">
         <div id="block-views-benefits-block" class="block block-views clearfix">
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div class="view-content">
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-6"  <?php if($inp["page"]=="index"){ ?>style="background:rgba(0,0,0,0.4);" <?php } ?> >
              <div id="main" class="clearfix"  >
               <div class="title" id="page-title" style="font-size:35px;font-weight:700;color:white;" >
                Submit Homework Questions here.
               </div>
               <div style="color:white;" >
                Everything you provide us will be confidential. so chill.
               </div>
                    <?php
//                    Disps::choose_subjects_popup();
                    ?>
                     <form class="webform-client-form" enctype="multipart/form-data"  method="post" id="webform-client-form-22" accept-charset="UTF-8">
                      <div style="display:non" id="page1" >
                       <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                        <label for="edit-submitted-name" style="color:white;" >
                         Choose Topic
                        </label>
                        <select name="csubject" style="font-size:14px;" >
                         <optgroup style="margin-left:10px;" label="SCIENCE/MATH"><option value="2">Physics</option><option value="3">Chemistry</option><option value="4">Science</option><option value="5">Earth Science</option><option value="6">Biology</option><option value="7">Mathematics</option><option value="8">Advance Mathematics</option><option value="9">Algebra</option><option value="10">History</option></optgroup><optgroup style="margin-left:10px;" label="ACCOUNTING"><option value="12">Accounting Basics</option><option value="13">Cost Accounting</option><option value="14">Financial Accounting</option><option value="15">Managerial Accounting</option><option value="16">Accounting Standards</option><option value="17">Auditing</option><option value="18">Taxation</option></optgroup><optgroup style="margin-left:10px;" label="FINANCE"><option value="20">Finance Basics</option><option value="21">Corporate Finance</option><option value="22">Risk Management</option><option value="23">Financial Management</option><option value="24">Financial Econometrics</option><option value="25">Portfolio Management</option><option value="26">Business Law and Ethics</option></optgroup><optgroup style="margin-left:10px;" label="ECONOMICS"><option value="28">Microeconomics</option><option value="29">Macroeconomics</option><option value="30">Business Economics</option><option value="31">Econometrics</option><option value="32">International Economics</option><option value="33">Managerial Economics</option><option value="34">Game Theory</option><option value="35">Public Economics</option></optgroup><optgroup style="margin-left:10px;" label="STATISTICS"><option value="37">Basic Statistics</option><option value="38">Applied Statistics</option><option value="39">Advanced Statistics</option><option value="40">Sampling Theory</option><option value="41">Descriptive Statistics</option><option value="42">Central Tendency</option><option value="43">Hypothesis Testing</option><option value="44">ANOVA</option><option value="45">Time Series Analysis</option><option value="46">Operational Research</option><option value="47">Stochastic Processes</option><option value="48">Others</option></optgroup><optgroup style="margin-left:10px;" label="MANAGEMENT"><option value="50">Management Theories</option><option value="51">Operation Management</option><option value="52">HR Management</option><option value="53">Project Management</option><option value="54">Business Management</option><option value="55">Operation Research</option><option value="56">Supply Chain Management</option><option value="57">Marketing Management</option><option value="58">Marketing Research</option><option value="59">Strategic Management</option><option value="60">Management Information  System</option><option value="61">Other Management</option></optgroup><optgroup style="margin-left:10px;" label="ENGINEERING"><option value="63">Biotechnology</option><option value="64">Civil Engineering</option><option value="65">Chemical Engineering</option><option value="66">Computer Science Engineering</option><option value="67">Electrical Engineering</option><option value="68">Electronics</option><option value="69">Engineering Mathematics</option><option value="70">Engineering Physics</option><option value="71">Information Technology</option><option value="72">Textile</option><option value="73">Mechanical Engineering</option><option value="74">Other Engineering</option></optgroup><optgroup style="margin-left:10px;" label="COMPUTER SCIENCE"><option value="76">Artificial Intelligence</option><option value="77">Basic Computer Science</option><option value="78">Computer Graphics</option><option value="79">Computer Networking</option><option value="80">Data Structure &amp; Algorithms</option><option value="81">Database Management System</option><option value="82">Operating System</option><option value="83">Software Engineering</option><option value="84">Theory of Computation</option><option value="85">Computer Network Security</option></optgroup><optgroup style="margin-left:10px;" label="PROGRAMING"><option value="87">C/C++ Programming</option><option value="88">JAVA Programming</option><option value="89">DOT NET Programming</option><option value="90">Assembly Language</option><option value="91">Python Programming</option><option value="92">COBOL Programming</option><option value="93">Visual Basic Programming</option><option value="94">PHP Web Programming</option><option value="95">PL-SQL Programming</option><option value="96">Programming Languages</option></optgroup><optgroup style="margin-left:10px;" label="MATLAB"><option value="98">Basic MATLAB Programming</option><option value="99">MATLAB in Mathematics</option><option value="100">MATLAB in Statistics</option><option value="101">MATLAB in Engineering</option><option value="102">Simulation in MATLAB</option></optgroup><optgroup style="margin-left:10px;" label="WEB DEVELOPMENT"><option value="104">PHP</option><option value="105">MySQL</option><option value="106">Javascript</option><option value="107">CSS</option><option value="108">HTML</option><option value="109">HTML-5</option><option value="110">Ajax</option></optgroup><optgroup style="margin-left:10px;" label="OPEN SOURCE"><option value="112">Unix/Linux/GNU</option></optgroup><optgroup style="margin-left:10px;" label="CMS"><option value="131">Drupal</option><option value="132">Joomla</option><option value="133">Wordpress</option></optgroup><optgroup style="margin-left:10px;" label="GENERAL"><option value="115">Case Study</option><option value="116">English</option><option value="117">History</option><option value="118">Human Resource</option><option value="119">Humanities</option><option value="120">Law</option><option value="121">Medical Science</option><option value="122">Nursing</option><option value="123">Physiology</option><option value="124">Political Science</option><option value="125">Psychology</option><option value="126">Religion</option><option value="127">Social Science</option><option value="128">Sociology</option><option value="129">Solidworks</option><option value="130">Term Paper</option></optgroup>
                        </select>
                       </div>
                       <div class="form-item webform-component webform-component-textarea" id="webform-component-message">
                        <label for="edit-submitted-message" style="color:white;" >
                         Assignment
                        </label>
                        <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                         <textarea placeholder="Paste Your Assignment" id="edit-submitted-message" name="question" cols="60" rows="6" class="form-textarea required" style="font-size:14px;" ></textarea>
                         <div class="grippie">
                         </div>
                        </div>
                       </div>
                       <div class="form-actions form-wrapper" id="edit-actions">
                        <img src="photo/icons/attach1.png" style="float:left;cursor:pointer;" onclick="uploadfile(this);" />
                        <div id="uploadfilenamemain" style="float:left;margin-left:20px;margin-top:5px;" ></div>
                        <input id="edit-submit" value="Submit" class="form-submit" type="button" style="float:right;margin-top:0px;" onclick="hideshowdown('page1','page2');"  />
                        <div style="clear:both;"></div>
                       </div>
                      </div>
                      <div id="page2" style="display:none;" >
                       <div class="form-item webform-component webform-component-email" style="float:left;width:48%;" >
                       <label for="edit-submitted-email">Deadline</label>
                       <input class="email form-text form-email required" placeholder="Deadline in same format" id="edit-submitted-email" name="deadline" size="60" value="<?php echo Fun::timetostr(time()+2*3600*24); ?>" >
                       </div>
                       <div class="form-item webform-component webform-component-email" style="float:right;width:48%;" >
                       <label for="edit-submitted-email">Quotes in $</label>
                       <input class="email form-text form-email required" placeholder="Quotes Ex: 50" type="text" id="edit-submitted-email" name="quote" size="60"  value="50">
                       </div>
                       <?php clear(); ?>

                       <div class="form-actions form-wrapper" id="edit-actions">
                        <img src="photo/icons/left_arrow.png" style="float:left;cursor:pointer;" onclick="hideshowdown('page2','page1');"  />
                        <div id="uploadfilenamemain" style="float:left;margin-left:20px;margin-top:5px;" ></div>
                        <input id="edit-submit" value="Submit" class="form-submit" type="submit" style="float:right;margin-top:0px;"  />
                        <div style="clear:both;"></div>
                       </div>
                      </div>
                     </form>
              </div>
             </div>
             <div class="views-row views-row-2 views-row-even col-sm-6 col-md-6" style="display:none;" >
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
 public static function assign_submitting_form($inp=array()){
 	$inp=Fun::mergeifunset($inp,array("page"=>"index"));
?>
   <div id="top-content" class="clearfix" <?php if($inp["page"]=="index"){ ?>style="z-index:100;position:absolute;top:100px;left:10px;padding:0px;" <?php } ?> >
    <div class="container" style="" > 
     <div id="top-content-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-top-content">
         <div id="block-views-benefits-block" class="block block-views clearfix">
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div class="view-content">
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-6"  <?php if($inp["page"]=="index"){ ?>style="background:rgba(0,0,0,0.4);" <?php } ?> >
              <div id="main" class="clearfix"  >
               <div class="title" id="page-title" style="font-size:35px;font-weight:700;color:white;" >
                Submit Homework Questions here.
               </div>
               <div style="color:white;" >
                Everything you provide us will be confidential. so chill.
               </div>
                    <?php
//                    Disps::choose_subjects_popup();
                    ?>
                     <form class="webform-client-form" enctype="multipart/form-data"  method="post" id="webform-client-form-22" accept-charset="UTF-8">
                      <div style="display:non" id="page1" >
                       <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                        <label for="edit-submitted-name" style="color:white;" >
                         Select Subject or Topic
                        </label>
                        <select name="csubject" style="font-size:14px;" >
                         <optgroup style="margin-left:10px;" label="SCIENCE/MATH"><option value="2">Physics</option><option value="3">Chemistry</option><option value="4">Science</option><option value="5">Earth Science</option><option value="6">Biology</option><option value="7">Mathematics</option><option value="8">Advance Mathematics</option><option value="9">Algebra</option><option value="10">History</option></optgroup><optgroup style="margin-left:10px;" label="ACCOUNTING"><option value="12">Accounting Basics</option><option value="13">Cost Accounting</option><option value="14">Financial Accounting</option><option value="15">Managerial Accounting</option><option value="16">Accounting Standards</option><option value="17">Auditing</option><option value="18">Taxation</option></optgroup><optgroup style="margin-left:10px;" label="FINANCE"><option value="20">Finance Basics</option><option value="21">Corporate Finance</option><option value="22">Risk Management</option><option value="23">Financial Management</option><option value="24">Financial Econometrics</option><option value="25">Portfolio Management</option><option value="26">Business Law and Ethics</option></optgroup><optgroup style="margin-left:10px;" label="ECONOMICS"><option value="28">Microeconomics</option><option value="29">Macroeconomics</option><option value="30">Business Economics</option><option value="31">Econometrics</option><option value="32">International Economics</option><option value="33">Managerial Economics</option><option value="34">Game Theory</option><option value="35">Public Economics</option></optgroup><optgroup style="margin-left:10px;" label="STATISTICS"><option value="37">Basic Statistics</option><option value="38">Applied Statistics</option><option value="39">Advanced Statistics</option><option value="40">Sampling Theory</option><option value="41">Descriptive Statistics</option><option value="42">Central Tendency</option><option value="43">Hypothesis Testing</option><option value="44">ANOVA</option><option value="45">Time Series Analysis</option><option value="46">Operational Research</option><option value="47">Stochastic Processes</option><option value="48">Others</option></optgroup><optgroup style="margin-left:10px;" label="MANAGEMENT"><option value="50">Management Theories</option><option value="51">Operation Management</option><option value="52">HR Management</option><option value="53">Project Management</option><option value="54">Business Management</option><option value="55">Operation Research</option><option value="56">Supply Chain Management</option><option value="57">Marketing Management</option><option value="58">Marketing Research</option><option value="59">Strategic Management</option><option value="60">Management Information  System</option><option value="61">Other Management</option></optgroup><optgroup style="margin-left:10px;" label="ENGINEERING"><option value="63">Biotechnology</option><option value="64">Civil Engineering</option><option value="65">Chemical Engineering</option><option value="66">Computer Science Engineering</option><option value="67">Electrical Engineering</option><option value="68">Electronics</option><option value="69">Engineering Mathematics</option><option value="70">Engineering Physics</option><option value="71">Information Technology</option><option value="72">Textile</option><option value="73">Mechanical Engineering</option><option value="74">Other Engineering</option></optgroup><optgroup style="margin-left:10px;" label="COMPUTER SCIENCE"><option value="76">Artificial Intelligence</option><option value="77">Basic Computer Science</option><option value="78">Computer Graphics</option><option value="79">Computer Networking</option><option value="80">Data Structure &amp; Algorithms</option><option value="81">Database Management System</option><option value="82">Operating System</option><option value="83">Software Engineering</option><option value="84">Theory of Computation</option><option value="85">Computer Network Security</option></optgroup><optgroup style="margin-left:10px;" label="PROGRAMING"><option value="87">C/C++ Programming</option><option value="88">JAVA Programming</option><option value="89">DOT NET Programming</option><option value="90">Assembly Language</option><option value="91">Python Programming</option><option value="92">COBOL Programming</option><option value="93">Visual Basic Programming</option><option value="94">PHP Web Programming</option><option value="95">PL-SQL Programming</option><option value="96">Programming Languages</option></optgroup><optgroup style="margin-left:10px;" label="MATLAB"><option value="98">Basic MATLAB Programming</option><option value="99">MATLAB in Mathematics</option><option value="100">MATLAB in Statistics</option><option value="101">MATLAB in Engineering</option><option value="102">Simulation in MATLAB</option></optgroup><optgroup style="margin-left:10px;" label="WEB DEVELOPMENT"><option value="104">PHP</option><option value="105">MySQL</option><option value="106">Javascript</option><option value="107">CSS</option><option value="108">HTML</option><option value="109">HTML-5</option><option value="110">Ajax</option></optgroup><optgroup style="margin-left:10px;" label="OPEN SOURCE"><option value="112">Unix/Linux/GNU</option></optgroup><optgroup style="margin-left:10px;" label="CMS"><option value="131">Drupal</option><option value="132">Joomla</option><option value="133">Wordpress</option></optgroup><optgroup style="margin-left:10px;" label="GENERAL"><option value="115">Case Study</option><option value="116">English</option><option value="117">History</option><option value="118">Human Resource</option><option value="119">Humanities</option><option value="120">Law</option><option value="121">Medical Science</option><option value="122">Nursing</option><option value="123">Physiology</option><option value="124">Political Science</option><option value="125">Psychology</option><option value="126">Religion</option><option value="127">Social Science</option><option value="128">Sociology</option><option value="129">Solidworks</option><option value="130">Term Paper</option></optgroup>
                        </select>
                       </div>
                       <div style="margin-top:-15px;" ></div>
                       <div class="form-item webform-component webform-component-textarea" id="webform-component-message">
                        <label for="edit-submitted-message" style="color:white;" >
                         Assignment
                        </label>
                        <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                         <textarea placeholder="Assignment Details or Description" id="edit-submitted-message" name="question" cols="60" rows="3" class="form-textarea required" style="font-size:14px;" ></textarea>
                         <div class="grippie">
                         </div>
                        </div>
                       </div>
                       <div style="margin-top:-35px;" ></div>
                       <div class="form-item webform-component webform-component-email" style="float:left;width:48%;" >
                       <label for="edit-submitted-email" style="color:white;" >Deadline</label>
                       <input class="email form-text form-email required" placeholder="Deadline in same format" id="edit-submitted-email" name="deadline" size="60" value="<?php echo Fun::timetostr(time()+2*3600*24); ?>" style="height:35px;padding:3px;" >
                       </div>
                       <div class="form-item webform-component webform-component-email" style="float:right;width:48%;" >
                       <label for="edit-submitted-email" style="color:white;" >Expected price(in $)</label>
                       <input class="email form-text form-email required" placeholder="Quotes Ex: 50" type="text" id="edit-submitted-email" name="quote" size="60"  value="50" style="height:35px;padding:3px;" >
                       </div>
                       <?php clear(); ?>
                       <div class="form-actions form-wrapper" id="edit-actions">
                        <img src="photo/icons/attach1.png" style="float:left;cursor:pointer;" onclick="uploadfile(this);" />
                        <div id="uploadfilenamemain" style="float:left;margin-left:20px;margin-top:5px;" ></div>
                        <input id="edit-submit" value="Get Answer" class="form-submit" type="submit" style="float:right;margin-top:0px;"  />
                        <div style="clear:both;"></div>
                       </div>
                      </div>
                     </form>
              </div>
             </div>
             <div class="views-row views-row-2 views-row-even col-sm-6 col-md-6" style="display:none;" >
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
 public static function disp_form_elm($inp){
 	$inp=Fun::mergeifunset($inp,array("type"=>"text","ph"=>"","name"=>"","label"=>"","value"=>""));
?>
   <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
    <label for="edit-submitted-name">
     <?php
     	echo $inp["label"];
     ?>
    </label>
    <input placeholder="<?php echo $inp["ph"]; ?>" id="edit-submitted-name" name="<?php echo $inp["name"]; ?>" value="<?php echo $inp["value"]; ?>"  class="form-text required" type="<?php echo $inp["type"]; ?>">
   </div>
<?php
 }
 public static function disp_notf($inp){
 	global $_ginfo;
?>
	 <article id="node-15" class="node node-blog node-teaser clearfix"  style='' >
	  <div class="post-submitted-info">
	   <div class="submitted-date">
	    <div class="month">
	     <?php echo date("M",$inp["time"]); ?>
	    </div>
	    <div class="day">
	     <?php echo date("j",$inp["time"]); ?>
	    </div>
	    <div class="year">
	     <?php echo date("Y",$inp["time"]); ?>
	    </div>
	   </div>
	  </div>
	  <div class="node-main-content custom-width">
	   <header>
	    <h2>
	     <a href="<?php echo $inp["url"]; ?>">
	      <?php echo $_ginfo["notftype"][0+$inp["notftype"]]; ?>
	     </a>
	    </h2>
	    <div class="submitted-user">
	     <?php echo Fun::timepassed(time()-$inp["time"]); ?>,
	    </div>
	   </header>
	   <div class="content">
	       <p style="margin-top:-10px;" ><?php echo Fun::smilymsg($inp["content"]); ?>
	   </div>
	  </div>
	 </article>
	 <hr>
<?php 	
 }
 public static function disp_admin_chatting_list(){
	$allthread=Sql::getArray("select chatting1.*,users.name from (select * from chatting order by id desc) chatting1 left join users on users.id=chatting1.sid group by thid order by time desc ");
?>
<?php
foreach($allthread as $i=>$row){
?>
<a href="<?php echo HOST."chatting.php?thid=".$row["thid"]; ?>" >
<div class="msgdiv1" style="<?php echo ($row["stype"]!='a' ? "font-weight:600;":""); ?>" ><?php echo Fun::smilymsg($row["msg"]); ?></div>
</a>
<?php
}
?>
<?php
 }
 public static function disp_services(){
  global $_ginfo;
?>
 <li id="menu-366-1" class="first odd sf-depth-1 sf-total-children-3 sf-parent-children-1 sf-single-children-2 menuparent">
  <a href="" title="" class="sf-depth-1 menuparent">
   Services
  </a>
  <ul>
   <?php
   foreach($_ginfo["services"] as $key=>$val){
?>
   <li id="menu-409-1" class="middle even sf-depth-2 sf-total-children-4 sf-parent-children-1 sf-single-children-3 menuparent">
    <a href="" title="Services" class="sf-depth-2 menuparent">
     <?php echo $key; ?>
    </a>
    <ul>
     <?php
     foreach($val as $key1=>$val1){
     ?>
     <li id="menu-527-1" class="first odd sf-depth-3 sf-no-children" style="width:300px;" >
      <a href="<?php echo HOST."content.php?cname=".$key1; ?>" title="" class="sf-depth-3" style=" font-style: italic;text-transform:none;padding-top:0px;padding-bottom:0px;" >
       <?php echo $val1; ?>
      </a>
     </li>
     <?php
     }
     ?>
    </ul>
   </li>
<?php
   }
   ?>
  </ul>
 </li>
<?php
 }
 public static function disp_myassign_top_menu(){
?>
            <div id="block-quicktabs-sidebar-tabs" class="block block-quicktabs clearfix">
             <div class="content">
              <div id="quicktabs-sidebar_tabs" class="quicktabs-wrapper quicktabs-style-nostyle jquery-once-1-processed">

               <div class="item-list">

                <ul class="quicktabs-tabs quicktabs-style-nostyle">
                <?php
                $inp=array();
                if(User::isloginas('u')){
	                	$inp=array('list'=>array("myassignments.php?list=current"=>"Current Assignment","myassignments.php?list=myassign"=>"My Assignment"));
 																	$inp["list"]["submitnew.php"]="Submit New Assignment";
              	 }
              	 else{
              	 		$inp=array("list"=>array("myassignments.php?list=current"=>"Current Assignment","myassignments.php?list=myassign"=>"My Assignment"));
              	 }
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
 }
}
?>
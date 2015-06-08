<script type="text/javascript" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/js/js_0gj6QcpfRH2jzTbCQqf7kEkm4MXY0UA_sRhwPc8jC1o.js"></script>

<script type="text/javascript" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/js/js_msE2ES1FxGfnHoaUwxn6fU-7RaGvtiDsLxm3WPxeMRU.js"></script>


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

<script type="text/javascript" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/js/js_xza51gRKd-DDm8ZutFDynCREGOzyWI6IOk-MIpwpULI.js"></script>


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
<script type="text/javascript" src="http://demo.morethanthemes.com/startupgrowth/default/sites/all/themes/startupgrowth/js/isotope/jquery.isotope.js?nlck88"></script>


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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>



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
<script type="text/javascript" src="http://demo.morethanthemes.com/startupgrowth/default/sites/all/themes/startupgrowth/js/meanmenu/jquery.meanmenu.min.js?nlck88"></script>



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
<script type="text/javascript" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/js/js_pVx70STWSzS03iL2UOIgrKagSPyS-L8beybp_XAqDfo.js"></script>
<script type="text/javascript" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/js/js_yRXKjllCZKLJnznEs27fyXxmvuH5eo-vNFvWk-vpGOM.js"></script>


<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/startupgrowth\/default\/","pathPrefix":"","ajaxPageState":{"theme":"startupgrowth","theme_token":"ipufQ9Msi6n-79SDwY6pITVo6InRJYjs4TUALzj5LQw","js":{"0":1,"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.7\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/mtheader\/mtheader.js":1,"sites\/all\/modules\/mtheader\/js\/data.js":1,"sites\/all\/modules\/mtheader\/js\/jquery.ddslick.js":1,"sites\/all\/modules\/mtheader\/js\/color-switcher.js":1,"1":1,"sites\/all\/themes\/startupgrowth\/bootstrap\/js\/bootstrap.min.js":1,"2":1,"sites\/all\/themes\/startupgrowth\/js\/isotope\/jquery.isotope.js":1,"3":1,"https:\/\/maps.googleapis.com\/maps\/api\/js?v=3.exp\u0026sensor=false":1,"4":1,"5":1,"sites\/all\/themes\/startupgrowth\/js\/meanmenu\/jquery.meanmenu.min.js":1,"6":1,"7":1,"sites\/all\/libraries\/superfish\/supposition.js":1,"sites\/all\/libraries\/superfish\/superfish.js":1,"sites\/all\/libraries\/superfish\/supersubs.js":1,"sites\/all\/modules\/superfish\/superfish.js":1,"sites\/all\/themes\/startupgrowth\/js\/flexslider\/jquery.flexslider.js":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/js\/jquery.themepunch.plugins.min.js":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/js\/jquery.themepunch.revolution.min.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/comment\/comment.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/mtheader\/mtheader.css":1,"sites\/all\/modules\/mtheader\/color-switcher.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"http:\/\/netdna.bootstrapcdn.com\/font-awesome\/4.0.3\/css\/font-awesome.css":1,"\/\/netdna.bootstrapcdn.com\/font-awesome\/4.0.3\/css\/font-awesome.css":1,"sites\/all\/themes\/startupgrowth\/js\/isotope\/jquery.isotope.css":1,"sites\/all\/themes\/startupgrowth\/js\/meanmenu\/meanmenu.css":1,"sites\/all\/libraries\/superfish\/css\/superfish.css":1,"sites\/all\/themes\/startupgrowth\/bootstrap\/css\/bootstrap.css":1,"sites\/all\/themes\/startupgrowth\/js\/flexslider\/flexslider.css":1,"sites\/all\/themes\/startupgrowth\/js\/rs-plugin\/css\/settings.css":1,"sites\/all\/themes\/startupgrowth\/style.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/lato-font.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/sourcecodepro-font.css":1,"sites\/all\/themes\/startupgrowth\/fonts\/ptserif-blockquote-font.css":1,"sites\/all\/themes\/startupgrowth\/ie9.css":1,"sites\/all\/themes\/startupgrowth\/local.css":1}},"superfish":{"1":{"id":"1","sf":{"pathLevels":"0","delay":"200","animation":{"opacity":"show"},"speed":"\u0027fast\u0027","autoArrows":false,"dropShadows":false,"disableHI":false},"plugins":{"supposition":true,"bgiframe":false,"supersubs":{"minWidth":"15","maxWidth":"27","extraWidth":1}}}},"startupgrowth":{"google_map_latitude":"40.726576","google_map_longitude":"-74.046822","google_map_canvas":"map-canvas"}});
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

$( document ).ready(function(){
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	});
	$('.dropdown-menu').click(function(e) {
		e.stopPropagation();
	});
	if(typeof(runonload)!='undefined')
		runonload();
});



function hideshow(h,s){
	$("#"+h).hide();
	$("#"+s).show();
}
function hideshowdown(h,s){
	$("#"+h).slideUp();
	$("#"+s).slideDown();
}

function login_redirect_url(){
	if(redurl!="")
		return redurl;
	else
		return profile_page_url;
	// else
	// 	return cururl;
}

var request={
	login:function(obj){
		form_request(obj,{instruction:"login","errordict":{"0":"Invalid password","-1":"Invalid Email Id","-2":"Account Deactivated!"},"changedtext":"Logging..","successfunc":function(){
				$(obj).find(".text-success").html("Login successfull, redirecting..");
				setTimeout(function(){window.location.href=login_redirect_url();},1000);
			} 
		});
	},
	signup:function(obj){
		form_request( obj,{ instruction:"signup","errordict":{"0":"Not valid inputs","-1":"Email Id Already exist" },
			"changedtext":"Creating..","successfunc":function(){
				$(obj).find(".text-success").html("Account created, redirecting..");
				setTimeout(function(){window.location.href=login_redirect_url();},500);
			}
		});
	},
	forget:function(obj){
		form_request( obj,{ instruction:"forgetpassword","errordict":{"-1":"Not email formatted...","-2":"No such email regestered" },
			"changedtext":"Reseting.. ","successfunc":function(){
				$(obj).find(".text-success").html("Password reset! ");
			}
		});
	},
	cpassword:function (obj){
		form_request( obj,{ instruction:"cpassword","errordict":{"0":"Some error occured","-1":"Session expired"},
			"changedtext":"Changing.. ","successfunc":function(obj,d){
				$(obj).find(".text-success").html("Password changed");
				setTimeout(function(){
					var temp=$("#form_cpassword");temp.slideUp();temp[0].reset();
				},3000);
			}
		});
	},
	loadcomments:function (pid,type,f){
		var allc=$("#post_"+pid).children();
		var num=0;
		if(type=='n' && allc.length>0)
			num=$(allc[allc.length-1]).attr("data-cid");
		if(type=='o' && allc.length>0)
			num=$(allc[0]).attr("data-cid");
		$.post("action.php",{"loadcomment":"","pid":pid,"puid":0,"type":type,"num":num  },function(d,s){if(s=='success'){
			if(type=='n')
				$("#post_"+pid).append(d);
			else if(type=='o')
				$("#post_"+pid).html(d+$("#post_"+pid).html());
			f(d);
		}});
	},
	load_all_comments:function(d,pid,obj){
		$.post("action.php",{"load_allcomment":"","aid":pid },function(d,s){if(s=='success'){
			$("#allcomments").html(d);
			$("#comment_loadingimg_"+pid).css("display","none");
			obj.disabled=false;
		}});
	},
	load_comment:function (e,obj,pid,type){
		if(e.keyCode==13 && !e.shiftKey && !validation.isnull(obj.value) ){
			if(obj.disabled)
				return;
			obj.disabled=true;
			$("#comment_loadingimg_"+pid)[0].style.display="";
			var params={"action":"msg","content":obj.value,"aid":pid};
			setTimeout(function(){
				obj.rows=1;
				obj.value="";
			},100);
			button.sendreq1(params,function(d){ request.load_all_comments(d,pid,obj);},{});
		}
	}
};


function select_crs(obj){
	hideshow("mainsecne2","mainsecne1");
	$("#choosesubject").val($(obj).attr("data-dispname"));
}

function uploadfile(obj){
	temp=obj;
	if(!($("#webform-client-form-22").find("input[name=uploadfile]").length>0)){
		var elm=document.createElement("input");
		elm.setAttribute("type","file");
		elm.setAttribute("name","uploadfile");
		elm.setAttribute("style","display:none;");
		elm.onchange=function (){
			$(obj).parent().children("div#uploadfilenamemain").html(elm.value.bound(15));
		}
		$("#webform-client-form-22")[0].appendChild(elm);
	}
	else{
		var elm=$("#webform-client-form-22").find("input[name=uploadfile]")[0];
	}
	elm.click();
}

function delete_soln(obj,solnid){
	temp_deletesol=function(){
		button.sendreq1({"action":"delete_soln","solnid":solnid},function(d){
			$(obj).parent().remove();
		},{});
	}
	mohit.confirm("Are you Sure ? ","temp_deletesol();");
}

function timenow(){
	return Math.floor(new Date().getTime()/1000);
}

var timestarting=timenow();

function updatetimeleft(){
	alltl=$(".timeleft");
	for(var i=0;i<alltl.length;i++){
		var ithc=$(alltl[i]);
		var timeleftnow=parseInt(ithc.attr("data-intdate"))-( timenow()- timestarting );
		ithc.html(others.timelefttext(others.timeleft(timeleftnow)));
	}
	setTimeout(updatetimeleft,1000);
}


function open_interested_subj(obj){
	hideshow("mainsecne1","mainsecne2");
}


function selectallmatched(obj,sel){
	temp=obj;
	for(var i=0;i<sel.length;i++){
		sel[i].checked=obj.checked;
	}

//selectallmatched(this,$(this).parent().parent().find(".input.topics_0_0") )
}





var expert={
	selected_topics:function(){
		var allcbox=$("#alltopicscontent").find("input[type=checkbox]");
		var outp={};
		var len=0;
		for(var i=0;i<allcbox.length;i++){
			if(allcbox[i].checked){
				var attrs=button.attrs(allcbox[i]);
				if(attrs['data-issubtopic']=='true'){
					var subject=attrs['data-subject'];
					var topic=attrs['data-topic'];
					var subtopic=attrs['data-subtopic'];
					others.setifunset(outp,subject,{});
					others.setifunset(outp[subject],topic,[]);
					outp[subject][topic].push(subtopic);
					len++;
				}
			}
		}
		return {"dict":outp,"len":len};
	},
	selnumsel:function(obj){
		hideshow("mainsecne2","mainsecne1");
		var sel_len=expert.selected_topics().len;
		$("#num_subj_selected").html(sel_len);
		$("#num_subj_selected").parent()[0].style.display=sel_len>0?"":"none";
	},
	createaccount:function(obj){
		form.sendreq1(obj,$(obj).find("button[type=submit]")[0]);
	}

};

var funcs={
	f1:function (obj){
		$(obj).find("a").fadeIn();
	},
	f2:function (obj){
		$(obj).find("a.hiddenedit").fadeOut();
	},
	f3:function (d){
		var trs=$('#assignmentcomments').children("tbody");
		var trsc=trs.children();
		for(var i=1;i<trsc.length;i++){
			$(trsc[i]).remove();
		}
		trs.append(d);
	},
	f4:function (d,id){
		var trs=$('#'+id).children("tbody");
		var trsc=trs.children();
		for(var i=1;i<trsc.length;i++){
			$(trsc[i]).remove();
		}
		trs.append(d);
	},
	f5:function (d){
		funcs.f4(d,'');
	},
	f6:function(d){
		$("#chatmsg").val('');
	},
	f7:function(){
		var lastmsgid=function(){
			var allmsg=$("#dispmsgdiv").children();
			if(allmsg.length==0)
				var msgid=0;
			else
				var msgid=$(allmsg[allmsg.length-1]).attr("data-msgid");
			return msgid;
		}
		var msgid=lastmsgid();
		button.sendreq_v2_t3({"action":"chatting","msgid":msgid},null,function(d){
			if(lastmsgid()==msgid && d!='' ){
				$('#chatmsg').focus();
				$("#dispmsgdiv").append(d);
				$("#dispmsgdiv").scrollTop($("#dispmsgdiv").prop("scrollHeight"));
			}
		},{});
	}
};


var onout={
	o1:[function obj(){
		obj.style.backgroundColor="rgba(0,0,0,0.5)";
	},function (obj){
		obj.style.backgroundColor="rgba(0,0,0,0.75)";
	}]
};


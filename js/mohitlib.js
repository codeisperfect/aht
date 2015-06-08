var button={
	attrs:function(obj){
		var alla=obj.attributes;
		var attrso={};
		for(var i=0;i<alla.length;i++)
			attrso[alla[i].name]=alla[i].value;
		return attrso;
	},
	tosendattrs:function(obj,allattrs){
		var dontneed=["data-restext","data-waittext","data-res","data-wait","data-error","data-params","data-eparams"];
		var sendparams={};
		for(var i in allattrs){
			if(i.substr(0,5)=="data-" && dontneed.indexOf(i)==-1 )
				sendparams[i.substr(5)]=allattrs[i];
		}
		return sendparams;
	},
	parse:function (d){
		try{
			return JSON.parse(d);
		}catch(e){
			mohit.alert("Unexpected error! ");
			return null;
		}
	},
	hasattr:function (allattrs,a){
		return (typeof(allattrs[a])!='undefined');
	},
	objhasattr:function (obj,a){
		return button.hasattr(button.attrs(obj),a);
	},
	sendreq:function(obj){
		var allattrs=this.attrs(obj);
		if(!button.hasattr(allattrs,"data-params"))
			var params=this.tosendattrs(obj,allattrs);
		else{
			eval("var params="+allattrs["data-params"]);
		}
		params['action']=allattrs["data-action"];
		obj.disabled=true;
		var prvvalue=obj.innerHTML;
		obj.innerHTML=(!button.hasattr(allattrs,"data-waittext"))?' ... ':(allattrs["data-waittext"]==''?prvvalue:allattrs["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			obj.disabled=false;
			var respo=button.parse(d);
			obj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					obj.innerHTML=(typeof(allattrs["data-restext"])=='undefined')?prvvalue:allattrs["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
				}
			}
			
		}});
	},
	sendreq_v2:function(obj){
		var allattrs=this.attrs(obj);
		if(!button.hasattr(allattrs,"data-params"))
			var params=this.tosendattrs(obj,allattrs);
		else{
			eval("var params="+allattrs["data-params"]);
		}
		if(button.hasattr(allattrs,"data-eparams")){
			eval("var eparams="+allattrs["data-eparams"]);
			params=others.mergeifunset(params,eparams);
		}
		params['action']=allattrs["data-action"];
		obj.disabled=true;
		var prvvalue=obj.innerHTML;
		obj.innerHTML=(!button.hasattr(allattrs,"data-waittext"))?' ... ':(allattrs["data-waittext"]==''?prvvalue:allattrs["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			obj.disabled=false;
			var respo=button.parse(d);
			obj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					obj.innerHTML=(typeof(allattrs["data-restext"])=='undefined')?prvvalue:allattrs["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
				}
			}
			
		}});
	},
	sendreq_v2_t2:function(obj){
		var allattrs=this.attrs(obj);
		if(!button.hasattr(allattrs,"data-params"))
			var params=this.tosendattrs(obj,allattrs);
		else{
			eval("var params="+allattrs["data-params"]);
		}
		if(button.hasattr(allattrs,"data-eparams")){
			eval("var eparams="+allattrs["data-eparams"]);
			params=others.mergeifunset(params,eparams);
		}
		params['action']=allattrs["data-action"];
		obj.disabled=true;
		var prvvalue=obj.innerHTML;
		obj.innerHTML=(!button.hasattr(allattrs,"data-waittext"))?' ... ':(allattrs["data-waittext"]==''?prvvalue:allattrs["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			obj.disabled=false;
			var respo=button.parse(d.split("\n")[0]);
			obj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					obj.innerHTML=(typeof(allattrs["data-restext"])=='undefined')?prvvalue:allattrs["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
					if(button.hasattr(allattrs,"data-reshtml")){
						var data=d.substring(d.indexOf('\n')+1);
						eval(allattrs["data-reshtml"]);
					}
				}
			}
			
		}});
	},
	sendreq_v2_t3:function(params,call_back_data,call_back_html,adata){
		$.post(HOST+"actiondisp.php",params,function(d,s){if(s=='success'){
			var respo=button.parse(d.split("\n")[0]);
			if(respo){
				if(respo.ec<0){
					if(typeof(adata)!='undefined'){
						if(button.hasattr(adata,"data-error")){
							var ec=respo.ec;
							eval(allattrs["data-error"]);
						}
						else
							mohit.alert(ecn[respo.ec]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					if(call_back_data!=null)
						call_back_data(respo.data);
					if(call_back_html!=null){
						var data=d.substring(d.indexOf('\n')+1);
						call_back_html(data);
					}
				}
			}
		}});
	},
	sendreq1:function (params,call_back,adata){
		$.post("actionv2.php",params,function(d,s){if(s=='success'){
			var respo=button.parse(d);
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(adata,"data-error")) {
						var ec=respo.ec;
						eval(adata["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else if(call_back!=null)
					call_back(respo.data);
			}
			else
				mohit.alert("Unexpected Error");
		}});
	}

};


var form={
	sendreq:function(obj,bobj){
		if(bobj.disabled)
			return;
		var allattrs=button.attrs(obj);
		var allattrsb=button.attrs(bobj);

		var params=getFormInputs(obj,'action');
		params['action']=allattrs["data-action"];
		bobj.disabled=true;
		var prvvalue=bobj.innerHTML;
		bobj.innerHTML=(!button.hasattr(allattrsb,"data-waittext"))?' ... ':(allattrsb["data-waittext"]==''?prvvalue:allattrsb["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			bobj.disabled=false;
			var respo=button.parse(d);
			bobj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					bobj.innerHTML=(typeof(allattrsb["data-restext"])=='undefined')?prvvalue:allattrsb["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
				}
			}
			
		}});
	},
	sendreq1:function(obj,bobj){
		if(bobj.disabled)
			return;
		var allattrs=button.attrs(obj);
		var allattrsb=button.attrs(bobj);

		var params=getFormInputs(obj,'action');
		if(button.hasattr(allattrs,'data-param')){
			eval("var addparam="+allattrs['data-param']);
			others.mergeifunset(params,addparam);
		}

		params['action']=allattrs["data-action"];
		bobj.disabled=true;
		var prvvalue=bobj.innerHTML;
		bobj.innerHTML=(!button.hasattr(allattrsb,"data-waittext"))?' ... ':(allattrsb["data-waittext"]==''?prvvalue:allattrsb["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			bobj.disabled=false;
			var respo=button.parse(d);
			bobj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					bobj.innerHTML=(typeof(allattrsb["data-restext"])=='undefined')?prvvalue:allattrsb["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
				}
			}
			
		}});
	}
};



var selects={
	arraytooptionlist:function(arr,text){
		var outp="";
		outp+="<option value='' >"+text+"</option>";
		for(var i=0;i<arr.length;i++)
			outp+="<option>"+arr[i]+"</option>";
		return outp;
	}
};


var textarea={
	resize:function(obj){
		var battrs=button.attrs(obj);
		// if(!button.hasattr(battrs,"data-minrows"))
		// 	battrs["data-minrows"]=3;
		// if(!button.hasattr(battrs,"data-maxrows"))
		// 	battrs["data-maxrows"]=10;
		// if(27+20*(obj.rows)<obj.scrollHeight && battrs["data-maxrows"] > obj.rows  ){
		// 	obj.rows++;
		// }
	},
	resizeorg:function(obj){
		var battrs=button.attrs(obj);
		if(!button.hasattr(battrs,"data-minrows"))
			battrs["data-minrows"]=3;
		if(!button.hasattr(battrs,"data-maxrows"))
			battrs["data-maxrows"]=10;
		if(27+20*(obj.rows)<obj.scrollHeight && battrs["data-maxrows"] > obj.rows  ){
			obj.rows++;
		}
	}
};



var validation={
	"isnull":function (st){
		for(var i=0;i<st.length;i++){
			if(!(st[i]==' ' || st[i]=='\n' || st[i]=='\t'))
				return false;
		}
		return true;
	}
};





var others={
	keys:function(arr){
		outp=[];
		for(i in arr){
			outp.push(i);
		}
		return outp;
	},
	timeleft:function(t){
		var seconds=Math.floor(t)%60;
		var minutes=Math.floor(t/60)%60;
		var hours=Math.floor(t/3600)%24;
		var days=Math.floor(t/(3600*24));
		return {days:days,hours:hours,minutes:minutes,seconds:seconds};
	},
	timelefttext:function(tl){
		var outp="";
		var keys=others.keys(tl);
		for(var i=0;i<4;i++){
			if(tl[keys[i]]!=0)
				outp+=tl[keys[i]]+" "+keys[i]+(i==3?"":",");
		}
		outp+="";
		return outp;
	},
	setifunset:function(data,key,val){
		if(typeof(data[key])=='undefined')
			data[key]=val;
	},
	mergeifunset:function(dict1,dict2){
		for(i in dict2){
			if(typeof(dict1[i]=='undefined'))
				dict1[i]=dict2[i];
		}
		return dict1;
	},
	mergeforce:function (dict1,dict2){
		for(i in dict2){
			dict1[i]=dict2[i];
		}
		return dict1;
	}

};


var a={
	openmytab:function(obj){
		temp=obj;
		var divobjs=$(obj).parent().parent().parent().children(".mymenutabs");
		divobjs.children().fadeOut(function(){
			divobjs.children("#"+$(obj).attr("data-mytab")).fadeIn();
		});
		$(obj).parent().parent().children().removeClass("active");
		$(obj).parent().addClass("active");
	},
	openmytab_t2:function(obj){
		temp=obj;
		var divobjs=$(obj).parent().parent().parent().children(".mymenutabs");
		divobjs.children().hide();
		divobjs.children("#"+$(obj).attr("data-mytab")).show();
		$(obj).parent().parent().children().removeClass("active");
		$(obj).parent().addClass("active");
	}
};


String.prototype.bound = function (n) {
	if(this.length<=n)
		return this;
	else
		return this.substr(0,n-2)+".."
};

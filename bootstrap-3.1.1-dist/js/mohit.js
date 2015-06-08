var mohit={
		alerthelp:{
			alertShowButton:null,
			init:function(){
				if(this.alertShowButton!=null){
					this.alertShowButton.setAttribute("data-target","#alertPopupId");
					return;
				}
				var alertShowButton=document.createElement("button");
				alertShowButton.setAttribute("data-toggle","modal");
				alertShowButton.setAttribute("data-target","#alertPopupId");
				alertShowButton.style.display="none";
				document.body.appendChild(alertShowButton);
				this.alertShowButton=alertShowButton;
			},
			isdisplayed:function (){
				var temp=$("#alertPopupId")[0].style.display;
				return (temp!="none" && temp!="" );
			}
		},
		alert:function(text){
			if(this.alerthelp.isdisplayed())
				return;
			this.alerthelp.init();
			this.alerthelp.alertShowButton.click();
			$("#alertText").html(""+text);
		},
		confirmhelp:{
			init:function(){
				mohit.alerthelp.init();
				mohit.alerthelp.alertShowButton.setAttribute("data-target","#confirmPopupId");
			},
			isdisplayed:function (){
				var temp=$("#confirmPopupId")[0].style.display;
				return (temp!="none" && temp!="" );
			}
		},
		confirm:function(text,f,obj){
			if(this.confirmhelp.isdisplayed())
				return;
			this.confirmhelp.init();
			this.alerthelp.alertShowButton.click();
			$("#confirmText").html(""+text);
			$("#confirmconfirm").attr("onclick",f);
		}
	};



function isImg()
{

var c = document.getElementById("SiteLink");
var d = c.firstChild;
var w=window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;
var y = parseFloat(w);

if(d.nodeName!="IMG" && y>720){
	
		document.getElementById("SiteLink").style.marginTop="37px";
document.getElementById("SiteLink").style.marginBottom="37px";
document.getElementById("SiteLink").style.padding="6px 0px";

}

}


function isImgg()
{

var c = document.getElementById("SiteLink");
var d = c.firstChild;
var w=window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;
var y = parseFloat(w);

if(d.nodeName!="IMG" && y>720){
	
		document.getElementById("SiteLink").style.marginTop="37px";
document.getElementById("SiteLink").style.marginBottom="37px";
document.getElementById("SiteLink").style.padding="6px 0px";

}
else {
	
document.getElementById("SiteLink").style.marginTop="0px";
document.getElementById("SiteLink").style.marginBottom="0px";
document.getElementById("SiteLink").style.padding="0px 0px";	

}

}
var x = true
function showList() {
	var c = document.getElementById("DetectPhone");
	var d = c.innerHTML;
	var e = document.getElementById("DetectEmail");
	var f = e.innerHTML;
	var g = document.getElementById("DetectFacebook");
	var h = g.innerHTML;
	var i = document.getElementById("DetectTwitter");
	var j = i.innerHTML;
	var k = document.getElementById("DetectGoogle");
	var l = k.innerHTML;
	if (x == true) {
		if (d === "on") {
			document.getElementById("PhoneSub").style.display = "inline-block"
		} else {
			document.getElementById("PhoneSub").style.display = "none"
		};
		if (f === "on") {
			document.getElementById("EmailSub").style.display = "inline-block"
		} else {
			document.getElementById("EmailSub").style.display = "none"
		};
		if (h === "on") {
			document.getElementById("FaceBookIconSub").style.display = "inline-block"
		} else {
			document.getElementById("FaceBookIconSub").style.display = "none"
		};
		if (j === "on") {
			document.getElementById("TwitterIconSub").style.display = "inline-block"
		} else {
			document.getElementById("TwitterIconSub").style.display = "none"
		};
		if (l === "on") {
			document.getElementById("GoogleIconSub").style.display = "inline-block"
		} else {
			document.getElementById("GoogleIconSub").style.display = "none"
		};
		document.getElementById("FootRightWrap").style.visibility = "hidden";
		
		x = false
	} else {
		document.getElementById("FaceBookIconSub").style.display = "none";
		document.getElementById("TwitterIconSub").style.display = "none";
		document.getElementById("GoogleIconSub").style.display = "none";
		document.getElementById("PhoneSub").style.display = "none";
		document.getElementById("EmailSub").style.display = "none";
		document.getElementById("FootRightWrap").style.visibility = "visible";
		x = true
	}
}

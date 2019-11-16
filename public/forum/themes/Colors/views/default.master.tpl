<!DOCTYPE html>
<html lang="{$CurrentLocale.Lang}">
<head>
    
    {asset name="Head"}
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	    <link rel="stylesheet" href="{link path="/"}themes/Colors/design/custom.css?v=1.0.0">
		<link rel="stylesheet" media="all and (max-width: 1140px) and (min-width: 960px)" href="{link path="/"}themes/Colors/design/Extralarge.css?v=1.0.0">
		<link rel="stylesheet" media="all and (max-width: 960px) and (min-width: 720px)" href="{link path="/"}themes/Colors/design/Large.css?v=1.0.0">
	    <link rel="stylesheet" media="all and (max-width: 720px) and (min-width: 540px)" href="{link path="/"}themes/Colors/design/Medium.css?v=1.0.0">
      	<link rel="stylesheet" media="all and (max-width: 540px)" href="{link path="/"}themes/Colors/design/Small.css?v=1.0.0">
        <script src="{link path="/"}themes/Colors/js/resize.js"></script>
		<script src="{link path="/"}themes/Colors/js/footer.js"></script>
		<script src="{link path="/"}themes/Colors/js/texture.js"></script>
		<script src="{link path="/"}themes/Colors/js/social.js"></script>
        <script src="{link path="/"}themes/Colors/js/fix.js"></script>
		<script src="{link path="/"}themes/Colors/js/click.js"></script>
		{text code="Head&nbsp;Custom&nbsp;Area"}
</head>
<body   onload="isImg();changeTexture();phoneSwith();emailSwith();facebookSwith();twitterSwith();googleSwith();fixPadding();"    onresize="isImgg();"  id="{$BodyID}" class="{$BodyClass}">

<div id="Frame">
    {text code="Body&nbsp;Head&nbsp;Custom&nbsp;Area"}
    <div class="Head" id="Head" role="banner">
	    
        <div class="Row">
		    
            <strong class="SiteTitle"><a id="SiteLink" "href="{link path="/"}">{logo}</a></strong>
            <div class="SiteSearch" role="search">{searchbox}</div>
            <ul class="SiteMenu">
			    <li><a  href="{link path="/search"}" id="MenuSearch">Search</a></li>
                <li><a  href="{link path="/categories"}" id="MenuCategories">Categories</a></li>
                <li><a  href="{link path="/activity"}" id="MenuActivity">Activity</a></li>
				<li><a  href="{link path="/discussions/bookmarked"}" id="MenuBookmarked">Bookmarked</a></li>
				<li><a  href="{link path="/discussions"}" id="MenuDiscussions">Discussions</a></li>
			    
                {custom_menu}
            </ul>
        </div>
    </div>
    <div id="Body">
        <div class="Row">
	    	{text code="Body&nbsp;Top&nbsp;Custom&nbsp;Area"}
            <div class="BreadcrumbsWrapper">{breadcrumbs}</div>
            <div class="Column PanelColumn" id="Panel" role="complementary">
                {module name="MeModule"}
                {asset name="Panel"}
				{text code="Body&nbsp;Pannel&nbsp;Custom&nbsp;Area"}
            </div>
            <div class="Column ContentColumn" id="Content" role="main">{asset name="Content"}</div>
			{text code="Body&nbsp;Bottom&nbsp;Custom&nbsp;Area"}
        </div>
		
    </div>
    <div id="Foot" role="contentinfo">
        <div class="Row">
            <span>
			    {text code="Copyright"}
		    </span>
			<span id="PCFoot">
			    <span id="Phone">
				    <span id="PhoneIcon"><a href="{text code="Phone&nbsp;Number"}">&nbsp;</a></span><span id="PhoneHidden">{text code="Phone&nbsp;Number"}</span>         
			    </span>
				<span id="Email">
				    <span id="EmailIcon"><a href="{text code="Email&nbsp;Address"}">&nbsp;</a></span><span id="EmailHidden">{text code="Email&nbsp;Address"}</span>
				</span>
			
			    <span id="FaceBookIcon">
				    <a target="_blank" href="{text code="Facebook"}">&nbsp;</a>
			    </span>
				<span id="TwitterIcon">
				    <a target="_blank" href="{text code="Twitter"}">&nbsp;</a>
			    </span>
				<span  id="GoogleIcon">
				    <a target="_blank" href="{text code="Google+"}">&nbsp;</a>
			    </span>
		    </span>
		    <span id="FootRightWrap"><a id="FootRight" href="#Head">&nbsp;</a></span>
			
			
			
		
            {asset name="Foot"}
			
        </div>
    </div>
	
	
	
	
	<div onclick="showList()" id="MobileFoot">
	    <ul id="MobileFootWrapper">
			    <li id="FaceBookIconSub">
				    <a target="_blank" href="{text code="Facebook"}">&nbsp;</a>
			    </li>
				<li id="TwitterIconSub">
				    <a target="_blank" href="{text code="Twitter"}">&nbsp;</a>
			    </li>
				<li  id="GoogleIconSub">
				    <a target="_blank" href="{text code="Google+"}">&nbsp;</a>
			    </li>
				<li id="PhoneSub">
				    <a href="tel:{text code="Phone&nbsp;Number"}">&nbsp;</a>
			    </li>
				<li id="EmailSub">
				    <a href="mailto:{text code="Email&nbsp;Address" default="admin@yoursite.com"}">&nbsp;</a>
			    </li>		
	    </ul>
	</div>

	
	
</div>



{event name="AfterBody"}
{text code="Body&nbsp;Foot&nbsp;Custom&nbsp;Area"}

<div id="Detect" style="display:none;">
 
     <span id="DetectTexture">{text code="Background&nbsp;Selector"}</span>
	 <span id="DetectPhone">{text code="Phone&nbsp;Switch"}</span>
	 <span id="DetectEmail">{text code="Email&nbsp;Switch"}</span>
	 <span id="DetectFacebook">{text code="Facebook&nbsp;Switch"}</span>
	 <span id="DetectTwitter">{text code="Twitter&nbsp;Switch"}</span>
	 <span id="DetectGoogle">{text code="Google&#43;&nbsp;Switch"}</span>
 
</div>

</body>
{text code="Foot&nbsp;Custom&nbsp;Area"}
</html>

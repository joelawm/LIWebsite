<!DOCTYPE html>
<html>
<head>
  {asset name="Head"}
  <link rel="stylesheet" type="text/css" href="/css/main.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/photos/favicon.ico"/>
</head>
<body id="{$BodyID}" class="{$BodyClass}">
   <div id="Frame">
     <!--Navbar-->
     <div class="topnavbar greygradient">
        <a href="https://lostinstinct.net"><img class="navbarimg" src="/photos/LastInstinctLogo128.png" /></a>
          <p>
            <a href="/games/">GAMES</a>
            <a href="/store/" class="">STORE</a>
            <a href="/forum/">FORUMS</a>
            <a href="/wiki/">WIKI</a>
            <a href="/jobs/">JOBS</a>
          </p>
     </div>
      <div class="Head" id="Head">
         <div class="Row">
            <strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>
            <div class="SiteSearch">{searchbox}</div>
            <ul class="SiteMenu">
               <!-- {dashboard_link} -->
               {discussions_link}
               {activity_link}
               <!-- {inbox_link} -->
               {custom_menu}
               <!-- {profile_link}
               {signinout_link}  -->
            </ul>
         </div>
      </div>
      <div id="Body">
         <div class="Row">
            <div class="BreadcrumbsWrapper">{breadcrumbs}</div>
            <div class="Column PanelColumn" id="Panel">
               {module name="MeModule"}
               {asset name="Panel"}
            </div>
            <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
         </div>
      </div>
      <div class="footer">
        <p class="center" style="color:white;">LOST INSTINCT GAME DEVELOPER &copy</p>
        <div class="center">Powered by <a href="{vanillaurl}" title="Community Software by Vanilla Forums">Vanilla Forums</a>
        {asset name="Foot"}</dev>
      </div>
   </div>
   {event name="AfterBody"}
</body>
</html>

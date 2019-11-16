<!DOCTYPE html>
<html lang="{$CurrentLocale.Lang}">
<head>
    {asset name="Head"}
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>
<body id="{$BodyID}" class="{$BodyClass}">
<div id="Frame">
  <body
  <main>
      <!--Navbar-->
      <div class="topnavbar greygradient">
          <a href="https://lostinstinct.net"><img class="navbarimg" src="/photos/LastInstinctLogo128.png" /></a>
          <a href="#wehaveonegamelmao">GAMES</a>
          <a href="#lolwedonthaveastore">STORE</a>
          <a href="/vanilla/index.php?p=/">FORUMS</a>
          <a href="#lolwedonthaveastore">WIKI</a>
          <a href="#lolwedonthaveastore">JOBS</a>
      </div>
    <div  id="Head" role="navigation">
        <div class="Row">
            <div class="SiteSearch" role="search">{searchbox}</div>
            <ul class="SiteMenu">
                {dashboard_link}
                {discussions_link}
                {activity_link}
                {inbox_link}
                {custom_menu}
                {profile_link}
                {signinout_link}
            </ul>
        </div>
    </div>
    <div class="BreadcrumbsWrapper">
        <div class="Row">
            {breadcrumbs}
        </div>
    </div>
    <div id="Body">
        <div class="Row">
            <div role="complementary" class="Column PanelColumn" id="Panel">
                {module name="MeModule"}
                {asset name="Panel"}
            </div>
            <div class="Column ContentColumn" id="Content" role="main">{asset name="Content"}</div>
        </div>
    </div>
</div>
{event name="AfterBody"}
</main>
</body>
<footer>
  <p class="center" style="color:white;">LOST INSTINCT GAME DEVELOPER &copy</p>
  <div class="center"><a href="{vanillaurl}" class="PoweredByVanilla">Powered by Vanilla</a></div>
    {asset name="Foot"}
</footer
</html>

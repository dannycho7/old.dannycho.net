<?php
echo '<!DOCTYPE html>
  <html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Danny\'s Personal Website</title>
    <link rel="stylesheet" type="text/css" href="css/theme.css">
  </head>
  <body onresize=\'menuswitch()\'>
  <div id="navigation" class="gradient">
    <div id = "logo">
        <a href="index">
          <img src="pics/social/logo1.png" href="#"></img>
        </a>
        </div>
      <a id="menu-icon" class="navselect" onclick="reveal()">
      <img src="pics/menu-icon.png" id="menuimg"></img>
      <img src="pics/exit.png" id="exit"></img>
      </a>
      <div id="container">
        <div id="menubar">
      <ul class="menu-content">
        <li class="linknav"><a onclick="navigate(\'index\');" class="navselect" '.$homecolor.'>Home</a></li><!--
        --><li class="linknav"><a onclick="navigate(\'projects\');" class="navselect" '.$projectscolor.'>Projects</a></li><!--
        --><li class="linknav"><a onclick="navigate(\'photo\');" class="navselect" '.$photocolor.'>Photography</a></li>
      </ul>
      </div><!--menubar-->
      </div><!--container-->
  </div>';
?>

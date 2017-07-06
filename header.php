<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link rel="stylesheet" href="<?php bloginfo("template_url");?>/css/mystyle.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php bloginfo("template_url");?>/css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/init.js">  </script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/materialize.min.js"></script>





  <header>
    <!--<ul id="nav-mobile" class="side-nav fixed hide-on-med-and-down light-blue lighten-3">
      <li class="center-align"><a href="/wp" ><?php bloginfo("name");?></a><p><?php bloginfo("description");?></p></li>
      <li class="logo"><a href="/"></a></li>
      <li class="search">
        <div class="search-wrapper card">
          <input id="search">
          <i class="meterial-icons">search</i>
          <div class="search-results"></div>
        </div>
      </li>
      <li class="no-padding"><a href="#" class="waves-effect waves-teal"></a><?php wp_nav_menu( array('theme_locatin' => 'primary'));?></li>
    </ul>-->

		<div id="slide-out" class="side-nav fixed left-aligned light-blue lighten-4">

        <center>
					<a href="/wp" class="waves-effect waves-block waves-light"><?php bloginfo("name");?></a><p><?php bloginfo("description");?></p>
          <?php wp_nav_menu( array('theme_locatin' => 'primary'));?>
        </center>
      </div>
  </header>

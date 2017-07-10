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




  <div class="contrainer-head">
    <nav class="nav-extended">
      <div class="nav-wrapper light-blue">
        <a href="#" class="brand-logo center"><?php bloginfo("name");?></a>
      </div>
      <div class="nav-content light-blue lighten-2 pin-top">
        <ui class="tabs tabs-transparent">
          <li class="tab"><?php wp_nav_menu( array('theme_locatin' => 'primary'));?></li>
        </ui>
      </div>
    </nav>



		<!--<ui id="slide-out" class="side-nav fixed left-aligned light-blue lighten-4">
        <li><?php wp_nav_menu( array('theme_locatin' => 'primary'));?></li>
        <li></li>
    </ui>

      <nav>
        <div class="nav-wrapper light-blue">
          <a href="#" class="brand-logo center"><?php bloginfo("name");?></a>
          <ui id="nav-mobile" class="left">
            <li> <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a></li>
          </ui>
        </div>
      </nav>-->
  </div>

<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php bloginfo("template_url");?>/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php bloginfo("template_url");?>/css/mystyle.css">

  <!--Let browser know website is optimized for mobile-->

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo("name");?> <?php bloginfo("description");?></title>
</head>

<body>
  <script type="text/javascript">
  < script >
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-65842971-2', 'auto');
  ga('send', 'pageview');
</script>
  </script>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/materialize.min.js"></script>
  <script src="<?php bloginfo("template_url");?>/js/masonry.pkgd.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/init.js">  </script>

    <nav class="nav-extended">
      <div class="nav-wrapper light-blue">
        <a href="<?php bloginfo("url");?>" class="brand-logo center"><?php bloginfo("name");?></a>
      </div>
      <div class="nav-content light-blue lighten-2">
        <div class="tabs tabs-transparent">
          <div class="tab"> <?php wp_nav_menu( array('theme_locatin' => 'primary'));?></div>

        </div>
      </div>
    </nav>

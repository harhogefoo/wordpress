<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
				
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>

<header id="header" class="header header-right header-color sticky-header translucent-header">
      <div class="container">
        <div class="row header-inner">
          <div id="logo" class="col-xs-6 col-sm-12 col-md-3 image-center-sm text-left-xs clearfix">
            <a class="logo" href="/">
              <img id="header_logo" src="./image/logo/logo.png" srcset="./image/logo/logo.png 1x, ./image/logo/logo@2x.png 2x" alt="manma">
            </a>
            <a class="logo-translucent" href="/">
              <img id="header_logo" src="./image/logo/logo.png" srcset="./image/logo/logo.png 1x, ./image/logo/logo@2x.png 2x" alt="manma">
            </a>
          </div>
          <div id="menu" class="col-xs-6 col-sm-12 col-md-9">
            <nav class="navbar main-menu margin-0" role="navigation">
              <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" type="button">MENU</button>
              </div>
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-right navbar-nav">
                  <li><a href="http://manma.co/media.html">MEDIA<br>メディア掲載一覧</a></li>
                  <li><a href="http://manma.co/team.html">TEAM<br>スタッフ一覧</a></li>
                  <li><a href="http://manma.co/blog/">BLOG<br>家族留学レポート</a></li>
                  <li><a href="http://manma.co/recruit.html">RECRUIT<br>スタッフ募集</a></li>
                  <li class="hide-xs"><a class="action-btn" href="http://manma.co/contact.html" target="_blank"><button class="button btn">CONTACT<br>お問い合わせ</button></a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>
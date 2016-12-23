<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="manma,家族留学,家族インターン,家庭インターン,家庭留学,新居日南恵,女子大生,キャリア,ライフキャリア">
  <meta name="description" content="子育て中のご家庭を1日訪問し、様々な家族のあり方を体験する企画です。先輩パパママのお話を伺うことを通して仕事のキャリアだけに限らずその先の、結婚や子育ても含めて自らの人生のヒントを得ることができます。">
  <meta name="author" content="">
  <meta property="og:title" content="【manma】家族留学｜子育てのリアルを学ぶ" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="manma.co" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/image/index/ogp/ogp280.png" />
  <meta property="og:site_name" content="【manma】家族留学｜子育てのリアルを学ぶ" />
  <meta property="og:description" content="子育て中のご家庭を1日訪問。ママの生き方についてお話しを伺い、様々な家族のあり方を知ることを通して、自身のキャリアプランと向き合います。" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/image/logo/favicon.png">
  <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ie-emulation-modes-warning.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.0.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/holder.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
</head>
<body>
  <header id="header" class="header header-right header-color sticky-header translucent-header">
    <div class="container">
      <div class="row header-inner">
        <div id="logo" class="col-xs-6 col-sm-12 col-md-3 image-center-sm text-left-xs clearfix">
        <a class="logo" href="<?php echo get_site_url(); ?>">
            <img id="header_logo" src="<?php echo get_template_directory_uri(); ?>/image/logo/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/image/logo/logo.png 1x, <?php echo get_template_directory_uri(); ?>/image/logo/logo@2x.png 2x" alt="manma">
          </a>
          <a class="logo-translucent" href="<?php echo get_site_url(); ?>">
            <img id="header_logo" src="<?php echo get_template_directory_uri(); ?>/image/logo/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/image/logo/logo.png 1x, <?php echo get_template_directory_uri(); ?>/image/logo/logo@2x.png 2x" alt="manma">
          </a>
        </div>
        <div id="menu" class="col-xs-6 col-sm-12 col-md-9">
          <nav class="navbar main-menu margin-0" role="navigation">
            <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" type="button">MENU</button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-right navbar-nav">
                <li><a href="<?php echo get_site_url(); ?>/medias/">MEDIA<br>メディア掲載一覧</a></li>
                <li><a href="<?php echo get_site_url(); ?>/team/">TEAM<br>スタッフ一覧</a></li>
                <li><a href="http://manma.co/blog/" target="_blank">BLOG<br>家族留学レポート</a></li>
                <li><a href="<?php echo get_site_url(); ?>/recruit/">RECRUIT<br>スタッフ募集</a></li>
                <li class="hide-xs"><a class="action-btn" href="<?php echo get_site_url(); ?>/contact/" target="_blank"><button class="button btn">CONTACT<br>お問い合わせ</button></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  <?php wp_head(); ?>
  </header>

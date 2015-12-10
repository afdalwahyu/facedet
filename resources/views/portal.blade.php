<!DOCTYPE html>
<html class="mdl-js" lang="en-US"><head>

<title>FaceDet | Facebook Detik Integration</title>
<script type="text/javascript" src="assets/wp-emoji-release.js"></script>
<style type="text/css">
	img.wp-smiley,
	img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 .07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel="stylesheet" id="mdlwp-mdl-css-css" href="assets/material.css" type="text/css" media="all">
<link rel="stylesheet" id="mdlwp-mdl-icons-css" href="assets/icon.css" type="text/css" media="all">
<link rel="stylesheet" id="mdlwp-mdl-roboto-css" href="assets/css.css" type="text/css" media="all">
<link rel="stylesheet" id="mdlwp-style-css" href="assets/style.css" type="text/css" media="all">
<script type="text/javascript" src="assets/jquery.js"></script>
<script type="text/javascript" src="assets/jquery-migrate.js"></script>

</head>

<body class="home blog group-blog mdl-color-text--grey-700 mdl-base">
<div class="mdl-layout__container"><div data-upgraded=",MaterialLayout" id="page" class="hfeed site mdl-layout mdl-js-layout mdl-layout--fixed-header has-drawer is-upgraded">

<header id="masthead" class="site-header mdl-layout__header is-casting-shadow" role="banner">
	<div class="mdl-layout__drawer-button">
		<i class="material-icons">menu</i>
	</div>
	<div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">FaceDet</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>

			<div data-upgraded=",MaterialTextfield" class="mdlwp-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width is-upgraded">
				<form role="search" method="get" class="search-form" action="">
					<label data-upgraded=",MaterialButton" class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
					    <i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" name="s" id="fixed-header-drawer-exp" type="text">
					</div>
				</form>
	    </div>

      <!-- Navigation. We hide it in small screens. -->
      <div class="mdlwp-navigation-container">
	    <nav class="mdl-navigation mdl-layout--large-screen-only">
			</nav>
			</div>
    </div>
</header>


@foreach ($data->item as $item)
<main class="mdl-layout__content">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main mdl-grid mdlwp-900" role="main">

				<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
					<article id="post-60" class="post-60 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-city tag-sky tag-tag">

						<div class="mdl-card__media" style="background-image:url('{{$item->images->cover}}'); ">
							<header>
								<h3><a style="" href="" rel="bookmark">{{$item->title}}</a></h3>
							</header><!-- .entry-header -->
						</div>

						<div class="entry-content mdl-color-text--grey-600 mdl-card__supporting-text">
							<p>{{$item->summary}}</p>
				<p><a data-upgraded=",MaterialButton,MaterialRipple" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" href="baca/{{base64_encode($item->link)}}">Read More<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a></p>

									</div><!-- .entry-content -->

						<footer class="entry-footer meta mdl-card__actions mdl-card--border">

							<div class="avatar-img">
								<img alt="" src="assets/70cf167a8a0a7fc3d83950b60cb537a7.jpg" srcset="http://1.gravatar.com/avatar/70cf167a8a0a7fc3d83950b60cb537a7?s=64&amp;d=mm&amp;r=g 2x" class="avatar avatar-32 photo" height="32" width="32">
							</div>
					    <div class="entry-meta">
								<strong class="byline"> <span class="author vcard">{{$item->penulis}}</span></strong>
								<span class="posted-on">
										<time class="entry-date published updated" datetime="2015-07-10T18:46:38+00:00">{{$item->date->publish}}</time>
								</span>
							</div><!-- .entry-meta -->

						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->
				</div><!-- .mdl-cell -->
@endforeach

		<nav class="mdlwp-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col" role="navigation">
			<div class="section-spacer"></div>
					<a href="http://materialdesignthemes.com/demo/mdlwp/page/2/" class="mdlwp-nav__button">Older
	          <button data-upgraded=",MaterialButton,MaterialRipple" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
	            <i class="material-icons">arrow_forward</i>
	          <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button></a>
		</nav><!-- .navigation -->

		</main><!-- #main -->
	</div><!-- #primary -->


	</div><!-- #content -->

	</main> <!-- .mdl-layout__content -->
<div class="mdl-layout__obfuscator"></div></div></div><!-- #page -->

<script type="text/javascript" src="assets/material.js"></script>
<script type="text/javascript" src="assets/scripts.js"></script>



</body>
</html>

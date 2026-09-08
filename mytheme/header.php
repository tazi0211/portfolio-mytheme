<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ポートフォリオ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="format-detection" content="telephone=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

  <header class="header-wrap">

  <body>

<div class="l-header">
	<div class="l-header__left">
		<a href="<?php echo esc_url( home_url('/') ); ?>">
			Tatsuya Somei
		</a>
	</div>
	<div class="l-header__right">
		<nav class="l-header__right__nav" id="js-nav">
			<ul class="l-header__right__nav-list">
				<li class="l-header__right__nav-list__item"><a href="<?php echo esc_url( home_url('/') ); ?>" class="l-header__right__nav-list__item-link">Home</a></li>
				<li class="l-header__right__nav-list__item"><a href="<?php echo esc_url( home_url('/about/') ); ?>" class="l-header__right__nav-list__item-link">About</a></li>
			</ul>
		</nav>

		<button class="l-header__right__hamburger" id="js-hamburger">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
</div>

</header>







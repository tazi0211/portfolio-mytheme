<?php get_header(); ?>

<div class="p-fv">

  <div class="p-fv__bg"></div>

  <svg class="p-fv__svg" viewBox="0 0 1200 600" fill="none" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <linearGradient id="black-gloss-main" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#1E293B" stop-opacity="0.2" />
        <stop offset="25%" stop-color="#0F172A" />
        <stop offset="50%" stop-color="#FFFFFF" />
        <stop offset="70%" stop-color="#090A0B" />
        <stop offset="100%" stop-color="#334155" stop-opacity="0.2" />
      </linearGradient>
      <linearGradient id="light-pulse-grad" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0" />
        <stop offset="50%" stop-color="#FFFFFF" stop-opacity="1" />
        <stop offset="100%" stop-color="#FFFFFF" stop-opacity="0" />
      </linearGradient>
      <filter id="rich-line-shadow" x="-20%" y="-20%" width="140%" height="140%">
        <feDropShadow dx="0" dy="8" stdDeviation="10" flood-color="#000000" flood-opacity="0.18" />
      </filter>
      <filter id="intersection-glow" x="-50%" y="-50%" width="200%" height="200%">
        <feGaussianBlur stdDeviation="6" result="blur" />
        <feComposite in="SourceGraphic" in2="blur" operator="over" />
      </filter>
    </defs>
    <g class="p-fv__grid" stroke="#000000" stroke-opacity="0.04" stroke-width="1">
      <line x1="0" y1="150" x2="1200" y2="150" />
      <line x1="0" y1="300" x2="1200" y2="300" />
      <line x1="0" y1="450" x2="1200" y2="450" />
      <line x1="300" y1="0" x2="300" y2="600" />
      <line x1="600" y1="0" x2="600" y2="600" />
      <line x1="900" y1="0" x2="900" y2="600" />
    </g>
    <path class="p-fv__line p-fv__line--sub" d="M -50 -20 C 250 150, 480 480, 780 400 C 950 350, 1100 420, 1250 450" stroke="#0F172A" stroke-opacity="0.25" stroke-width="1.8" stroke-dasharray="6 6" fill="none" />
    <path class="p-fv__line p-fv__line--main-base" d="M -50 100 C 280 200, 420 540, 780 400 C 920 340, 1080 460, 1250 410" stroke="#090A0B" stroke-width="3" fill="none" filter="url(#rich-line-shadow)" />
    <path class="p-fv__line p-fv__line--main-gloss" d="M -50 100 C 280 200, 420 540, 780 400 C 920 340, 1080 460, 1250 410" stroke="url(#black-gloss-main)" stroke-width="2.5" fill="none" />
    <path class="p-fv__line p-fv__line--light-pulse" d="M -50 100 C 280 200, 420 540, 780 400 C 920 340, 1080 460, 1250 410" stroke="url(#light-pulse-grad)" stroke-width="3" fill="none" />
    <g class="p-fv__intersection">
      <circle class="p-fv__ripple" cx="780" cy="400" r="10" fill="none" stroke="#090A0B" stroke-width="1.5" />
      <circle class="p-fv__ripple p-fv__ripple--delay" cx="780" cy="400" r="10" fill="none" stroke="#090A0B" stroke-width="1" />
      <circle class="p-fv__core-outer" cx="780" cy="400" r="22" fill="#090A0B" opacity="0.08" />
      <circle class="p-fv__core" cx="780" cy="400" r="8" fill="#090A0B" filter="url(#intersection-glow)" />
      <circle class="p-fv__core-dot" cx="780" cy="400" r="3" fill="#FFFFFF" />
    </g>
  </svg>
  <div class="p-fv__content">
    <h1 class="p-fv__title">
      <span class="p-fv__title__first-line">想いをカタチにして、</span>
      <span class="p-fv__title__second-line">人と人をつなぐデザインを。</span>
    </h1>
  </div>
  <a href="#about" class="p-fv__btn">ABOUT ME</a>
</div>

<div id="contents" class="l-contents-in">
	<section id="about" class="p-prof">
		<div class="p-prof__left">
			<div class="p-prof__left__img"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/prof_img2.jpg" alt="" loading="lazy"></div>
			<div class="p-prof__left__textwrap">
				<p class="p-prof__left__textwrap__name"><span class="p-prof__left__textwrap__job">Desiner</span>Tatsuya Somei</p>
			</div>
		</div>
		<div class="p-prof__right">
			<h2 class="c-heading-en">ABOUT</h2>
			<h3 class="c-heading-sub">目指すのは「また依頼したい」「また一緒に仕事がしたい」と言われるデザイナー。</h3>
			<p class="p-prof__right__text">
				大学卒業後、LEGOLAND Japan合同会社に入社し、主にイベント関連の業務を担当。ウェブサイトのキービジュアルやパーク内の看板などのデザイン制作に携わったことをきっかけにデザインに興味を持ち、ウェブデザイナーへの転職を決意。コーディングを独学で学び、2020年7月にウェブ制作会社へデザイナー兼コーダーとして入社しました。<br>
				約90件のプロジェクトに携わり、デザインからコーディングまで一貫して担当。その後、システム会社ではフロントエンドチームの一員として、コードやデザインの可読性・再利用性を意識した設計について学び、保守性・管理性を考慮したコンポーネント設計を基盤とする開発に取り組んできました。<br>
				2024年9月からは株式会社セレスと業務委託契約を結び、LPや販促物、EC画像の制作から、各種マーケティング施策に伴うコンテンツ追加まで幅広く担当。デザイン領域にとどまらず、GASを用いた業務自動化ツールの構築や、大規模サイトへのCSS変数の導入、rem単位への移行など、保守性やアクセシビリティの向上にも取り組んでいます。
			</p>
			<h2 class="c-heading-en u-mt-32">EXPERIENCE</h2>
			<h3 class="c-heading-sub">【デザインツール】</h3>
			<ul class="p-prof__right__list">
				<li>Figma</li>
				<li>Illustrator</li>
				<li>Photoshop</li>
				<li>Adobe XD</li>
			</ul>
			<h3 class="c-heading-sub">【言語】</h3>
			<ul class="p-prof__right__list">
				<li>HTML5(pug可)</li>
				<li>CSS3(Scss, bem-flocss可)</li>
				<li>Javascript</li>
				<li>TypeScript</li>
			</ul>
			<h3 class="c-heading-sub">【フレームワーク/ライブラリ】</h3>
			<ul class="p-prof__right__list">
				<li>jQuery</li>
				<li>Node.js</li>
			</ul>
			<h3 class="c-heading-sub">【管理コミュニケーションツール】</h3>
			<ul class="p-prof__right__list">
				<li>Backlog</li>
				<li>Slack</li>
				<li>Chatwork</li>
				<li>GitHub</li>
				<li>Redmine</li>
				<li>Trello</li>
			</ul>
			<h3 class="c-heading-sub">【開発/仮想環境】</h3>
			<ul class="p-prof__right__list">
				<li>npm</li>
				<li>yarn</li>
				<li>Gulp</li>
				<li>Docker</li>
			</ul>
		</div>
	</section>
		
	<section class="u-mt-56">
		<h2 class="c-heading-en">WORKS</h2>
		<ul class="p-works">
			<li class="p-works__item">
				<a href="https://regolith.diezon.co.jp/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/cording-image01.png" alt="Regolith" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">Regolith</p>
							<p class="p-works__item__textwrap__bottom">コーディング(bem-flocss)</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://alphamanagement.co.jp/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/design1.jpg" alt="株式会社Alpha Management" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">株式会社Alpha Management</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://furukawa-o.tokyo/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design41.jpg" alt="古川おもてなし" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">古川おもてなし</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://houselinkers.co.jp/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design11.jpg" alt="ハウスリンカーズ株式会社" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">ハウスリンカーズ株式会社</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://rebeat-catta.jp/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design52.jpg" alt="株式会社rebeat" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">株式会社rebeat</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://studionagara.com/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design17.jpg" alt="リアン合同会社" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">リアン合同会社</p>
							<p class="p-works__item__textwrap__bottom">ディレクション / デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://inoshita.com/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design4.jpg" alt="いのした歯科医院" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">いのした歯科医院</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://tamagoya-meat.jp/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design40.jpg" alt="玉子屋牛肉店" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">玉子屋牛肉店</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://hojjudo-shinkyu.com/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design46.jpg" alt="宝寿堂鍼灸治療院" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">宝寿堂鍼灸治療院</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://bipjapan.co.jp/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design32.jpg" alt="株式会社ビー・アイ・ピー・ジャパン" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">株式会社ビー・アイ・ピー・ジャパン</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://yurisuko-resort.com/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design39.jpg" alt="株式会社ユリスコ" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">株式会社ユリスコ</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://sanukiudon-yoshimoto.com/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design38.jpg" alt="有限会社吉本食品" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">有限会社吉本食品</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://i-do-hp.com/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design20.jpg" alt="株式会社I-do" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">株式会社I-do</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://curehouse.co.jp/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design30.jpg" alt="キュアハウス鍼灸治療院院" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">キュアハウス鍼灸治療院院</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://marumo.in/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design34.jpg" alt="株式会社マルモ美容" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">株式会社マルモ美容</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
			<li class="p-works__item">
				<a href="https://gasendo.net/" target=”_blank” rel=noopener>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design18.jpg" alt="画仙堂整骨院" class="p-works__item__img" loading="lazy">
						<div class="p-works__item__textwrap">
							<p class="p-works__item__textwrap__top">画仙堂整骨院</p>
							<p class="p-works__item__textwrap__bottom">デザイン / コーディング</p>
						</div>
					</a>
			</li>
		</ul>
			
		<h3 class="c-heading-en-sub u-mt-40">BANNER DESIGN</h3>
		<ul class="p-works-banner">
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner-cut.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner-ooban.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner-order.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner-sdgs.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner-web-order.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<!-- <li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner-outlet.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li> -->
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner01.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner02.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner03.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner04.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner05.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner06.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
			<li class="p-works-banner__item"><img src="<?php echo get_template_directory_uri(); ?>/images/contents/banner07.jpg" alt="バナー" class="p-works-banner__item__img" loading="lazy"></li>
		</ul>

		<h3 class="c-heading-en-sub u-mt-40">SITE DESIGN</h3>
		<ul class="p-works">
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design27.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design27.jpg"
						alt="株式会社ウエルプデザイン" loading="lazy"
					>
					<p class="p-works__item__text">株式会社ウエルプデザイン</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design19.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design19.jpg"
						alt="株式会社GrowthRing" loading="lazy"
					>
					<p class="p-works__item__text">株式会社GrowthRing</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design5.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design5.jpg"
						alt="おおたレディースクリニック" loading="lazy"
					>
					<p class="p-works__item__text">おおたレディースクリニック</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design6.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design6.jpg"
						alt="すみだ学習会様" loading="lazy"
					>
					<p class="p-works__item__text">すみだ学習会様</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design25.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design25.jpg"
						alt="株式会社アネックスアート" loading="lazy"
					>
					<p class="p-works__item__text">株式会社アネックスアート</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design26.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design26.jpg"
						alt="株式会社インヴィアッジョ" loading="lazy"
					>
					<p class="p-works__item__text">株式会社インヴィアッジョ</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design50.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design50.jpg"
						alt="有限会社後藤工務店(sp)" loading="lazy"
					>
					<p class="p-works__item__text">有限会社後藤工務店(sp)</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design51.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design51.jpg"
						alt="有限会社坂口" loading="lazy"
					>
					<p class="p-works__item__text">有限会社坂口</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design48.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design48.jpg"
						alt="有限会社ピーシーエイチ" loading="lazy"
					>
					<p class="p-works__item__text">有限会社ピーシーエイチ</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design31.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design31.jpg"
						alt="株式会社にこのいえ" loading="lazy"
					>
					<p class="p-works__item__text">株式会社にこのいえ</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design37.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design37.jpg"
						alt="株式会社三矢電工" loading="lazy"
					>
					<p class="p-works__item__text">株式会社三矢電工</p>
			</li>
			<li class="p-works__item">
					<img
						class="js-modal-image p-works__item__img"
						src="<?php echo get_template_directory_uri(); ?>/images/contents/th_design47.jpg"
						data-modal-image="<?php echo get_template_directory_uri(); ?>/images/contents/th_design47.jpg"
						alt="有限会社チクマ設備材" loading="lazy"
					>
					<p class="p-works__item__text">有限会社チクマ設備材</p>
			</li>
		</ul>

		<!-- モーダル -->
		<div class="p-works__modal" id="js-modal">
			<div class="p-works__modal__overlay" id="js-modal-overlay"></div>
			<div class="p-works__modal__content">
				<button class="p-works__modal__content__close" id="js-modal-close">×</button>
				<img
					class="p-works__modal__content__img"
					id="js-modal-image"
					src=""
					alt=""
				>
			</div>
		</div>
	</section>
</div>
 
   <?php get_footer(); ?>

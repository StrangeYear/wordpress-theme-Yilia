<nav id="mobile-nav">
	<div class="overlay">
		<div class="slider-trigger"></div>
		<h1 class="header-author js-mobile-header hide">
			<a href="/" title="回到主页"><?php bloginfo('name');?></a>
		</h1>
	</div>
	<div class="intrude-less">
		<header id="header" class="inner">
			<a href="/" class="profilepic"> <img
				src="<?php bloginfo('template_url'); ?>/img/head.jpg" class="animated zoomIn">
			</a>
			<hgroup>
				<h1 class="header-author">
					<a href="<?php echo get_option('home'); ?>" title="回到主页"><?php bloginfo('name');?></a>
				</h1>
			</hgroup>
			<p class="header-subtitle"><?php bloginfo('description');?></p>
			<nav class="header-menu">
				<ul>
					<li><a href="<?php echo get_option('home'); ?>">主页</a></li>
					<?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>
					<div class="clearfix"></div>
				</ul>
			</nav>
			<nav class="header-nav">
				<ul class="social">
					<a class="fa Email" target="_blank" href="mailto:546489979@qq.com"
						title="Email"></a>
					<a class="fa weibo" target="_blank"
						href="http://weibo.com/2631818491/" title="新浪微博"></a>
					<a class="fa QQ" target="_blank"
						href="http://sighttp.qq.com/msgrd?v=3&uin=546489979&site=&menu=yes"
						title="QQ"></a>
				</ul>
			</nav>
		</header>
	</div>
	<link class="menu-list" tags="标签" friends="友情链接" about="关于我" />
</nav>
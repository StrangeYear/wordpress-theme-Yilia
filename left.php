<div class="left-col">
	<div class="overlay"></div>
	<div class="intrude-less">
		<header id="header" class="inner">
			<a href="<?php echo get_option('home'); ?>" class="profilepic"> <img
				src="<?php bloginfo('template_url'); ?>/img/head.jpg" class="animated zoomIn">
			</a>
			<hgroup>
				<h1 class="header-author">
					<a href="/"><?php bloginfo('name');?></a>
				</h1>
			</hgroup>
			<p class="header-subtitle"><?php bloginfo('description');?></p>
			<form action="/" id="search-form">
				<input type="text" id="local-search-input" name="s"
					placeholder="搜索..." class="search form-control" autocomplete="off"
					autocorrect="off" searchonload="false" />
			</form>
			<div id="switch-btn" class="switch-btn">
				<div class="icon">
					<div class="icon-ctn">
						<div class="icon-wrap icon-house" data-idx="0">
							<div class="birdhouse"></div>
							<div class="birdhouse_holes"></div>
						</div>
						<div class="icon-wrap icon-ribbon hide" data-idx="1">
							<div class="ribbon"></div>
						</div>
						<div class="icon-wrap icon-me hide" data-idx="3">
							<div class="user"></div>
							<div class="shoulder"></div>
						</div>
					</div>
				</div>
				<div class="tips-box hide">
					<div class="tips-arrow"></div>
					<ul class="tips-inner">
						<li>菜单</li>
						<li>标签</li>
						<li>关于我</li>
					</ul>
				</div>
			</div>
			<div id="switch-area" class="switch-area">
				<div class="switch-wrap">
					<section class="switch-part switch-part1">
						<nav class="header-menu">
							<ul>
								<li><a href="<?php echo get_option('home'); ?>">主页</a></li>
								<?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>
							</ul>
						</nav>
						<nav class="header-nav">
							<ul class="social">
								<a class="fa Email" href="mailto:546489979@qq.com" title="Email"></a>
								<a class="fa weibo" href="http://weibo.com/2631818491/"
									title="新浪微博"></a>
								<a class="fa QQ"
									href="http://sighttp.qq.com/msgrd?v=3&uin=546489979&site=&menu=yes"
									title="QQ"></a>
							</ul>
						</nav>
					</section>
					<section class="switch-part switch-part2">
									<div class="widget tagcloud" id="js-tagcloud"><ul class="tag-list">
										<?php 
			  							$args = array(
			    									'taxonomy'  => 'post_tag',
			    									'type' =>true
			   							); 
			 							tag_cloud($args);
								?>	
									</ul></div>
					</section>
					<section class="switch-part switch-part3">
						<div id="js-aboutme">不念过去，不忘将来。</div>
					</section>
				</div>
			</div>
		</header>
	</div>
</div>
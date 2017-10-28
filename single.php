<?php get_header(); ?>
</head>
<body>
	<div id="container">
		<!-- 左边栏 -->
		<?php include 'left.php'; ?>
		<div class="mid-col">
			<?php include 'nav.php'; ?>
			<div class="body-wrap">
				<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
				<article id="post-Memoirs" class="article article-type-post"
					itemscope itemprop="blogPost">
					<div class="article-meta">
						<?php edit_post_link('编辑', '', ''); ?>
						<span class="post-count"
							style="float: right; color: #aaa; font-size: 0.85rem;">本文章字数：<?php echo count_words($post->post_content); ?>字</span>
							<br><br>
						<time itemprop="datePublished">
							<?php the_time('Y年n月j日') ?>
						</time>
					</div>
					<div class="article-inner">
						<input type="hidden" class="isFancy" />
						<header class="article-header">
							<h1 class="article-title" itemprop="name"><?php the_title(); ?>
							</h1>
						</header>
						<div class="article-info article-info-post">
							<?php 
						    		$cat = get_the_category();
						    		if($cat){
						    			echo '<div class="article-category tagcloud">';
						    			foreach($cat as $key=>$category)
									{
									    echo '<a class="article-category-link" href="'.get_category_link($category->cat_ID).'">'.$category->cat_name.'</a>';
									}
									echo '</div>';
						    		}
						    	?>
								  <?php the_tags('<div class="article-tag tagcloud"><ul class="article-tag-list"> <li class="article-tag-list-item">','</ li> <li class="article-tag-list-item">','</ li> </ ul> </div>'); ?>
							<div class="clearfix"></div>
						</div>
						<div class="article-entry" itemprop="articleBody">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="copyright">
						<p>
							<span>本文标题:</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</p>
						<p>
							<span>文章作者:</span><a href="<?php echo get_option('home'); ?>" title="回到主页"><?php the_author(); ?></a>
						</p>
						<p>
							<span>发布时间:</span>
							<?php the_time('Y-n-j H:i:s') ?>
						</p>
						<p>
							<span>最后更新:</span>
							<?php the_modified_time('Y-n-j G:i:s') ?>
						</p>
						<p>
							<span>原始链接:</span><a class="post-url"
								href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_permalink(); ?></a>
							<span class="copy-path"
								data-clipboard-text="原文: <?php the_permalink(); ?> 作者: <?php the_author(); ?>"
								title="点击复制文章链接"><i class="fa fa-clipboard"></i></span>
							<script> var clipboard = new Clipboard('.copy-path'); </script>
						</p>
						<p>
							<span>许可协议:</span><i class="fa fa-creative-commons"></i> <a
								rel="license"
								href="http://creativecommons.org/licenses/by-nc-sa/4.0/"
								title="CC BY-NC-SA 4.0 International" target="_blank">"署名-非商用-相同方式共享
								4.0"</a> 转载请保留原文链接及作者。
						</p>
					</div>
					<nav id="article-nav">
						<div id="article-nav-newer" class="article-nav-title">
							<!-- 前一篇文章 -->
									<?php if (get_previous_post()) { previous_post_link('%link');} else {echo '<a href="javascript:;">前面已经木有了o(*￣3￣)o </a>';} ?>
						</div>
						<div id="article-nav-older" class="article-nav-title">
							<!-- 后一篇文章 -->
							<?php if (get_next_post()) { next_post_link('%link');} else {echo '<a href="javascript:;">后面已经木有了o(*￣3￣)o </a>';} ?>
						</div>
					</nav>
				</article>
				
				<div class="share">
					<div class="bdsharebuttonbox">
						<a href="#" class="fa fa-weibo bds_tsina" data-cmd="tsina"
							title="分享到新浪微博"></a> <a href="#" class="fa fa-qq bds_sqq"
							data-cmd="sqq" title="分享给 QQ 好友"></a> <a href="#"
							class="fa fa-files-o bds_copy" data-cmd="copy" title="复制网址"></a>
						<a href="#" class="fa fa fa-envelope-o bds_mail" data-cmd="mail"
							title="通过邮件分享"></a> <a href="#" class="fa fa-weixin bds_weixin"
							data-cmd="weixin" title="生成文章二维码"></a> <a href="#"
							class="fa fa-share-alt bds_more" data-cmd="more"></i></a>
					</div>
					<script>
            window._bd_share_config={
                "common":{"bdSnsKey":{},"bdText":"<?php the_title(); ?>| <?php bloginfo('name'); ?>","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
        </script>
				</div>
				<section id="comments">
					<!-- 这里面是评论模块 -->
					<?php if(comments_open()): comments_template(); endif;?>
				</section>
			</div>
				<?php endif; ?>
<?php include 'footer.php'; ?>
</body>
</html>
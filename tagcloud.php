<?php 
/*
    Template Name: TagCloud
*/ 
?>

<?php get_header(); ?>
<style>
.category-list li {
	display: inline-block;
	margin: 0 1em .5em 0;
	padding: 4px;
	border: 1px solid lightgray;
	font-size: 1.2rem;
}

.category-list a {
	color: gray;
}

.category-list-item:hover a {
	color: gray;
	text-decoration: none;
	font-weight: bold;
}

.category-list-count {
	margin-left: 2px;
	font-size: .9rem;
}

.article-entry ul li:before {
	display: none;
}

.article-inner {
	text-align: center;
}

.tags {
	max-width: 40em;
	margin: 2em auto;
	margin-top: 0em;
}

.tags a {
	margin-right: 1em;
	line-height: 65px;
	border-bottom: 1px solid gray;
	white-space: nowrap;
	transition: border-bottom .5s;
}

.tags a:hover {
	border-bottom: 3px dotted gray;
	text-decoration: none;
}

#count>span {
	margin: auto .2em;
	font-weight: bold;
}

.article-meta {
	display: none;
}

#container .article .article-title {
	padding-right: 0;
}

.article-header {
	padding: 0;
	padding-top: 26px;
	border-left: none;
	text-align: center;
}

.article-header:hover {
	border-left: none;
}

.article-title {
	font-size: 1.6em
}

.article-entry hr {
	margin: 0;
}

.article-meta, #container .article-info-post.article-info {
	display: none;
}

#container .article .article-title {
	padding: 0;
}
</style>
</head>
<body>
	<div id="container">
		<!-- 左边栏 -->
		<?php include 'left.php'; ?>
		<div class="mid-col">
			<?php include 'nav.php'; ?>
			<div class="body-wrap">
				<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	<article id="page-undefined" class="article article-type-page"
					itemscope itemprop="blogPost">
					<div class="article-meta">
						<br> <br>
					</div>
					<div class="article-inner">
						<input type="hidden" class="isFancy" />
						<header class="article-header">
							<h1 class="article-title" itemprop="name">分类&amp;标签</h1>
						</header>
						<div class="article-info article-info-post">
							<div class="clearfix"></div>
						</div>
						<div class="article-entry" itemprop="articleBody">
							<!-- Tag Cloud Page -->
							<hr>
							<br>
								<ul class='category-list' role='list'>
								<?php 
  							$args = array(
    									'taxonomy'  => 'category', 
    									'format' => 'list',
    									'show_count' => true,
   							); 
 							tag_cloud($args);
							?>
							</ul>
							<p class="count">
								
							</p>
							<div class="tags">
								<?php 
  							$args = array(
    									'taxonomy'  => 'post_tag', 
    									'show_count' => true,
   							); 
 							tag_cloud($args);
							?>					
							</div>
							<!-- Count tags and categories -->
							<p id="count">
								已有<span><script>document.write($(".category-list-item").length)</script></span>个分类，
								共计<span><script>document.write($(".tags > a").length)</script></span>个标签
							</p>
							<script>
    $('#count').appendTo('.count');
</script>
						</div>
					</div>
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
					<?php comments_template(); ?>
				</section>
			</div>
				<?php endif; ?>
<?php include 'footer.php'; ?>
</body>
</html>

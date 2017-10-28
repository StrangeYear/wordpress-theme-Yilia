<?php get_header(); ?>
<body>
	<div id="container">
		<!-- 引入电脑端和移动端导航栏 -->
		<?php include 'left.php'; ?>
		<div class="mid-col">
			<?php include 'nav.php'; ?>
			<div class="body-wrap">
				<!-- Blog Post -->
				<section class="archives-wrap">
					<div class="archives">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="archive-article archive-type-post">
							<div class="archive-article-inner">
								<header class="archive-article-header">
									<div class="article-meta">
										<time itemprop="datePublished"><?php the_time('Y年n月j日') ?></time></div> 
										<h1 itemprop="name"><a class="archive-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
										<div class="article-info info-on-archive" style="display: block;">
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
										</div>
										<div class="clearfix"></div>
									</header>
								</div>
							</article>
			<?php endwhile; ?>
			</div>
		</section>
			<?php endif; ?>
					<?php pagenav();?>
			</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
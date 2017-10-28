<?php get_header(); ?>
<body>
	<div id="container">
		<!-- 引入电脑端和移动端导航栏 -->
		<?php include 'left.php'; ?>
		<div class="mid-col">
			<?php include 'nav.php'; ?>
			<div class="body-wrap">
				<!-- Blog Post -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-blog-building" class="article article-type-post" itemscope itemprop="blogPost">
    					<div class="article-meta">
				      <a href="<?php the_permalink(); ?>" class="article-date">
				      <time datetime="2015-08-19T16:00:00.000Z" itemprop="datePublished"><?php the_time('Y年n月j日') ?></time>
					  </a>
    					</div>
  
  					<div class="article-inner">
					      <input type="hidden" class="isFancy" />
					      <header class="article-header">
		   						 <h1 itemprop="name">
		      						<a class="article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    						</h1>
					      </header>
						<div class="article-entry" itemprop="articleBody">
								 <!-- Post Content -->
								<?php the_excerpt(); ?>
    						</div>
    
    					<div class="article-info article-info-index">
    							<?php if (is_sticky() && is_home()): ?>  
					        <div class="article-pop-out tagcloud">
					          <a class="color<?php echo rand(1,6) ?>">置顶</a>
					        </div>
					        <?php endif;?>
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
						        <p class="article-more-link">
						        		<?php edit_post_link('编辑', '', ''); ?>
						          <a href="<?php the_permalink(); ?>">阅读全文</a>
						        </p>
				      <div class="clearfix"></div>
    				</div>
  			</div>
			</article>
			<?php endwhile; ?>
			<?php endif; ?>
					<?php pagenav();?>
			</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
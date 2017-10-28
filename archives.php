<?php 
/*
    Template Name: Archives
*/ 
?>
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
			<?php 
				$args = array(
   					 'ignore_sticky_posts' => 1,//忽略sticky_posts即置顶
   					 'paged' =>$paged,
   					 'showposts'=>30,
				);
				$query = new WP_Query( $args );
				if ($query->have_posts()) : 
				 $mon=0;
				?>
					<?php while ($query->have_posts()) :$query-> the_post(); 
						$year_tmp = get_the_time('Y');
             			$mon_tmp = get_the_time('m');
						if($mon<1){
							echo '<div class="archive-year-wrap"><a href="/'.$year_tmp.'/'.$mon_tmp.'" class="archive-year">'.$year_tmp.'/'.$mon_tmp.'</a></div>';
							$mon=$mon_tmp;
						}else{
							if($mon_tmp!=$mon&&$mon_tmp>0){
								echo '<div class="archive-year-wrap"><a href="/'.$year_tmp.'/'.$mon_tmp.'" class="archive-year">'.$year_tmp.'/'.$mon_tmp.'</a></div>';
							}
						}
						?>
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
					<?php pagenav(true,wp_count_posts()->publish);?>
			</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
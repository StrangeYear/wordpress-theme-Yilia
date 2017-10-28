			<footer id="footer">
				<div class="outer">
					<div id="footer-info">
						<div class="footer-left">
							<i class="fa fa-copyright"></i> 2016-2017 <?php bloginfo('name'); ?>
						</div>
						<div class="footer-right">
							by <?php bloginfo('name'); ?> <i class="fa fa-heart animated infinite pulse"></i>
						</div>
					</div>
					<div class="visit">
 						<span id="busuanzi_container_site_pv" style='display:none'>
                        		<span id="site-visit" title="本站到访数"><i class="fa fa-user" aria-hidden="true"></i><span id="busuanzi_value_site_uv"></span>
                        		</span>
                   		 </span>
                    			<span>| </span>
                    		<span id="busuanzi_container_page_pv" style='display:none'>
                        		<span id="page-visit"  title="本页阅读量"><i class="fa fa-eye animated infinite pulse" aria-hidden="true"></i><span id="busuanzi_value_page_pv"></span>
                        		</span>
                    		</span>
					</div>
				</div>
			</footer>
		</div>
<?php if ( is_single() ){echo "</div>";} ?>
<script async src="//dn-lbstatics.qbox.me/busuanzi/2.3/busuanzi.pure.mini.js"></script>
<script data-main="<?php bloginfo('template_url'); ?>/js/main.js"
			src="//cdn.bootcss.com/require.js/2.2.0/require.min.js"></script>
	<script type="text/javascript">
	//改变标签的颜色
	$(".article-tag-list li a,.article-category-link").each(function(){
	var c="color"+Math.floor(Math.random()*7);
	$(this).addClass(c);
	});
</script>
<div class="scroll" id="scroll">
		<a href="#" title="返回顶部"><i class="fa fa-arrow-up"></i></a> 
		<a href="#comments" onclick="load$hide();" title="查看评论"> <i class="fa fa-comments-o"></i></a> 
		<a href="#footer" title="转到底部"> <i class="fa fa-arrow-down"></i></a>
</div>
<script>
	$(document).ready(function() {
			var backgroundnum = 5;
			var str = "url(<?php bloginfo('template_url'); ?>/background/bg-x.jpg)"
			var backgroundimg = str.replace(/x/gi, Math.ceil(Math.random()* (backgroundnum - 1)));
			$("body").css({ "background": backgroundimg,"background-attachment": "fixed", "background-size": "cover"});
			//获取所有的标签，并且改变左边栏的标签的颜色
//			$.ajax({
//				type:'POST',
//				url:'/tag/queryAll',
//				data:{},
//				dataType:'json',
//				success:function(result){
//					var _html="";
//					for(var i in result){
//						_html+="<li class=\"tag-list-item\"><a class=\"tag-list-link color"+Math.floor(Math.random()*7)+"\" href=\"/tag/show/"+result[i].tagUrl+"\" title=\"此标签"+result[i].tagNums+"篇文章\">"+result[i].tagName+"</a></li>";
//					}
//					$('#js-tagcloud .tag-list').empty();
//					$('#js-tagcloud .tag-list').append(_html);
//				}
//			})
	})
	
        var oOpenInNew = {
             title: "a.article-title, .article-more-link a", 
             tags: ".article-tag a", 
             archives: ".archive-article-title", 
             miniArchives: "a.post-list-link", 
             menu: ".header-menu a", 
             socail: ".social a" 
        }
        for (var x in oOpenInNew) {
            $(oOpenInNew[x]).attr("target", "_blank");
        }
        var originTitle = document.title;
        var titleTime;
        document.addEventListener("visibilitychange", function() {
            if (document.hidden) {
                document.title = "(つェ⊂) 我藏好了哦~ " + originTitle;
                clearTimeout(titleTime);
            }
            else {
                document.title = "(*´∇｀*) 被你发现啦~ " + originTitle;
                titleTime = setTimeout(function() {
                    document.title = originTitle;
                }, 8000);
            }
        })
</script>
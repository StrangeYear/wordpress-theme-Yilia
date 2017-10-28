<?php
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('请不要直接打开评论文件，谢谢');
?>
<!--PC和WAP自适应版-->
		<div id="cyEmoji" role="cylabs" data-use="emoji"
			sid="wp-<?php the_ID(); ?> "></div>
		<div id="SOHUCS" sid="wp-<?php the_ID(); ?> "></div>
		<script type="text/javascript">
			(function() {
				var appid = "cyt4gDy5l";
				var conf = "prod_606fce3f0d4e358f53998e3906d52686";
				var width = window.innerWidth
						|| document.documentElement.clientWidth;
				if (width < 960) {
					window.document
							.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id='
									+ appid + '&conf=' + conf + '"><\/script>');
				} else {
					var loadJs = function(d, a) {
						var c = document.getElementsByTagName("head")[0]
								|| document.head || document.documentElement;
						var b = document.createElement("script");
						b.setAttribute("type", "text/javascript");
						b.setAttribute("charset", "UTF-8");
						b.setAttribute("src", d);
						if (typeof a === "function") {
							if (window.attachEvent) {
								b.onreadystatechange = function() {
									var e = b.readyState;
									if (e === "loaded" || e === "complete") {
										b.onreadystatechange = null;
										a()
									}
								}
							} else {
								b.onload = a
							}
						}
						c.appendChild(b)
					};
					loadJs("https://changyan.sohu.com/upload/changyan.js",
							function() {
								window.changyan.api.config({
									appid : appid,
									conf : conf
								})
							});
				}
			})();
		</script>
		<script type="text/javascript" charset="utf-8"
			src="https://changyan.itc.cn/js/lib/jquery.js"></script>
		<script type="text/javascript" charset="utf-8"
			src="https://changyan.sohu.com/js/changyan.labs.https.js?appid=cyt4gDy5l"></script>

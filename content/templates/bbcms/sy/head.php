<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.58edu.cc/">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title;page_tit($page);?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" /><?php doAction('index_head');?><meta
	name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link href="<?php echo TEMPLATE_URL; ?>sy/1080.css" rel="stylesheet"
		type="text/css" />
	<style type="text/css">
body {
	background: <?php
	
echo _g ( 'body_ys' );
	?>;
}

a:hover, .sortlog1 .title span a, #sheli-log-nr a {
	color: <?php
	
echo _g ( 'nav_ys' );
	?>;
}

#sheli-nav, .home-log-list1 #qw, .list1 .list-bq span, .list1 .list-tt .yue,
	.sortlog1 .title p, #xg-logs-tt {
	background: <?php
	
echo _g ( 'nav_ys' );
	?>;
}

.home_ad-m, .home_ad1-m, .sortlog1, .home-log-list1, .list1 {
	border: 1px solid<?php
	
echo _g ( 'nav_ys' );
	?>;
}

.sortlog1 .title, .list1 .list-tt {
	border-bottom: 1px solid<?php
	
echo _g ( 'nav_ys' );
	?>;
}

.home-log-list1 .home-log-list-tt a, #log-list-tt-tt {
	border-left: 5px solid<?php
	
echo _g ( 'nav_ys' );
	?>;
}

.list1 .list-tt .riqi {
	border-right: 1px solid<?php
	
echo _g ( 'nav_ys' );
	?>;
}

.list1 .list-bq {
	border-top: 1px solid<?php
	
echo _g ( 'nav_ys' );
	?>;
}

#foot, .home_ad, .home_ad-m, .home_ad1, .home_ad1-m, .sy-flash_tabs a,
	.hotlog, .home-log-list, .home-log-list1, .sortlog, .sortlog1,
	.home-links, .page, .list, .list1, #sheli-log, #t-qj, .cbl-one,
	.cbl-two, .tags, #mbx {
	background: <?php
	
echo _g ( 'wzk_ys' );
	?>;
}
</style>
	<script src="<?php echo TEMPLATE_URL; ?>sy/jQuery.js"
		type="text/javascript"></script>
	<script src="<?php echo TEMPLATE_URL; ?>sy/sheli.js"
		type="text/javascript"></script>
	<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js"
		type="text/javascript"></script>

</head>
<body>
	<script>
(function(){
	var bp = document.createElement('script');
	var curProtocol = window.location.protocol.split(':')[0];
	if (curProtocol === 'https'){
		bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
	}
	else{
		bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	}
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(bp, s);
})();
</script>
	<div id="topnav">
		<ul><?php echo _g('topnav'); ?></ul>
	</div><?php //----#topnav end -----?><div id="top"><?php if (_g('logo-kg') == "tp"): ?><div
			id="logo-img">
			<img src="<?php echo _g('logo'); ?>" alt="<?php echo $blogname; ?>">
		
		</div><?php else: ?><?php endif; ?><?php if (_g('logo-kg') == "wz"): ?><div
			id="logo-wz"><?php echo $blogname; ?></div><?php else: ?><?php endif; ?>
		<p id="logo-img-url"><?php echo _g('logo-url'); ?></p>
		<div id="search">
		
		<script type="text/javascript">(function(){document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E'));var bdcs = document.createElement('script');bdcs.type = 'text/javascript';bdcs.async = true;bdcs.src = 'http://znsv.baidu.com/customer_search/api/js?sid=4234378157188534865' + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date()/3600000);var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bdcs, s);})();</script>
		
			<!-- <form name="keyform" method="get" action="<?php echo BLOG_URL; ?>">
				<input name="keyword" class="sousuo1" type="text"
					placeholder="输入搜索内容" /><input type="image" class="sousuo"
					title="搜索" src="<?php echo TEMPLATE_URL; ?>/images/go.gif" />
			</form> -->
		</div>
	</div><?php //----#top end -----?><div id="sheli-nav">
		<div id="nav"><?php blog_navi();?></div>
	</div><?php //----#sheli-nav enf----?><div id="m">
		<div id="m-logo"><?php echo _g('m_nav'); ?></div>
		<a onClick="openNav();return false;" href="#" class="nav-open"></a>
	</div>
	<div id="m-left-nav" style="display: none;">
		<div id="m-nav"><?php blog_navi();?></div>
	</div><?php //----#m enf----?><div id="main">
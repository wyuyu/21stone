<?php if(!defined('EMLOG_ROOT')) {exit('error!');} include View::getView('sy/head');?><div
	class="r-width <?php if (_g('blog-cbl') == "left"): ?>right<?php else: endif; if (_g('blog-cbl') == "right"): ?>left<?php else: endif; ?>">
	<div id="mbx">
		<p>
			现在位置：<a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a> &raquo; <?php echo $log_title; ?></p>
	</div>
	<div class="page">
		<div class="page-tt"><?php echo $log_title; ?></div>
		<div class="page-nr"><?php if (_g('log_ad-kg') == "top"): ?><?php echo _g('log_ad'); ?><?php else: endif; ?><?php echo $log_content; ?><br /><?php if (_g('log_ad-kg') == "bottom"): ?><?php echo _g('log_ad'); ?><?php else: endif; ?></div><?php if (in_array('pl-page', _g('on-off'))):?><?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); blog_comments($comments); ?><?php else: endif; ?></div>
</div>
<div class="l-width <?php echo _g('blog-cbl');?>"><?php include View::getView('side-page');?></div><?php include View::getView('footer');?>
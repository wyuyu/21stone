<?php if(!defined('EMLOG_ROOT')) {exit('error!');}include View::getView('sy/head');?><?php if (in_array('home_ad', _g('on-off'))):?><?php if (blog_tool_ishome()) :?><div
	class="home_ad" onmouseout="this.className='home_ad'"
	onmouseover="this.className='home_ad-m'"><?php echo _g('home_ad'); ?></div><?php endif; ?><?php else: endif; ?><?php if (in_array('flash', _g('on-off'))):?><div
	class="sheli-flash left">
	<ul class="sy-flash" id="flash"><?php echo _g('flash_ad'); ?><?php home_slideshow(); ?></ul>
</div><?php else: endif; ?><div class="hotlog right">
	<div class="title">
		<p>热门文章</p>
		<span></span>
	</div>
	<ul><?php sheli_hotlog(10);?></ul>
</div><?php if (in_array('home_ad1', _g('on-off'))):?><div
	class="home_ad1" onmouseout="this.className='home_ad1'"
	onmouseover="this.className='home_ad1-m'"><?php echo _g('home_ad1'); ?></div><?php else: endif; ?><?php if (in_array('zdlog', _g('on-off'))):?><?php zdlog();?><?php else: endif; ?><?php if (in_array('newlog', _g('on-off'))):?><?php newlog();?><?php else: endif; ?><?php if (in_array('home_ad2', _g('on-off'))):?><div
	class="home_ad1" onmouseout="this.className='home_ad1'"
	onmouseover="this.className='home_ad1-m'"><?php echo _g('home_ad2'); ?></div><?php else: endif; ?><div
	class="sort-qj"><?php sortlogs();?></div><?php home_links($title);?>
<?php
  $uri = current_url(true);
?>
<header>
	<div class="head-top">
		<a href="#" class="menu-btn"><span></span></a>
		<div class="top-menu">
			<ul>
				<li class="<?=$uri->getSegment(1) == '' ? 'active': ''?>"><a href="/" class="lnk">Home</a></li>
				<li class="<?=$uri->getSegment(1) == 'resume' ? 'active': ''?>"><a href="/resume" class="lnk">Resume</a></li>
				<li class="<?=$uri->getSegment(1) == 'portfolio' ? 'active': ''?>"><a href="/portfolio" class="lnk">Portfolio</a></li>
				<li class="<?=$uri->getSegment(1) == 'blog' ? 'active': ''?>"><a href="/blog" class="lnk">Blog</a></li>
				<li class="<?=$uri->getSegment(1) == 'contact' ? 'active': ''?>"><a href="/contact" class="lnk">Contact</a></li>
			</ul>
		</div>
	</div>
</header>
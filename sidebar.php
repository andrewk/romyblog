<section id="sidebar" class="sidebar">
	<article id="search-3" class="widget widget_search">
		<form role="search" method="get" id="searchform" action="http://localhost:8888/romydotcom/">
			<div class="row collapse">
				<div class="small-8 columns">
					<input type="text" value="" name="s" id="s" placeholder="Search">
				</div>
				<div class="small-4 columns">
					<input type="submit" id="searchsubmit" value="Search" class="prefix button">
				</div>
			</div>
		</form>
	</article>
	<?php dynamic_sidebar("Sidebar"); ?>
</section>

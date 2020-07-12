<div id="sidebar">

	<div id="ad-300">
	<a href="http://shop.dizenoco.com/product.php?productid=17524&cat=249&page=1&featured=Y"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ad-300-buy-now.jpg" alt="Buy "Grid Locker" theme Now" /></a>
	</div>

	<br clear="all" />

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
	<?php endif; ?>

	<div id="search-form">
	<?php $search_text = "Search"; ?> 
	<form method="get" id="searchform"  
	action="<?php bloginfo('home'); ?>/"> 
	<input type="text" value="<?php echo $search_text; ?>"  
	name="s" id="s"  
	onblur="if (this.value == '')  
	{this.value = '<?php echo $search_text; ?>';}"  
	onfocus="if (this.value == '<?php echo $search_text; ?>')  
	{this.value = '';}" /> 
	<input type="hidden" id="searchsubmit" /> 
	</form>
	</div>

	<br clear="all" />

      <h4>Categories Menu</h4>
      <ul>
	<?php wp_list_categories('title_li='); ?>
      </ul>

      <h4>This is Just In</h4>
      <ul>
	<?php wp_get_archives('title_li=&type=postbypost&limit=10'); ?> 
	</ul>

      <h4>Our Favorite Spots on Web</h4>
      <ul>
	<?php wp_list_bookmarks('categorize=0&title_li='); ?>
      </ul>

</div>
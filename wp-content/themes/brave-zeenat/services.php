<?php
/*
Template Name: Services Page
*/
?>

<?php get_header(); ?>

<div id="panes">

	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
		<?php $postCount++;?>
	<div class="entry entry-<?php echo $postCount ;?>">

	<div>

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=200&amp;w=900&amp;zc=1" alt="<?php the_title(); ?>" />
		<?php } ?>

		<h3><?php the_title(); ?></h3> 
		<?php the_content(''); ?>

	</div>
	<?php endwhile; ?>
	</div>


	<div>
	<?php $posts = get_posts('orderby=rand&numberposts=1'); foreach($posts as $post) { ?>

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=300&amp;w=900&amp;zc=1" alt="<?php the_title(); ?>" /></a>
		<?php } ?>

		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

		<?php if (function_exists('the_content_limit')) { the_content_limit(750, ""); } else { echo 'You have not uploaded and acivated the limit posts plugin. This is required.'; } ?>

	<?php } ?>
	</div>

<div>
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hire-my-services.jpg" alt="Hire My Services" />
<h3>Hire My Services:</h3>

<form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/contact.php">

<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100"><span><font color="red">*</font> Name:</span></td>
    <td width="250"><input size="25" name="Email" /></td>
    <td width="100"><span><font color="red">*</font> Email:</span></td>
    <td width="200"><input size="25" name="Name" /></td>
    <td width="250">fields marked with <font color="red">*</font> are required</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><span>Website:</span></td>
    <td><input size="25" name="Website" /></td>
    <td><span>Subject:</span></td>
    <td colspan="2"><select name="sendto">
      <option value="dizenoco@gmail.com">Hire My Services</option>
      <option value="dizenoco@gmail.com">Request a Quote</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><span>Message:</span></td>
    <td colspan="4"><textarea name="Message" rows="5" cols="100"></textarea></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><input type="image" name="send" src="<?php bloginfo('stylesheet_directory'); ?>/images/submit.jpg" value="Submit" /></td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
</div>

</div>

<!-- navigator -->
<div id="nav">
	<ul>
		<li>
		<a href="#service"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/service-299.jpg" alt="Details of the service I Offer" /></a>
		</li>
		<li>
		<a href="#sample"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sample-work-299.jpg" alt="A Random Sample of My Work" /></a>
		</li>
		<li>
		<a href="#hire"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/hire-me-299.jpg" alt="Hire My Services" /></a>
		</li>
	</ul>
</div>


<?php endif; ?>
<?php get_footer(); ?>
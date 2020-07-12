<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<div id="fullwidth-container">

<?php if (is_page('Hire My Services')) { ?>

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
<br></br>
</div>

<?php } else {?>


<div>

<img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-me.jpg" alt="Hire My Services" />

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
      <option value="dizenoco@gmail.com">General Feedback</option>
      <option value="dizenoco@gmail.com">Client Support</option>
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
<br></br>
</div>


<?php } ?>




</div>

<?php get_footer(); ?>
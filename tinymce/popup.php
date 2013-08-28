<?php

// loads the shortcodes class, wordpress is loaded with it
require_once( 'shortcodes.class.php' );

// get popup type
$popup = trim( $_GET['popup'] );
$shortcode = new ebor_shortcodes( $popup );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<div id="ebor-popup">

	<div id="ebor-shortcode-wrap">
		
		<div id="ebor-sc-form-wrap">
		
			<div id="ebor-sc-form-head">
			
				<?php echo $shortcode->popup_title; ?>
			
			</div>
			<!-- /#ebor-sc-form-head -->
			
			<form method="post" id="ebor-sc-form">
			
				<table id="ebor-sc-form-table">
				
					<?php echo $shortcode->output; ?>
					
					<tbody>
						<tr class="form-row">
							<?php if( ! $shortcode->has_child ) : ?><td class="label">&nbsp;</td><?php endif; ?>
							<td class="field"><a href="#" class="button-primary ebor-insert">Insert Shortcode</a></td>							
						</tr>
					</tbody>
				
				</table>
				<!-- /#ebor-sc-form-table -->
				
			</form>
			<!-- /#ebor-sc-form -->
		
		</div>
		<!-- /#ebor-sc-form-wrap -->
		
		<div class="clear"></div>
		
	</div>
	<!-- /#ebor-shortcode-wrap -->

</div>
<!-- /#ebor-popup -->

</body>
</html>
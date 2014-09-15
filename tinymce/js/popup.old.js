
// start the popup specefic scripts
// safe to use $
jQuery(document).ready(function($) {
    var ebors = {
    	loadVals: function()
    	{
    		var shortcode = $('#_ebor_shortcode').text(),
    			uShortcode = shortcode;
    		
    		// fill in the gaps eg {{param}}
    		$('.ebor-input').each(function() {
    			var input = $(this),
    				id = input.attr('id'),
    				id = id.replace('ebor_', ''),		// gets rid of the ebor_ prefix
    				re = new RegExp("{{"+id+"}}","g");
    				
    			uShortcode = uShortcode.replace(re, input.val());
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_ebor_ushortcode').remove();
    		$('#ebor-sc-form-table').prepend('<div id="_ebor_ushortcode" class="hidden">' + uShortcode + '</div>');
    	},
    	cLoadVals: function()
    	{
    		var shortcode = $('#_ebor_cshortcode').text(),
    			pShortcode = '';
    			shortcodes = '';
    		
    		// fill in the gaps eg {{param}}
    		$('.child-clone-row').each(function() {
    			var row = $(this),
    				rShortcode = shortcode;
    			
    			$('.ebor-cinput', this).each(function() {
    				var input = $(this),
    					id = input.attr('id'),
    					id = id.replace('ebor_', '')		// gets rid of the ebor_ prefix
    					re = new RegExp("{{"+id+"}}","g");
    					
    				rShortcode = rShortcode.replace(re, input.val());
    			});
    	
    			shortcodes = shortcodes + rShortcode + "\n";
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_ebor_cshortcodes').remove();
    		$('.child-clone-rows').prepend('<div id="_ebor_cshortcodes" class="hidden">' + shortcodes + '</div>');
    		
    		// add to parent shortcode
    		this.loadVals();
    		pShortcode = $('#_ebor_ushortcode').text().replace('{{child_shortcode}}', shortcodes);
    		
    		// add updated parent shortcode
    		$('#_ebor_ushortcode').remove();
    		$('#ebor-sc-form-table').prepend('<div id="_ebor_ushortcode" class="hidden">' + pShortcode + '</div>');
    	},
    	children: function()
    	{
    		// assign the cloning plugin
    		$('.child-clone-rows').appendo({
    			subSelect: '> div.child-clone-row:last-child',
    			allowDelete: false,
    			focusFirst: false
    		});
    		
    		// remove button
    		$('.child-clone-row-remove').live('click', function() {
    			var	btn = $(this),
    				row = btn.parent();
    			
    			if( $('.child-clone-row').size() > 1 )
    			{
    				row.remove();
    			}
    			else
    			{
    				alert('You need a minimum of one row');
    			}
    			
    			return false;
    		});
    		
    		// assign jUI sortable
    		$( ".child-clone-rows" ).sortable({
				placeholder: "sortable-placeholder",
				items: '.child-clone-row'
				
			});
    	},
    	resizeTB: function()
    	{
			var	ajaxCont = $('#TB_ajaxContent'),
				tbWindow = $('#TB_window'),
				eborPopup = $('#ebor-popup');

            tbWindow.css({
                height: eborPopup.outerHeight() + 50,
                width: eborPopup.outerWidth(),
                marginLeft: -(eborPopup.outerWidth()/2)
            });

			ajaxCont.css({
				paddingTop: 0,
				paddingLeft: 0,
				paddingRight: 0,
				height: (tbWindow.outerHeight()-47),
				overflow: 'auto', // IMPORTANT
				width: eborPopup.outerWidth()
			});
			
			$('#ebor-popup').addClass('no_preview');
    	},
    	load: function()
    	{
    		var	ebors = this,
    			popup = $('#ebor-popup'),
    			form = $('#ebor-sc-form', popup),
    			shortcode = $('#_ebor_shortcode', form).text(),
    			popupType = $('#_ebor_popup', form).text(),
    			uShortcode = '';
    		
    		// resize TB
    		ebors.resizeTB();
    		$(window).resize(function() { ebors.resizeTB() });
    		
    		// initialise
    		ebors.loadVals();
    		ebors.children();
    		ebors.cLoadVals();
    		
    		// update on children value change
    		$('.ebor-cinput', form).live('change', function() {
    			ebors.cLoadVals();
    		});
    		
    		// update on value change
    		$('.ebor-input', form).change(function() {
    			ebors.loadVals();
    		});
    		
    		// when insert is clicked
    		$('.ebor-insert', form).click(function() {    		 			
    			if(window.tinyMCE)
				{
					window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, $('#_ebor_ushortcode', form).html());
					tb_remove();
				}
    		});
    	}
	}
    
    // run
    $('#ebor-popup').livequery( function() { ebors.load(); } );
});
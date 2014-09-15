(function($) {
"use strict";   
 

			
 			//Shortcodes
            tinymce.PluginManager.add( 'eborShortcodes', function( editor, url ) {
				
				editor.addCommand("eborPopup", function ( a, params )
				{
					var popup = params.identifier;
					tb_show("Insert ebor Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
				});
     
                editor.addButton( 'ebor_button', {
                    type: 'splitbutton',
                    icon: false,
					title:  'ebor Shortcodes',
					onclick : function(e) {},
					menu: [
					{text: 'Alerts',onclick:function(){
						editor.execCommand("eborPopup", false, {title: 'Alerts',identifier: 'alert'})
					}},
					{text: 'Buttons',onclick:function(){
						editor.execCommand("eborPopup", false, {title: 'Buttons',identifier: 'buttons'})
					}},
					{text: 'Columns',onclick:function(){
						editor.execCommand("eborPopup", false, {title: 'Columns',identifier: 'columns'})
					}},
					{text: 'Tabs',onclick:function(){
						editor.execCommand("eborPopup", false, {title: 'Tabs',identifier: 'tabs'})
					}},
					]
					
                
        	  });
         
          });
         

 
})(jQuery);
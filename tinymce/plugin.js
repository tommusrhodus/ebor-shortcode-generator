(function ()
{
	// create eborShortcodes plugin
	tinymce.create("tinymce.plugins.eborShortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("eborPopup", function ( a, params )
			{
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert ebor Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "ebor_button" )
			{	
				var a = this;
				
				var btn = e.createSplitButton('ebor_button', {
                    title: "Insert ebor Shortcode",
					image: eborShortcodes.plugin_folder +"img/logo.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{					
					a.addWithPopup( b, "Alerts", "alert" );
					a.addWithPopup( b, "Buttons", "button" );
					a.addWithPopup( b, "Columns", "columns" );
					a.addWithPopup( b, "Tabs", "tabs" );
					a.addImmediate( b, "Divider", "[ebor_divider]" );
				});
                
                return btn;
			}
			
			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("eborPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'ebor Shortcodes',
				author: 'TommusRhodus',
				authorurl: 'http://themeforest.net/user/tommusrhodus/',
				infourl: 'http://www.madeinebor.com/',
				version: "1.0"
			}
		}
	});
	
	// add eborShortcodes plugin
	tinymce.PluginManager.add("eborShortcodes", tinymce.plugins.eborShortcodes);
})();
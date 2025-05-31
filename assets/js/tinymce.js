/**
 * Admin javascript file.
 *
 * @package Plance\Plugin\Light_Code_Block
 */

( function(){
	tinymce.PluginManager.add(
		'plance_light_code_block',
		function( editor, url ) {
			let blockCodeModal = function( value ) {
				editor.windowManager.open(
					{
						title:     ( 'undefined' !== typeof localizePlanceSimpleCodeBlock ? localizePlanceSimpleCodeBlock.popup_title : '' ),
						minWidth:  800,
						minHeight: 600,
						body: [
							{
								type:      'textbox',
								name:      'code',
								value:     value || '',
								minHeight: 580,
								multiline: true,
						}
						],
						onsubmit: function ( api ) {
							var div       = document.createElement( 'div' );
							div.innerText = api.data.code;

							editor.selection.setContent( '<pre class="mce-simple-code-block mce-light-code-block" contenteditable="false">' + div.innerHTML + '</pre>' );
						}
					}
				);
			};

			editor.addButton(
				'btn_light_code_block',
				{
					text:   'LC',
					image:   false,
					onclick: function( e ) {
						blockCodeModal();
					},
				}
			);

			editor.on(
				'click',
				function( e ) {
					if ( editor.dom.hasClass( e.target, 'mce-simple-code-block' ) ) {
						let code = e.target.innerHTML;

						code = code.replace( /&lt;/g, '<' );
						code = code.replace( /&gt;/g, '>' );
						code = code.replace( /<br>/g, "\n" );
						code = code.replace( /&amp;/g, '&' );
						code = code.replace( /&nbsp;/g, ' ' );

						blockCodeModal( code );
					}
				}
			);
		}
	);
} )();

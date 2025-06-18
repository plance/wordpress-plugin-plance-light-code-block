=== Light Code Block ===
Contributors: plance
Tags: code, sourcecode, source, editor, syntax highlighting
Requires at least: 6.0
Tested up to: 6.8
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The "Light Code Block" plugin is the simplest and lightest plugin for inserting and displaying code.

== Description ==

The "Light Code Block" plugin is a simple and lightweight solution for inserting and displaying code snippets in posts and pages.  
It works by adding a custom "LC" button to the TinyMCE (Classic) editor or a code block in the Gutenberg editor.

The inserted code will be shown on the front end in a clean, readable format.

== Usage ==

* Install and activate the plugin.
* Go to the post or page edit screen.
* In the TinyMCE (Classic) editor, click the **"LC"** button in the toolbar.
* In the popup window that opens, paste or write your code, and click **OK**.
* Save or update your post.

The code will be saved inside a special block and displayed on the front end within a `<pre>` tag with the class `mce-simple-code-block` (i.e., `<pre class="mce-simple-code-block">...</pre>`).

To insert code using the Gutenberg editor, you first need to add a Classic (TinyMCE) block, and then use it to insert your code.

== Installation ==

1. Install the "Light Code Block" plugin through the standard WordPress plugin installer.
2. Or unzip and upload the "light-code-block" folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

== Screenshots ==

1. The "LC" button in the Classic editor toolbar.
2. Popup window for inserting/editing code (Classic version).
3. Popup window for inserting/editing code (Gutenberg version).
4. Example of a rendered code block on the front end.


== Changelog ==

= 1.0.1 =
* For backward compatibility, the class "mce-simple-block-code" has been added.

= 1.0.0 =
* Init release.
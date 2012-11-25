=== Pattern Pears Plugin ===
Contributors: skymaiden
Tags: pears, pattern library
Requires at least: 3.4
Tested up to: 3.4
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This is a plugin version of Dan Cederholm's Pears WordPress theme, for use on existing sites. It uses a 'pears' custom post type and a 'pattern category' taxonomy to keep things separate.


== Description ==

This WordPress plugin is based on the Pears WordPress theme by Dan Cederholm, which is distributed under the GPLv2 license. 

It uses a 'pears' custom post type and a 'pattern category' taxonomy to keep all patterns separate from existing site content, enabling users to create a simple pattern library on an existing website or blog.


= ORIGINAL README BY DAN CEDERHOLM =

Pears are common patterns of markup & style.

Pears is an open source WordPress theme. I'll admit the code 
is a bit rough, initially based on the default 'twentyone' theme.

I wanted a handy way of collecting HTML & CSS pattern pairs. 
Often used modules with a minimal of style applied. It's become 
a valuable learning tool, whereby breaking interfaces down into 
small pieces make it easier to learn and improve running code.

HOW TO ADD CODE PATTERNS

- Each pattern is a post in WordPress. 
- Add markup in a custom field named 'html'.
- Add style in a custom field named 'css'.
- Use the main content field for optional notes.

Learn more and see it in action here:
http://pea.rs

Enjoy.

Dan Cederholm
Salem, Massachusetts
February, 2012
http://simplebits.com



== Installation ==

1. Upload the entire folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Start writing pears and creating pattern categories via the new Pears menu


== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

= 0.1 =
* Initial plugin release
* Added: Custom post type (pattern_pear), custom taxonomy (pattern_category)
* Changed: Minor metabox layout adjustments
* Changed: Minor modifications to HTML template for plugin (.pears-body, .pears-wrap, .pears-main)
* Changed: Minor modifications and removal of redundant CSS (reset, header, footer)


== Upgrade Notice ==


== To Do ==

* Refactor HTML + CSS
* Add list view (pattern categories etc.)
* Internationalization + French translation

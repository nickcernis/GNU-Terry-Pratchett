=== Plugin Name ===
Contributors: modernnerd
Tags: terry-pratchett, http-headers
Requires at least: 2.8.0
Tested up to: 4.1.1
Stable tag: trunk
License: GPLv2+

Add an X-Clacks-Overhead header with 'GNU Terry Pratchett' to all your non-admin pages.

== Description ==

The GNU Terry Pratchett plugin transmits an "X-Clacks-Overhead" header reading, “GNU Terry Pratchett” so that Terry’s name is whispered forevermore in the Internet’s “overhead”.

In Pratchett’s “Going Postal”, workers who die in the line of duty have their names transmitted up and down the Discworld’s telegraph system as a tribute.

This plugin makes it easy for WordPress users to do the same for Terry Pratchett, without having to modify their server configuration.

= Using a WordPress caching plugin? =
You'll need to use one of the other methods for adding the header instead of this plugin, unfortunately.

See http://www.gnuterrypratchett.com/ for more.

= Setup =
There is no settings page. Check that the header is appearing for your site by using your terminal (`curl -I example.com`), Chrome's Network tab, or the <a href="http://tools.seobook.com/server-header-checker/">Server Header Checker</a>.  
  
= Credits and contributions =  
Inspired by <a href="http://www.reddit.com/r/bestof/comments/2yyop7/rdiscworld_redditors_with_web_servers_start/">this reddit post</a>, <a href="http://boingboing.net/2015/03/15/sending-terry-pratchett-home-w.html">boingboing's report</a>, and the <a href="http://www.gnuterrypratchett.com/">GNU Terry Pratchett</a> website.

Contributions welcome at the <a href="https://github.com/nickcernis/gnu-terry-pratchett">GitHub repo</a>. 

== Installation ==

1. Unzip and upload the `gnu-terry-pratchett` folder to your `/wp-content/plugins/` directory.
1. Activate the plugin on the WordPress 'Plugins' page.

There is no settings page. To check that the header is appearing for your site, you can use your terminal (`curl -I example.com`), Chrome's Network tab, or a site such as <a href="http://tools.seobook.com/server-header-checker/">Server Header Checker</a>.  

== Frequently Asked Questions ==

= Why do this? =

From Going Postal:

<blockquote>“We keep that name moving in the Overhead,” he said, and it seemed to Princess that the wind in the shutter arrays above her blew more forlornly, and the everlasting clicking of the shutters grew more urgent. “He’d never have wanted to go home. He was a real linesman. His name is in the code, in the wind in the rigging and the shutters. Haven’t you ever heard the saying: ‘A man’s not dead while his name is still spoken’?”</blockquote>

= What does the GNU stand for? =

In Going Postal, the G means that the message should be passed on, the N means “Not Logged”, and the U means that it should be turned around at the end of the line.

== Changelog ==

= 0.1.0 =
* Initial release.
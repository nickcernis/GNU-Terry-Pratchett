=== Plugin Name ===
Contributors: Nick Cernis
Tags: terry-pratchett, http-headers
Requires at least: 2.8.0
Tested up to: 4.1.1
Stable tag: 0.1.2
License: GPLv2+

Adds an X-Clacks-Overhead header with 'GNU Terry Pratchett' on all non-admin pages.

== Description ==

The GNU Terry Pratchett plugin transmits a special "X-Clacks-Overhead" header reading, “GNU Terry Pratchett” so that Terry’s name is whispered forevermore in the Internet’s “overhead”.

In Pratchett’s “Going Postal”, workers who die in the line of duty have their names transmitted up and down the book’s telegraph system as a tribute.

This plugin makes it easy for WordPress users to do the same for Terry Pratchett, without having to modify their server configuration.
  
Inspired by <a href="http://www.reddit.com/r/bestof/comments/2yyop7/rdiscworld_redditors_with_web_servers_start/">this reddit post</a>, <a href="http://boingboing.net/2015/03/15/sending-terry-pratchett-home-w.html">boingboing's report</a>, and the <a href="http://www.gnuterrypratchett.com/">GNU Terry Pratchett</a> website.

Contributions welcome at the <a href="https://github.com/nickcernis/gnu-terry-pratchett">repo on GitHub</a>. 

== Installation ==

1. Unzip and upload the `gnu-terry-pratchett` folder to your `/wp-content/plugins/` directory.
1. Activate the plugin on the WordPress 'Plugins' page.

There is no settings page. You can use Chrome's Network tab or a site such as the <a href="http://tools.seobook.com/server-header-checker/">Server Header Checker</a> to be sure that the header is appearing correctly for your WordPress site.  

== Frequently Asked Questions ==

= Why do this? =

From Going Postal:

<blockquote>“We keep that name moving in the Overhead,” he said, and it seemed to Princess that the wind in the shutter arrays above her blew more forlornly, and the everlasting clicking of the shutters grew more urgent. “He’d never have wanted to go home. He was a real linesman. His name is in the code, in the wind in the rigging and the shutters. Haven’t you ever heard the saying: ‘A man’s not dead while his name is still spoken’?”</blockquote>

= What does the GNU stand for? =

In Going Postal, the G means that the message should be passed on, the N means “Not Logged”, and the U means that it should be turned around at the end of the line.

== Changelog ==

= 0.1.0 =
* Initial release.
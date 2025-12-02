=== GNU Terry Pratchett ===
Contributors: modernnerd
Tags: terry-pratchett, http-headers
Requires at least: 4.6
Tested up to: 6.9
Requires PHP: 5.6
Stable tag: 0.4.1
License: gpl-2.0-or-later

Add an X-Clacks-Overhead header with “GNU Terry Pratchett” to all non-admin pages.

== Description ==

The GNU Terry Pratchett plugin transmits an "X-Clacks-Overhead" header reading, “GNU Terry Pratchett” so that Terry’s name is whispered forevermore in the Internet’s “overhead”.

In Pratchett’s “Going Postal”, workers who die in the line of duty have their names transmitted up and down the Discworld’s telegraph system as a tribute.

This plugin makes it easy for WordPress users to do the same for Terry Pratchett, without having to modify their server configuration.

= The GNU Terry Pratchett headers =

The plugin adds the GNU Terry Pratchett header in two ways:

1. As an HTTP header (if you don't use a WordPress page caching plugin).
2. As a meta tag in your HTML with the http-equiv attribute.

= Settings =

The text sent in HTTP headers and meta tags is “GNU Terry Pratchett” by default.

Change this by visiting Settings → GNU Terry Pratchett in your WordPress admin area and editing the “X-Clacks-Overhead header” field.

This option lets you honor other people you would like to remember by making them a small part of your site’s content forever.

= Checking the HTTP header is sent =
There are several ways to check that the HTTP header is appearing for your site:

1. With your terminal (`curl -I example.com`)
2. With Chrome’s Network tab.
3. With the <a href="https://chrome.google.com/webstore/detail/clacks-overhead-gnu-terry/lnndfmobdoobjfcalkmfojmanbeoegab">Clacks Overhead</a> Chrome plugin or the <a href="https://addons.mozilla.org/en-US/firefox/addon/gnu_terry_pratchett/">GNU Terry Pratchett Firefox extension</a>.
4. Using the <a href="http://tools.seobook.com/server-header-checker/">Server Header Checker</a>.

Note that the HTTP header is not sent if you use a page caching plugin. To send the HTTP header and continue to use a caching plugin, add the header at the server level. See http://www.gnuterrypratchett.com/ for options.

= Checking the meta tag is added =
You can check that the meta tag is visible by viewing your site's HTML source and searching for “GNU Terry Pratchett”.

The <a href="https://chrome.google.com/webstore/detail/clacks-overhead-gnu-terry/lnndfmobdoobjfcalkmfojmanbeoegab">Clacks Overhead plugin</a> for Chrome and the <a href="https://addons.mozilla.org/en-US/firefox/addon/gnu_terry_pratchett/">GNU Terry Pratchett extension</a> for Firefox both light up when they detect the HTML meta tag or HTTP header.

= Credits and contributions =
Inspired by <a href="http://www.reddit.com/r/bestof/comments/2yyop7/rdiscworld_redditors_with_web_servers_start/">this reddit post</a>, <a href="http://boingboing.net/2015/03/15/sending-terry-pratchett-home-w.html">boingboing's report</a>, and the <a href="http://www.gnuterrypratchett.com/">GNU Terry Pratchett</a> website.

Contributions welcome at the <a href="https://github.com/nickcernis/gnu-terry-pratchett">GitHub repo</a>.

== Installation ==

1. Unzip and upload the `gnu-terry-pratchett` folder to your `/wp-content/plugins/` directory.
2. Activate the plugin on the WordPress 'Plugins' page.

To check that the header is appearing for your site, you can use your terminal (`curl -I example.com`), Chrome's Network tab, or a site such as <a href="http://tools.seobook.com/server-header-checker/">Server Header Checker</a>.

== Frequently Asked Questions ==

= Why do this? =

From Going Postal:

<blockquote>“We keep that name moving in the Overhead,” he said, and it seemed to Princess that the wind in the shutter arrays above her blew more forlornly, and the everlasting clicking of the shutters grew more urgent. “He’d never have wanted to go home. He was a real linesman. His name is in the code, in the wind in the rigging and the shutters. Haven’t you ever heard the saying: ‘A man’s not dead while his name is still spoken’?”</blockquote>

= What does the GNU stand for? =

In Going Postal, the G means that the message should be passed on, the N means “Not Logged”, and the U means that it should be turned around at the end of the line.

== Changelog ==

= 0.4.1 =
* Escape attributes on settings page and meta tag.

= 0.4.0 =
* Add settings page at Settings → GNU Terry Pratchett to let you adjust or extend the X-Clacks-Overhead header.
* Bump “tested up to” to WordPress 6.0.

= 0.3.2 =
* Small PHP and readme docs adjustments.

= 0.3.1 =
* Add text domain to allow for readme translation.

= 0.3.0 =
* Removed mail header filtering. This was causing issues with WordPress site mail and plugins.

= 0.2.3 =
* Added icon. Artwork from The Grand Trunk Semaphore Company 3p Stamp, copyright Discworld Emporium.

= 0.2.2 =
* Correct email header issue affecting Contact Form 7.

= 0.2.1 =
* Fix issue where email header could break outgoing mail.

= 0.2.0 =
* Add X-Clacks-Overhead meta tag to site HTML.
* Add X-Clacks-Overhead header to outgoing email sent by wp_mail().

= 0.1.2 =
* Initial release.

== Upgrade Notice ==

= 0.4.0 =
You can now change the outgoing header at Settings → GNU Terry Pratchett if you choose to.

= 0.2.1 =
Fixes an issue where the clacks email header could break outgoing mail.

= 0.2.0 =
This version now sends the “GNU Terry Pratchett” header in outgoing WP emails, and adds the special meta tag to your HTML too.

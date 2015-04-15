=== Plugin Name ===
Contributors: modernnerd
Tags: terry-pratchett, http-headers
Requires at least: 2.8.0
Tested up to: 4.1.1
Stable tag: trunk
License: GPLv2+

Add an X-Clacks-Overhead header with “GNU Terry Pratchett” to all non-admin pages.

== Description ==

The GNU Terry Pratchett plugin transmits an "X-Clacks-Overhead" header reading, “GNU Terry Pratchett” so that Terry’s name is whispered forevermore in the Internet’s “overhead”.

In Pratchett’s “Going Postal”, workers who die in the line of duty have their names transmitted up and down the Discworld’s telegraph system as a tribute.

This plugin makes it easy for WordPress users to do the same for Terry Pratchett, without having to modify their server configuration.

= The GNU Terry Pratchett headers =

The plugin adds the GNU Terry Pratchett header in three ways:

1. As an HTTP header (sent only if you don't use a WordPress caching plugin).
2. As a meta tag in your HTML with the http-equiv attribute.
3. As an additional header tag for all outgoing email that WordPress sends.

= Checking the HTTP header is sent =
There is no settings page. There are several ways to check that the HTTP header is appearing for your site:

1. With your terminal (`curl -I example.com`)
2. With Chrome’s Network tab.
3. With the <a href="https://chrome.google.com/webstore/detail/clacks-overhead-gnu-terry/lnndfmobdoobjfcalkmfojmanbeoegab">Clacks Overhead</a> Chrome plugin or the <a href="https://addons.mozilla.org/en-US/firefox/addon/gnu_terry_pratchett/">GNU Terry Pratchett Firefox extension</a>.
4. Using the <a href="http://tools.seobook.com/server-header-checker/">Server Header Checker</a>.

Note that the HTTP header is only sent if you don't use a page caching plugin. If you'd like to send the HTTP header and continue to use a caching plugin, you'll need to add it at the server level. See http://www.gnuterrypratchett.com/ for options.

= Checking the meta tag is being added =
You can check that the meta tag is visible by viewing your site's HTML source and searching for “GNU Terry Pratchett”.

The <a href="https://chrome.google.com/webstore/detail/clacks-overhead-gnu-terry/lnndfmobdoobjfcalkmfojmanbeoegab">Clacks Overhead plugin</a> for Chrome and the <a href="https://addons.mozilla.org/en-US/firefox/addon/gnu_terry_pratchett/">GNU Terry Pratchett extension</a> for Firefox both light up when they detect the HTML meta tag or HTTP header.

= Checking the email header is sent =

To confirm that WordPress is sending email with the special header, you can:

1. Create a new WordPress user from Users > Add New.
2. Be sure to use an email address you can easily check, and tick “Send this password to the new user by email”.
3. In your email or webmail client, view the raw source of the welcome email that WordPress sends you. You should see “GNU Terry Pratchett” in the headers.

= Credits and contributions =
Inspired by <a href="http://www.reddit.com/r/bestof/comments/2yyop7/rdiscworld_redditors_with_web_servers_start/">this reddit post</a>, <a href="http://boingboing.net/2015/03/15/sending-terry-pratchett-home-w.html">boingboing's report</a>, and the <a href="http://www.gnuterrypratchett.com/">GNU Terry Pratchett</a> website.

Contributions welcome at the <a href="https://github.com/nickcernis/gnu-terry-pratchett">GitHub repo</a>.

== Installation ==

1. Unzip and upload the `gnu-terry-pratchett` folder to your `/wp-content/plugins/` directory.
2. Activate the plugin on the WordPress 'Plugins' page.

There is no settings page. To check that the header is appearing for your site, you can use your terminal (`curl -I example.com`), Chrome's Network tab, or a site such as <a href="http://tools.seobook.com/server-header-checker/">Server Header Checker</a>.

== Frequently Asked Questions ==

= Why do this? =

From Going Postal:

<blockquote>“We keep that name moving in the Overhead,” he said, and it seemed to Princess that the wind in the shutter arrays above her blew more forlornly, and the everlasting clicking of the shutters grew more urgent. “He’d never have wanted to go home. He was a real linesman. His name is in the code, in the wind in the rigging and the shutters. Haven’t you ever heard the saying: ‘A man’s not dead while his name is still spoken’?”</blockquote>

= What does the GNU stand for? =

In Going Postal, the G means that the message should be passed on, the N means “Not Logged”, and the U means that it should be turned around at the end of the line.

== Changelog ==

= 0.2.1 =
Fix issue where email header could break outgoing mail.

= 0.2.0 =
* Add X-Clacks-Overhead meta tag to site HTML.
* Add X-Clacks-Overhead header to outgoing email sent by wp_mail().

= 0.1.2 =
* Initial release.

== Upgrade Notice ==

= 0.2.1 =
Fixes an issue where the clacks email header could break outgoing mail.

= 0.2.0 =
This version now sends the “GNU Terry Pratchett” header in outgoing WP emails, and adds the special meta tag to your HTML too.

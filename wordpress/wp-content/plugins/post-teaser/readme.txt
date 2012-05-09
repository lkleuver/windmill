=== Plugin Name ===
Contributors: weyhan
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6311023
Tags: teaser, excerpt, preview, statistics, navigation, more
Requires at least: 2.6
Tested up to: 3.0.1
Stable tag: 4.1.1

Post Teaser generates excerpts of posts for the main, archive and category pages, also generate a word count, image count, and estimated reading time.

== Description ==

***NOTICE: Please reconfigure PostTeaser if you have just upgraded from PostTeaser versions prior to 4.1.x. There are new options under the new section "Disable tease" and "Show fullpost" that is not set by default after an upgrade. The side effect is PostTeaser will seem like it has stop working if none of these new options are set. New install will have the default options set, so is not affected.***

Post Teaser generates a preview or "teaser" of a post for the main, archive and category pages, with a link underneath to go to the full post page. It includes features to generate a word count, image count, and an estimated reading time.

= Reasons you might want to use Post Teaser: =

* You keep putting `<!--more-->` into your posts
* You would like to save bandwidth by only having people view a full post if they actually want to read it
* You just like the "teaser" format

= What's new in this release: =

**4.1.1:**

* Fix Post Teaser ignoring Custom Field directive (disable or showall)

**4.1.0:**

* Added "Advance tease control" feature that allows category or tag to turn off Post Teaser
* Added option to disable tease or force fullpost on the homepage
* Added option to move post statistic block from the bottom of the post to above the post text
* Fix incompatibilities with "Search Unleashed" plugin **The fix is tested in my test env, please report if issue is not resolved**
* Cleanup UI in Settings page
* Misc bug fixes

= Known issue(s): =

* Current translation files will not have translation for new options introduced in this release. Apologies to Non-English users of PostTeaser. This problem will exist and will break the translation files further in up coming release due to heavy remodeling the PostTeaser admin page. For translators, please help fix the language files.

= Contributors: =

* [WeyHan Ng](http://sandboxblogger.com/ "SandboxBlogger.com") -- Maintainer
* [Jonathan Leighton (Turnip)](http://turnipspatch.com "Turnip") -- Concept and programming
* [eleZeta](http://ele-zeta.com.ar/ "eleZeta") -- Estimated reading time code was adapted from his plugin : )

**** NOTE: Use [contact form](http://sandboxblogger.com/contact/ "Contact me") for support request.
	
= Translators: =

* by_BY:
	* [Marcis Gasuns](http://ledleisten.com/ "Marcis Gasuns")
* de_DE:
	* [Sören Weber](http://soeren-weber.net/ "Sören Weber")
* el_GR:
	* [Alexander Kanakaris](http://www.tech-spot.gr/ "Alexander Kanakaris")
* es_ES:
	* Francisco Barroso
* fr_FR:
	* [David Martin](www.sushilabs.com/ "David Martin")
* he_IL:
	* Eyal Gursoy
* it_IT:
	* [Arturo Uggini](http://www.cerbero.eu/ "Arturo Uggini")
* nb_NO:
	* Jørn Pedersen
* nl_BE, nl_NL:
	* [Mathias Bynens](http://mathibus.com/ "Mathias Bynens")
* pl_PL:
	* [Przemysław Naruszewicz](http://www.ikeris.com/ "Przemysław Naruszewicz")
* ru_RU:
	* Thomas Gorny
* sv_EU:
	* [Mansour Sarr](http://www.din-it-kunskap.com/ "Mansour Sarr")
* sv_SE:
	* Fredrik Sandström

== Installation ==

= Manual installation  =

1. Download [Post Teaser](http://wordpress.org/extend/plugins/post-teaser "Post Teaser package") from wordpress.org Plugin Directory
1. Extract and upload the entire `post-teaser` directory as `.../wp-content/plugins/post-teaser` directory of your WordPress installation. *NOTE: The issue with location sensitive installation have since been fix in version 3.11.3. The `post-teaser.php` file is no longer restricted to the root of the plugins directory `.../wp-content/plugins/`*
1. Go to the Plugins configuration page in your WordPress admin panel, and enable Post Teaser

= Auto installation (2.7.x and above) =

1. Click on the link `Plugin Browser/Installer` under the "Get More Plugins" section at the bottom of the Plugins page in your WordPress admin panel (Yes, this page is found in your blog's admin page).
1. Search for "post teaser" in Term.
1. Click on the install action on the right side of the table where Post Teaser is listed.
1. Follow WordPress instruction to complete the installation.

= Configuration =

Post Teaser does not need to be configured in order to work but some users understandably wish to change settings. That's easy too -- the dead simple configuration page can be found under `Settings > Post Teaser` (for version before 2.6 `Options > Post Teaser`) in your WordPress admin panel.

== Upgrade Notice ==

= 4.1.1 =

This release includes one of the most requested option to allow control teasing via category and/or tag filters on top of some major bug fixes.

== Frequently Asked Questions ==

= Do I really need this plugin? =

No, of course not, but it makes a nice addition and some people find it easier to skim over previews to find something that interests them rather than to scroll down huge chunks of text.

= Why Post Teaser fail to split some/all post on the front page? =

Post Teaser is a paragraph aware teaser. Not only just aware, it will not break in the middle of a paragraph unless explicitly told to do so with the `<!--more-->` tag. 

There are two reasons why Post Teaser seems to have failed to split a post:

1. *The entire post is one long paragraph.* Well, as stated, Post Teaser is a paragraph aware teaser. Therefore will split single paragraph post at the end of the post because it also happens to be where the first paragraph break. To fix this problem, either split the post into shorter paragraph or add a `<!--more-->` to force a split.
1. *The post have multiple paragraph, however, instead of the `<p>` tag as the paragraph marker, the `<br />` tag was used to simply make text appear like paragraph.* It may read alright to us, those damn puters sees it as one long paragraph. Schematics, schematics. I tell you, it's a conspiracy! To fix this problem, replace those `<br />` tags with the proper `<p>...</p>` paragraph marker pair.

= Help! I get an error that says "Warning: Cannot modify header information..." =

This one is very common and applies to any WordPress plugin. There must not be any content in the plugin file other than PHP code. Sometimes if people have copied the code into their own file, rather than downloading it, they accidentally leave whitespace or other characters at the beginning or end of the file, outside of the `<?php ... ?>` block. Removing any excess characters will solve the problem.

= Help! PostTeaser broke my blog! &lt;insert scenario here&gt; =

PostTeaser is always tested against the latest WordPress version prior to release. However, it is impossible to test PostTeaser with all the plugins, widget, themes and what ever modification you have made for your blog. Most of the time when PostTeaser crashes a blog or causes some strange effects it is due to incompatibility in your environment (plugins, widget, themes, and etc).

If you encounter some unexplained issue seemingly associated with PostTeaser, you are welcome to report it to me but to speed up the process of getting your issue resolved, please perform the following diagnostic steps to first determine what is the source of the problem.

**Prior to executing the diagnostic steps, please setup your environment so that you will start the diagnostic with basic configuration:**

* Disable all your plugin, widget and change your theme to the default WordPress theme. Verify if the problem is gone. If you still have the problem, your problem is most likely your hosting environment. Check with your hosting provider to help solve your problem. Otherwise, continue the test.

**Follow the below steps until you have determine the incompatibility with PostTeaser:**

1. Enable only PostTeaser and verify if the problem have come back. If the problem exist, it is either PostTeaser is not compatible with the current WordPress version or your hosting environment.
1. With only PostTeaser enabled, change your theme to your regular theme. If problem exist, PostTeaser and your theme is not compatible. Please check if your theme have any settings or scripts that will interfere with PostTeaser.
1. With only PostTeaser enabled, activate one other plugin at a time. Remember to only have PostTeaser and one other plugin activated at any one time. Verify that the problem exist. If you don't see the problem, repeat this step until you have found the plugin that is not compatible with PostTeaser or you have gone through all the plugin.
1. Do the same with widget as the step above except allow only PostTeaser and only one widget activated at any one time. Repeat until you have found the widget that is not compatible with PostTeaser or you have gone through all the widget.

Describe the problem as detail as you can and note the steps you have taken in this diagnostic in your report to me. Remember to also include as much information as possible of your environment in your report. E.g. WordPress version, PostTeaser version, hosting type, and etc.

= How can I apply presentation to the teaser text? =

The teaser text is placed inside a block level `<div>` element with a class of "post-teaser-block". This means that you can use CSS to style the teaser text. As an example, here's the CSS you'd use to make it bold:

.post-teaser-block {
    font-weight: bold;
}

.post-teaser-more {
    font-weight: bold;
}

= What if I don't want a particular post to be teased? =

You have two options here:

1. Have Post Teaser ignore that post entirely
1. Have Post Teaser "display the post in full", and display the message that it did so (like what happens if you have a post that is too short to be teased)

Both of them work by using a custom field for you post. Here's how to do it:

1. Edit/Write your post in the WordPress admin panel
1. If you are not in the "Advanced" mode, then get into it by clicking the "Advanced Editing" button
1. At the bottom of the form, where it says "Custom Fields", write 'teaser' in the box labelled "Key"
1. Next, go to the "Value" box, and write 'disable' if you want Post Teaser to ignore the post entirely, or 'showall' if you want Post Teaser to return the post in full
1. Click "Add Custom Field"

= What if I want to have more control of what Post Teaser should tease? =

You can use the the filters under the "Advance tease control" section to control on which archive page Post Teaser will not tease.

* You can use any numbers of combination to setup these controls
* "Control tease in homepage" will take precedence over "Use filters to disable tease" and "Use filters to force fullpost", "Use filters to disable tease" will take precedence over "Use filters to force fullpost" and categories will take precedence over tags
* The category and tag text input box are free-text input box
* Post Teaser will accepts a comma separated list of categories or tags in any of the three forms:
	1. Category or tag name *(the name where you use to create the category or tag)*
	1. Category or tag id *(the id use by WordPress to identify the category or tag in the db)*
	1. Category or tag slug *(the part of the url that identifies the category or tag e.g. http://www.example.com/category/**uncategorized**/)*
	** Note: The comma separated list you provide to Post Teaser can be any combination of the above**
* Archive pages of categories or tags configured in "Use filters to disable tease" will cause Post Teaser to ignore completely posts in their respective category or tag archive pages *(Note that if `<!--more-->` is use in the post or the_excerpt is used in your theme, the post will be teased according to WordPress's post tease feature)*
* Archive pages of categories or tags configured in "Use filters to force fullpost" will cause Post Teaser to display fullpost with post stats as configured in "Basic settings" in their respective category or tag archive pages
* The "Always apply filter" options, if set will cause Post Teaser's tease controls to take effect outside of their respective category or tag archive pages *(e.g. in the home page if there are any post that is taged with a tag configured in "Use filters to disable tease", the "Always apply filter" option will cause Post Teaser to disabled tease among other post that will be tease as normal)*

= Can I choose where a post is teasered, rather than having it calculated? =

Yes. You just write `<!--more-->` where you want it to be teasered, in the "traditional" WordPress style, and Post Teaser will do the rest.

= I've got a problem or question that isn't answered here. Can you help me please? =

Absolutely. Please use the [contact form](http://sandboxblogger.com/contact/ "contact me") on my website, and I will get back to you as soon as I can.

= Is this plugin available in other languages? =

Yes. To use a translated version, you need to obtain the language file for it. At this point it would be useful to read [Installing WordPress in Your Language](http://codex.wordpress.org/Installing_WordPress_in_Your_Language "Installing WordPress in Your Language") from the Codex. You will need an .mo file for Post Teaser that corresponds with the "WPLANG" setting in your wp-config.php file. Translations are listed below -- if a translation for your language is available, all you need to do is place it in the wp-content/plugins directory of your WordPress installation. If one is not available, and you also speak good English, please consider doing a translation yourself (see the next question).

The following translations are available:

* Belorussian
	* [Belorussian (by_BY)](http://svn.wp-plugins.org/post-teaser/trunk/translations/by_BY/post-teaser-by_BY.mo "Belarus")  
* Dutch
	* [Belgium (nl_BE)](http://svn.wp-plugins.org/post-teaser/trunk/translations/nl_BE/post-teaser-nl_BE.mo "Belgium")
	* [Netherlands, The (nl_NL)](http://svn.wp-plugins.org/post-teaser/trunk/translations/nl_NL/post-teaser-nl_NL.mo "The Netherlands")
* English
	* Great Britain (en_GB) -- This is the default language for Post Teaser
* French
	* [France (fr_FR)](http://svn.wp-plugins.org/post-teaser/trunk/translations/fr_FR/post-teaser-fr_FR.mo "France")
* German
	* [Germany (de_DE)](http://svn.wp-plugins.org/post-teaser/trunk/translations/de_DE/post-teaser-de_DE.mo "German")
* Greek
	* [Greek (el_GR)](http://svn.wp-plugins.org/post-teaser/trunk/translations/el_GR/post-teaser-el_GR.mo "Greek")
* Hebrew
	* [Israel (he_IL)](http://svn.wp-plugins.org/post-teaser/trunk/translations/he_IL/post-teaser-he_IL.mo "Israel")
* Italian
	* [Italy (it_IT)](http://svn.wp-plugins.org/post-teaser/trunk/translations/it_IT/post-teaser-it_IT.mo "Italy")
* Norwegian
	* [Norway (nb_NO)](http://svn.wp-plugins.org/post-teaser/trunk/translations/nb_NO/post-teaser-nb_NO.mo "Norwegian Bokmål")
* Polish
	* [Poland (pl_PL)](http://svn.wp-plugins.org/post-teaser/trunk/translations/pl_PL/post-teaser-pl_PL.mo "Polish")
* Russian
	* [Russian (ru_RU)](http://svn.wp-plugins.org/post-teaser/trunk/translations/ru_RU/post-teaser-ru_RU.mo "Russian")
* Spanish
	* [Spain (es_ES)](http://svn.wp-plugins.org/post-teaser/trunk/translations/es_ES/post-teaser-es_ES.mo "Spanish")
* Swedish
	* [Sweden (sv_SE)](http://svn.wp-plugins.org/post-teaser/trunk/translations/sv_SE/post-teaser-sv_SE.mo "Swedish")
	* [European Union (sv_EU)](http://svn.wp-plugins.org/post-teaser/trunk/translations/sv_EU/post-teaser-sv_EU.mo "European Union")

= Can I provide a translation? =

***NOTICE: If you have translate for Post Teaser and have a couple of hours free, please help update the language files. Thanks.***

Of course! It will be very gratefully received. Please read [Translating WordPress](http://codex.wordpress.org/Translating_WordPress "Translating WordPress") first for background information on translating. Then obtain the latest [.pot file](http://plugins.svn.wordpress.org/post-teaser/trunk/post-teaser.pot ".pot file") and translate it. *There are some strings with a space in front -- please make sure you remember the space!* When you have a translation ready, please send the .po and .mo files to han at sandboxblogger dot com. If you have any questions, feel free to email me also. Thanks!

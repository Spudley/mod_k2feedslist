Simple K2 Tag Filtering
=======================

A small Joomla!/K2 module to provide a list of RSS feeds on your site.

Written by Simon Champion, April 2017.


Version History
---------------

* v1.0.0    Initial release.


Introduction
------------

This module allows you to provide a list of RSS feeds on your site, one for each K2 category. It allows you to select which categories to include.


Dependencies
------------

* Joomla!
* K2

Note that this extension has been tested against the current versions of Joomla! (3.6.5) and K2 (2.7.1) at the time of writing.


Installation
------------

This module should be installed via the Extensions manager in Joomla!'s admin panel. You should also ensure that you have K2 installed in your Joomla! instance, as this module relies on it.


Setup
-----

Configuring the module is very simple. It only has a single configuration field, which allows you to specify the K2 categories that you want to show in your feeds list.

You may pick as many categories as you wish. Then just add the module to a page on your site in the normal way.

The feed icon and the URLs for the feeds are the same as that of the feed icons that K2 displays on its category pages.


Multiple Instances
------------------

As with all Joomla! modules, you can create duplicates of the module with different config parameters and different publishing positions, etc. This may be useful if you have a lot of categories and want to provide separate lists for groups of related feeds.

Use the "Duplicate" button on the list of modules to achieve this. This is standard Joomla! functionality, so please see the Joomla! documentation for more details.


Who wrote this?
---------------

This code was written by Simon Champion.

All code in this repository is released under the GPLv2 licence. The GPLv2 licence document should be included with the code.



Known bugs and Limitations
--------------------------

None yet.


Todo
----

* Add an option for an "all categories" feed.


Trademarks and Licenses
-----------------------

* Joomla!® is a registered trademark of Open Source Matters, Inc.
* Joomla! is distributed under the GPLv2 licence.
* This package is distributed under the GPLv2 licence. The GPLv2 licence document should be included with the code.

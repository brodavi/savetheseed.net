<?php
# This file was automatically generated by the MediaWiki 1.26.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Sand Mountain Seed Bank";
$wgMetaNamespace = "Project";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://semantic.redmountainmakers.org";


## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "/images/4/4f/Banana.gif";

## UPO means: this is also a user preference option

$wgRestrictDisplayTitle = false;
## $wgAllowDisplayTitle = true;
$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@semantic.redmountainmakers.org";
$wgPasswordSender = "apache@semantic.redmountainmakers.org";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "seed_wiki";
$wgDBuser = "seed_wiki_user";
$wgDBpassword = "monsanto really sucks dude";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "b2d4bf29609d454fda35da395731b9737b3cbc49bd8c2796d52ea8e8091cf445";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "5fe0d17bbe0dd2c7";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-nc-sa/3.0/";
$wgRightsText = "Creative Commons Attribution-NonCommercial-ShareAlike";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-nc-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";
wfLoadSkin( 'Vector' );
$wgVectorUseSimpleSearch = true;
$wgVectorUseIconWatch = true;

# End of automatically generated settings.
# Add more configuration options below.

$wgShowExceptionDetails = true;

require_once( "$IP/extensions/SemanticBundle/SemanticBundleSettings.php" );
require_once( "$IP/extensions/SemanticBundle/SemanticBundle.php" );

require_once( "$IP/extensions/SemanticSignup/SemanticSignup.php" );
#require Real Name
$egSemanticSignupSettings['requireName'] = true;

#use form:user to generate a user page throutgh the account request page
$egSemanticSignupSettings['formName'] = 'User';

#The name of the user to automatically create the user page with.
# This user needs sufficient privileges to create an user account
# as well as creating new pages in the User: namespace.
$egSemanticSignupSettings['botName'] = 'Admin';

# Allow requiring new users to confirm themselves, etc.
require_once "$IP/extensions/ConfirmAccount/ConfirmAccount.php";
 $wgMakeUserPageFromBio = false;
 $wgAutoWelcomeNewUsers = false;
 $wgConfirmAccountRequestFormItems = array(
 	'UserName'        => array( 'enabled' => true ),
 	'RealName'        => array( 'enabled' => true ),
 	'Biography'       => array( 'enabled' => true, 'minWords' => 2 ),
 	'AreasOfInterest' => array( 'enabled' => false ),
 	'CV'              => array( 'enabled' => false ),
 	'Notes'           => array( 'enabled' => true ),
 	'Links'           => array( 'enabled' => false ),
 	'TermsOfService'  => array( 'enabled' => false ),
 );

# Get the wiki sending e-mails to people when it needs to
$wgSMTP = array(
	'host'		=>	'ssl://mail.redmountainmakers.org',
	'IDHost'	=>	'redmountainmakers.org',
	'port'		=>	465,
	'username'	=>	'outgoing@redmountainmakers.org',
	'password'	=>	'Arduino2015',
	'auth'		=>	 true
);

require_once( "$IP/extensions/Widgets/Widgets.php" );

#generate a user message on new user's talk page
require_once "$IP/extensions/NewUserMessage/NewUserMessage.php";
$wgNewUserMessageOnAutoCreate=false;
$wgNewUserSuppressRC=false;
$wgNewUserMinorEdit=true;

#Delete batches of pages
require_once "$IP/extensions/DeleteBatch/DeleteBatch.php";

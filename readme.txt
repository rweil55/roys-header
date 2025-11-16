Roys Trail Header theme

*   Sets up a header with a logo in the left, sitename/tagline in the middle,

*       and a series of randpm selected photos on the right.

*  The main content is one column wide, full screen width

*  The footer has the google translate widget, a login, copyright notice,

*       freewheeling or Roy Weil credit, webmaster feedback

*		the copyright notice can be changed in "appearance" "coutomizer", "site idennity"

*  File Manger will be modified to allow access only to the upload folder Theme expects the following stuff and may fail if they are not present:  *  A logo file in "Apperance", "Custimize", "Header Image"            height should match height of the random mages

		   may also be a small file that matchhes the header backgound color to eliminate logo

 *	A website title in "Appearance", "customize", "Site Identity"

 *	Images to be radom selected for the right hand header images

           in the directory wp-content/upload/Top-Banner-Images

		   will be displayed full size

 		   If an image name matches a page name then that photo will used tather than a random one

 *  A page with the a slug/link of webmaster-feedbaxk





	== Changelog ==

== 1.3.46 ==

	fix			replaced eriepittsburgh swish logo, with new logo

== 1.3.42 ==

	Feature 	made looking for page slug work

== 1.3.41 ==

	fix			Rewrote the 404 routine to use parsers

	Feature 	removed debug traceing

== 1.39-40 ==

	fix			widthed of google maps on cell phones
tailOnly
== 1.35-37 ==

	Feature 	added look for php, htm, html if input not found

== 1.3.31-32 ==

   Feature      Tommerllo header

   tailOnly

== 1.3.30 ==tailOnly

    fix         Error  on mobile device " undefined function strcomp, header:187"



== 1.3.2.29   2022-11-24

    fix             removed extra print out of <  i.e. found <<

== 1.3.2.27, 28 ==

    feature         added php for redirect case

    refactor       extension test for redirect case



== 1.3.2.20 - 26 ==

    feature         implemented dino1 style in header

    feature         Implemented 404 handling of /xx.htm redirect to /xx



== 1.3.2.19

    refactor        move reandom picture to the include folder



== 1.3.2.10 -18

        refactor    attempt to make code work on local 127.0.0.1 web site



== 1.3.2   2022-02-04 ==

        Feature     add ini_set(display_errore) if user is afministrator

        Fixed       Tailonly to not display the nav menu

        Fized       Pictures to emove an extra space in the require seachbox

        Fixed       middle block showing the URL

 //

    == 1.3.1 ==

        Feature     Added the Diomitedays switch, code

    == 1.2.29 ==

        refactor    Miscellanous clean up

	== 1.2.27 ==

		feature		added feature if logged ni and tailonly do NOT display trail

	== 1.2.26 ==

		feature		added the switch "tailonly" do NOT display header picture

    == 1.2.25 ==

        fix         remove translate debug

        feature     make retrospective a no header

        Fix         erie pitsburgh header - include image, chage bottom to top, include abspath...

    == 1.2.24 ==

        fix          addedis plugin_active to cause translate to reappear

    == 1.2.22

        fix         add  theyWorking code

    == 1.2.20 ==

        refactor    cleaned up the swithes adde all case, default barfs



    == 2020.06.06 ==

        Fix         fixed the splash logo on 2020.eriepitteburgh



    == 2020.05.30 ==

        Fix         cleaned up http to https

        Tweak       Added aria-label to "skip to content"

        Feature     if header logo is "white", move picture right, leave search box left

        Feature     If no subtitle, increase size of title

        Feature     Add copyright info at bottom is "nohead" option



    == 2020.03.07 ==

        feature     Added youtube apicode in function.php

    == 2.1.26 ==

        Fix         Updated some urls to https:

    == 2.1.24,25    2020-03-01

        Fix         Removed extranous message from the mobile view

	== 2.1.19-23  2020-01-01

		Feature		Added the internect archive t the 404  page

		Feature		added code to hide random image when custimize no display title

		feature		modifed the nohead option to display the copyright as well as the url

		feature		modifed the nohead option to display the date as well as the url

		Fix			search box not working

	== 2.1.18  2019-12-24 ==

		refactor	made the erie pittsburgh header work by matching tags

		refactor	moved selectin totop of code

		refactor	only include erie styles when needed

	== 2.1.14  2019-12-18 ==

		Fix			made menu color work on the footer

		Fix			Made nohead work on the footer, as url parameter

		Refactor	Added classes to deal with menu colors

	= 2.1.12 2019-11-21

		Fix			menu text color now works

		Feature		selected menu item colors are now the revese of menu colors

		Refactor	Rename  wordpress options to avoid theme/plugin conflicts

		RRefactor	Remove call to fetchparameterBoolean("noheader"), replaced with $_GET to eliminate dependancy

		Fix			parameter echo in call to wp_nav_menu

		Feature		Added note about menu colors in the description

	2 2.2.13 2019-12-18

		Refactor moved the header image file from individual sote to freewheeling

	= 2.2.11 2010-10-08

		Fix			replaced call to rrwUtil:fetchparameterBoolean("noheader")  with array_key_exists()

	= 2.2.10 2010-10-07

		Feature		if url has parameter noheader=true, thenno header will be displayed and footer will be the current url

	=2.2.9

		Feature		if right hand image file is named 'white' diaply nothing, rather than the image

	= 2.2.8 2019-09-05

		Fix			Restored the search box for non-erie websites

	= 2.2.7 2019-06-06

		Fix			handle case when ultimate-social-media-icons plugin is not active

	= 2.2.6 2019-06-06 =

		Feature		Added css to handle facebook, etc icons in the footer using the plugin -

								Social Media and Share Icons (Ultimate Social Media)

	= 2.1.5 =

		Feature 	Changed the copyright selecion from radio buttons to drowndowm

	= 2.1.1

		Feature		inlude the Erie to Pittsburgh Swish

	= 1.1.92

					Changed footer selection to select rather than a radio.

	= 1.1.91

		Fix:		Added the style to not display commnets - .comments-area {display:none;}

	= 1.1.90

		Refactor	Remove the copwrite notice from the sides of the page.

		Refactor	Removed the page.php template. now using page.php from main template

	= 1.1.89

		Tweak		Added "and others" with link to the EPTA footer

		Feature		Changed margin copyright notice from backgound to image so it will print, added class

		Feature		CSS changes to remove margins on smaller screens

		Fix			corrected the use of "role"tags by removing atributes

	= 1.1.87,88

		Cleanup:	Ran total validator and fixed miscellanous error/warnings (incorrect closing tags)

		Tweak:		Added Copyright for Erie Pittsburgh Trail

		Tweak:		And others

	= 1.1.86



	= 1.1.85

		Feature:	Added href to the footer copyright section

	= 1.1.84

		Feature: 	added color section for menu and footer background and text

	= 1.1.82

		Fix: 		get the copyright notice to link

	= 1.1.81

		Fix: 		fixed the default coyright notice

	=1.1.80

		Tweek: 		Added copyright setting to the theme customizer

		Tweek: 		Create top-Banner-images directory if not there

	=1.1.79

		Fix: Cause the right hand header image to shrink on size

	=1.1.78

		Fix: test for the copyright image along the sides of the page

	=1.1.76 =

		Update: caused copywrite notice to be sticky over theme upgrades

	=1.1.75 =

		Fix: missing entrytitleheader when copywrite borders were used

		Fix: Adjust sizes of h1, h2, h3 so they step decrease

		fix: 500 error on the 404 page when there was no REDIRECT_URL

		Tweek: locatons of the copywrite images.

	= 1.1.73 =

		Update: header.php: Added the link to Google Map if file name contained overvew

		Tweek: refactor google map link for set up as a parameter

		Treak: changed size of site-title 24px, and site-description 20px

	= 1.1.71

		Removed: shortcode display_doc, display_doc_button

	= 1.1.70

		Fix: in footer do not dipaly privacy policy link if it is blank.

	= 1.1.69

		Feature: Changed sote-info{ max-width:1046px} to none

	= 1.1.68

		Feature: Added privacy link to the standard footer if privcy page defined

		Fix: Attempt a fix on the footer login when site down a level

	= 1.1.67

		Fix: changes the call to rrw_util_inc.php from require_once to require plugin.

	= 1.1.66

		Added: function fetchparameterInteger

	1.1.65

		Updated: Documantation above

		Fixed: modified footer login,webmaster links to use site_url()

		Update: rrrwUtil - mode all routines into the class

		Update: replaced all rrwUtil_ calls with rrwUtil::

	1.1.64

		changed the include of parent style sheet to an enque_style

		removed write_log in header, and footer

		added the boulidPrivacyPage to create/replace a privacy page if it  exists.

	1.1.63

		fixes double slask on webmaster of multi site

		changed http://broken to https://bro

	1.1.58-62

		move local source to a2-pillow

		removed the rrUtil routines

		added trailing slashs in the footer links

		added https: and http: to the footer links

	1.1.57

		removed the insert of the squil eval.js in the header.php

		remove blank lines in the readme.txt file

	1.1.56

		Fixed the 404 routine. change REDIRECT_REDIRECT_REDIRECT_URL to REDIRECT_URL

	1.1.55

		Added slashes to feedback and admin in footer.php

	1,1,54

		Changed the footer from wp_login to wp-admin

	1.1.53

		Changed the title on the menu bar

	1.1.52

		Added code to exclude older uploads and nggallery (change false to true in functionsRweil_inc)

	1.1.51

		removed the write_log($title) in the header.php

	1.1.50

		removed teh load of sqill-eval.js in the header routine

	1.1.49

		removed the [ifPhotoHide] shortcut

		added css of .hideOnSmallScreen to hide stuff on small screen

		remove code for $desktop, $phone

	1.1.48,49

		modified the @media css, and header routines to eliminate masthead on small creens

		added the [ifphonehide] shortcut.

	1.1.47

		added an is_exists to the sqlClean function in the utils

	1.1.46

		another attempt to fix the slash in the webmaster footer link, based on mulitsite.

		added empty cell before and after "login" in the footer

		Added the function ifphonehide($item) to hide imagebased on if the output is a phone

		refactored functions.php to eliminate duplicate fucnction with the functionRweil_inc.php

	1.1.45

		Added the functionRweil_inc.php routne for the rweilutil... routine

		added write_log to functionRweil_inc.php

	1.1.43,44

		refactor the gtranslate code in the footer

		Added the libary functionsRweil_inc for some functions used throughout.

	1.1.42

		remove extra slash from Webmaster Feedback in the footer

	1.1.40,41

		Added teh fetch parameter routines

	1.1.38,39

		updated the header to enable display:none on the masthead pictures

	1.1.37

		Fixed footer test fro freewheeling easy map

		Changed gtranslate in foorter to horizonal layout.

`	1.1.36

		Change footer code for gtranslate from code to a sortcode

		Add and removed widgets in the footer

	1.1.35

		moved mapping java script setup to add_action(wp_head,...

	1.1.34

		put a delay on the tooltips

		change to roy plugin server

	1.1.33

		added slash to footer webmaster_feedback link

	1.1.32

		Added tooltip css

		changed all the # commnets tp /* commnets

	1.1.31

		Remove printout 1n 404 to stop error message

		in 404 change space to dash

		in 404 change underscore to dash

		made translate references in the footer relative links

		change http code from 302 -> 301,  temp-> permanent

	1.1.30

		clean up between local - remote

	1.1.29

		updated the 404 page to find the page if exists

	1.1.28

		Change the code for the update

	1.1.27

		Try again to get rid of the // on the banner pictures

	1.1.26

		if the basename of a file in the Top-Banner-Images matches a page "Title Name"

					rhen use that image rather than a randomly selected image.

	1.1.24

		another Modify the header pictre search to return only one / not two //

	1.1.23

		Modifed the header pictre search to return only one / not two //

		changed footer to link to the webmaster Feedback page rather than get_involved/contat_us

	1.1.22

		Added the write_log function to functions.php

	1.1.21

		Removed header pictures when accessed from a mobile phone

	1.1.20

		Fix in themes/functions to get the correct modifications to wp_file_manager

	1.1.19

		Fixed the banner picture search to work with multisite

	1.1.18

		added the update checker in the function routine

	1.1.16

		Added the GPLv3+ licnese, added some comments

 	1.1.15

		removed comments from all pages - page.php

		Added **** comment lines between various sections

	1.1.14

		Added source code to change email name/address from "Word Press" on notifications - function.php

	1.1.xx

		added ccheck for plugin freewheelingeasymap plugin before including script - header.php

	1.1.10

		added update version check on Roy Trail header function.php

 *

 *	to use this theme: do the following

 *	Under "appearance", "customize", "Header Image" upload the left hand header logo

 *	   at a height of about 150

 *	Under "appearance", "customize", "Site Identity" enter header text

 *	Upload right hand header images to the directory wp-content/upload/Top-Banner-Images

 *

 *   Commonly used plugins:

 * 	Google Translate plugin

 *  Google Analytics for WordPress

 *	Google XML sitemap

 *  iThemes Sync

 *	UpdraftPlus - Backup/Restore

 *

 *   Other plugins that might be used

 *	freewheeling map

 *	Mmm Simple File/Category Lister

 *	Seamless Donations

 *	Seamless Donations Custom

 *	Table Press

 *	WordPress Meta Robots

 *  	Add Meta Tags

 *	WP File Manager

 */

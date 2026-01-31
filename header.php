<?php
/*
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
/* 	this is Roy Weil's standard Trail header
 *
 *	to use: do the following
 *	Under "appearance", "customize", "Header Image" upload the left hand header logo
 *	   at a height of about 150
 *	Under "appearance", "customize", "Site Identity" enter header text
 *	Upload right hand header images to the directory wp-content/upload/Top-Banner-Images
 *			if no right hand image wanted, leave directory empty
 *
 */
$debugSwitch = false;
$eol = "<br />\n";
//if ( current_user_can( "edit_users" ) ) {
ini_set("display_errors", "1");
error_reporting(E_ALL);
//} // else no auto debug
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <!-- page created by header.php try #6 ---------------------------------------- -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title>
        <?php
        wp_title('|', true, 'right');
        ?>
    </title>
    <!--	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
-->
    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <?php
    print "<!-- calling wp_head() <br />$eol -->\n  ";
    wp_head();
    print "<!-- after calling wp_head() <br />$eol -->\n  ";
    $rrw_trail_menu_footer_background_color =
        get_option("freewheelingeasy_menu_footer_background_color", "black");
    $rrw_trail_menu_footer_text_color =
        get_option("freewheelingeasy_menu_footer_text_color", "white");
    // switchname used to select different header based on url
    print "
<style>
.TDflex {
    float:left
}
</style>";
    $switchName = rrw_trail_SetSwitchName();        // used by serval switches below
    print "\n<!-- themes style section based on url and customizations  - $switchName ---------------------------------- -->\n";
    switch ($switchName) { // set styles base on switch
        case "eriepittsburgh":
            print "
<style>
div.erieswishlogo {
	position: relative;
	top: 0;
	left: 0px;
}
div.erieSearchForm {
	position: absolute;
	bottom: 5px;
	right: 0px;
	border: 2px solid #73AD21;
}
div.eriemenu {
	position: absolute;
    top:45px;
	left: 125px;
	height: 20px;
# border: 2px solid #73AD21;
	z-index: 100;
}
/* Mobile devices */
@media (max-width: 359px) {
}
</style>
    ";
            break;
        case "picture":
        case "pictureDev":
            print "
<script src='/wp-content/plugins/roys-picture-processing/pictures.js'></script>
<script src='https://pictures.shaw-weil.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0'
    id='jquery-core-js'></script>
<script src='https://pictures.shaw-weil.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
    id='jquery-migrate-js'></script>
<link rel='stylesheet'
    href='https://pictures.shaw-weil.com/wp-content/plugins/roys-picture-processing/pictures.css' media='all'
    id='picture.css' ></link>
<style>
.nav_rrw_buttons {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
";
            break;

        case "theyWorking":
        case "tommarellogc":
            $rrw_trail_menu_footer_text_color = "white";
            break;
        case "dino1":
        case "normal":
        case "clean":
        case "demo7":
        case "dino":
        case "edit":
        case "linkup":
        case "nudges":
        case "ohio";
        case "tailOnly":
            break;
        case "validate":
            $_GET['nohead'] = "true"; // force no header
            break;
        default:
            print "<p>E#1302 Unknown switchName of '$switchName' in header.php</p> ";
            break;
    }
    // end f ( $switchName == "eriepittsburgh" )
    print "
<style>
.menucolor {
    color: $rrw_trail_menu_footer_text_color;
    background-color: $rrw_trail_menu_footer_background_color;
    min-height: 26px;
}
.menuitem {
    color: $rrw_trail_menu_footer_text_color;
    background-color: $rrw_trail_menu_footer_background_color;
    min-height: 26px;
}
.nav-menu a {
        color: $rrw_trail_menu_footer_text_color!important;
        background-color: $rrw_trail_menu_footer_background_color;
        min-height: 26px;
    }
    .nav-menu .current_page_item > a,
    .nav-menu .current_page_ancestor > a, .
    nav-menu .current-menu-item > a,
    .nav-menu .current-menu-ancestor > a {
        color: $rrw_trail_menu_footer_background_color!important;
        background-color: $rrw_trail_menu_footer_text_color;
    }
    .site-footer a {
        color: $rrw_trail_menu_footer_text_color!important;
    }
</style>
<!-- end themes style section based on url and customizations -->
<script src='https://pictures.shaw-weil.com/randomTrailPicture.js'></script>
</head>
<body <?php body_class(); ?>
    <div id='page' class='hfeed site'>
        <!--  ==================================================================================================== header -->
        <header id='masthead' style='text-align:left;'>
            <a class='screen-reader-text skip-link' href='#content' aria-label='";
    esc_attr_e(' Skip to content', 'twentythirteen');
    print "' title='";
    esc_attr_e('Skip to content', 'twentythirteen');
    print "'> </a>\n";
    $image = get_header_image();
    $homeName = esc_attr(get_bloginfo('name', 'display'));
    if (array_key_exists("nohead", $_GET))
        $noHeader = true;
    else
        $noHeader = false;
    if ($noHeader) {
        print "<!-- no header displayed as per request -->";
        return;
    }
    $mobile = false;
    if (array_key_exists('HTTP_USER_AGENT', $_SERVER)) {
        $browser = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($browser, "Mobile") !== false || strpos($browser, "Samsung"))
            $mobile = true;
    }
    $rightRandomImage = ""; // the various switch routines will set this if they want it
    $searchbox = "";        // the various switch routines will set this if they want it
    if ($mobile && (0 != strcmp("dino1", $switchName))) {
        print "<!-- mobile devices do not get the images -->\n";
    } else {
        print "<!--  ------------------------------------------------------------- $switchName ----------------------------   heading display -->";
        $blogInfoDescription = get_bloginfo('description');
        $LogoImage = get_header_image();           // default logo image used by serval switches below

        switch ($switchName) {
            case "nudges":
            case "demo7":
                $imageSource = "/wp-content/themes/roys-header/images/jus-sayin-slanted-logo.png";
                print "
            <!-- start div id='rrw_header_menu_block_1' -->

<div id='rrw_header_menu_block' >
    <table id='rrw_header_mastheadPhotos' style='max-height: 30px; border:2px' role='presentation'>
        <tr>
           <td class='TDflex' >
                <h2 style=' ' valign='top' >CREATIVE NUDGES&trade;</h2></td>
             <td class='ohioTDflex' > <img src='$imageSource' height='500%' align='left' ></td>
          <td class='TDflex' >
                <div id='rrw_header_searchform' >
                    <form action='onecard' onlostfocus='this.submit();' method='get'   >
                         <input type='submit' value='Please find me a nudge(s)' ><br />
                       <input type='text' style='width:198px;' name='SearchBox' id='SearchBox' placeholder='Enter a one word search term' /><br/>
                    </form>
                </div>
            </td>
        </tr>
    </table>
</div>
            <!-- end /div id='rrw_header_menu_block_1' -->
    ";
                break;
            case "eriepittsburgh": // -------------------------------------------- header erie
                $imageSource = get_bloginfo('stylesheet_directory') . "/images/cropped-swishlogo.jpg";
                print "
            <!-- start div id='rrw_header_menu_block_1' -->
<div id='rrw_header_menu_block' class='erieswishlogo'>
    <table id='rrw_header_mastheadPhotos' style='min-height: 30px; border:2px' role='presentation'>
        <tr>
            <td><img src='$imageSource' class='alignnone size-full' ></td>
        </tr>
    </table>
    <div id='rrw_header_searchform' class='erieSearchForm'>";
                get_search_form();
                print " </div>
    <!-- end /div id='rrw_header_searchform'  --> \n
</div>
            <!-- end /div id='rrw_header_menu_block_1' --> ";
                break;
            case "picture":
            case "pictureDev":
                // picture has it own special header, does not use this code
                if ($debugSwitch) print "working on picture header $eol";
                if ("pictureDev" == $switchName)
                    $dev = "-dev";
                else
                    $dev = "";
                $pictureSearchBox =
                    "/home/pillowan/www-shaw-weil-pictures$dev/wp-content/plugins" .
                    "/roys-picture-processing/searchBox.php";
                if (!file_exists($pictureSearchBox)) {
                    print "E#1300 looking for the file $pictureSearchBox,
                        need to load the pictures plugin
                            <br />  --- Fatal error ";
                    exit();
                }
                require_once "$pictureSearchBox";
                if ($debugSwitch) print "got the code $eol ";
                $box = rrwPictures_searchBox::rrwPicturesSearchBox();
                if ($debugSwitch) print "rrwPicturesSearchBox returned, " . strlen($box) . "
                        bytes $eol ";
                print $box;
                break;
            case "theyWorking":
                print '
    <table border="0" id="table2" cellspacing="0" cellpadding="0"
    style=\'width:100%; border:0;
background-image:url("/wp-content/themes/roys-header/images/riders-header-1-1700.jpg")\' >
        <tr>
            <td align="center" style="headerTD">
		<h3 align="center"><font color="white">
		<span style="font-size: 28pt">
		Trail Volunteer Fund<br></span></font>
        <font size="5" color="white">of The Pittsburgh Foundation</font></h3>
        <h3 align="center"><span style="font-weight: 400"><font color="white"><i>
	Supporting volunteer trail projects with tools and materials</i></font></span></h3>
    <span align="center" >
    <!-- navigation buttons -->
       <map name="FPMap0_I1">
		<area href="/" shape="rect" coords="4, 0, 172, 44"
				alt="link to Home page">
		<area href="/projects/" shape="rect" coords="192, 0, 360, 44"
				alt="Link to projects page">
		<area href="/grants/" shape="rect" coords="378, 0, 545, 44"
				alt="Link to ho to make a grant page">
		<area href="/helpus/" shape="rect" coords="566, 0, 735, 44"
				alt="Link to How to make a contribution page">
		</map>
        <div style=\'align-center\'>
		<img class="nav_rrw_buttons" src="/wp-content/themes/roys-header/images/sign-buttons-v2.gif" usemap="#FPMap0_I1" alt="navigation buttons" width="735" height="44" >
        </div>
    <!-- navigation buttons -->
    </span>
</td>
</tr>
</table>
        ';
                break;
            //-------------------------------------------------------------------------------------------
            case "ohio":
                print "<!-- Ohio River Trail header -->";
                $siteUrl = site_url();
                print "
            <div id='rrw_header_menu_block'>
    <table id='rrw_header_mastheadPhotos' style='min-height: 30px;
            border: 2px; ' role='presentation'>
        <tr>
            <td class='TDflex'>
                     <img src='$LogoImage' alt='$homeName logo ' class='alignnone size-full' > </a>
            </td>
            <td  border:thin;'>
               <a href='$siteUrl' title='$homeName' rel='home'>
                <h1 class='site-title'>$homeName</h1>
                <h2 class='site-description'> $blogInfoDescription</h2>
                </a>
            </td>
            <td  >
            <img src='$siteUrl/wp-content/themes/roys-header/images/ohioRiverTrailOverview.jpg'
                alt='Ohio River Trail Overview' width='200' >
            </td>
        </tr>
    </table>
    ";
                break;
            // -------------------------------------------------------------------------------------------
            case "normal":
            case "linkup":
                // build sme variables
                $rightRandomImage = "<div id='randomTrailImageGoesHereDiv'>one moment while we fetch a trail picture
                <script>
                    randomPicFunction('randomTrailImageGoesHereDiv');
                </script>
            </div>";
                $searchbox = get_search_form(array("echo" => false));
                $siteUrl = site_url();
                if (empty($blogInfoDescription)) {
                    // empty description - increase size of title
                    print "
<style>
    .site-title { font-size: 36px;  }
</style>
";
                }
                print "
<div id='rrw_header_menu_block'>
    ";
                if (false === strpos($LogoImage, "White_48-x-40.png")) {
                    // we have a logo image.
                    print "
    <table id='rrw_header_mastheadPhotos' style='min-height: 30px;
            border: 2px; ' role='presentation'>
        <tr>
            <td>
                     <img src='$LogoImage' alt='$homeName logo ' class='alignnone size-full' > </a>
            </td>
            <td style='text-align:center; border:thin;'>
               <a href='$siteUrl' title='$homeName' rel='home'>
                <h1 class='site-title'>$homeName</h1>
                <h2 class='site-description'> $blogInfoDescription</h2>
                </a>
            </td>
            <td class='site-description'>
            $rightRandomImage
            $searchbox
            </td>
        </tr>
    </table>
    ";
                } else {
                    // no logo image just the search box
                    print '
    <span class="screen-reader-text">Search for:</span>
    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="searchBox" />
    </label>
    <input type="submit" class="search-submit" value="Search" />
    </form>
    </td>
    </tr>
    </table>
    ';
                }
                print "</div> <!-- end /div id='rrw_header_menu_block_3' -->";
                break;
            case "dino":
            case "clean":
            case "tailOnly":
            case "edit":
                print "<!-- no header displayed -->";
                break;
            case "tommarellogc":
                print '
        <img src="https://tommarellogc.com/wp-content/uploads/2014/09/tommarelloLogo.jpg" >
';
                break;
            case "dino1":
                $title = wp_title("", false);
                print "<div id=dinoMenu class='dinoMenu' > <!-- entire space is orange -->
            <table class='dinoMenu' style='table-layout: auto;' >
       <tr class='dinoMenu' >
            <td><span class='site-title' > $title </span><br /><br />\n";
                $siteDire = "/home/pillowan/www-dinomitedays";
                $contentLoc = "$siteDire/wp-content/plugins/dinomitedays/footer_dino1.php";
                include "$contentLoc";
                print "
            </td>
            ";
                if ($mobile) { // on mobile devices do not display the logo
                    print "
            <td> </td>
            ";
                } else {
                    print "
        <td class='dinoMenu' >
            <a href='/' ><img src='/wp-content/themes/roys-header/images/dinomiteLogo-85.png'
             > </a>
        </td>";
                }
                print "
     </tr></table>
  </div>
";
                break;
            case "validate":
                break;
            default:
                print "<p>E#1304 Unknown switchName of '$switchName' in header.php</p> ";
        } // end of switch";
    } // end if ( $mobile )
    print "\n\n
    <!--  ================================================================= $switchName ============== nav bar -->
    ";
    // --------------------------------------------------------- nave bar code
    switch ($switchName) {
        case "eriepittsburgh": // --------------------------------------------
        case "nudges":
        case "demo7":
            // eriepittsburgh has menu buried i the swish
    ?>
            <div id="navbar" class="eriemenu  menucolor" style='z-index:1;'>
                <nav id="site-navigation" class="navigation main-navigation menucolor">
                    <table role="presentation">
                        <tr>
                            <td>
                                <h3 class="menu-toggle">
                                    <?php _e('Menu', 'twentythirteen'); ?>
                                </h3>
                                <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e('Skip to content', 'twentythirteen'); ?>">
                                    <?php _e('Skip to content', 'twentythirteen'); ?>
                                </a>
                                <?php
                                $rrw_trail_menuText = wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'nav-menu menucolor',
                                    'echo' => false
                                ));
                                echo $rrw_trail_menuText;
                                ?>
                            </td>
                        </tr>
                    </table>
                </nav>
            </div>
            <!-- id=navbar  -->
    <?php
            break;
        case "dino":
            print "<a href='/' ><img src='/wp-content/themes/roys-header/images/dinoLogo.png' width='768' ></a>";
            break;
        case "dino1":
        case "clean":
        case "picture":
        case "pictureDev":
        case "tailOnly":
        case "theyWorking":
        case "edit":
        case "validate":
            // menu is displayed on top of the header image
            // or not displayed at all
            print " <!-- No menu displayed -->";
            break;
        case "normal":
        case "linkup":
        case "tommarellogc":
        case "ohio":
            print rrwHeaderMenu();
            // code moved to subroutine, o that footer can show menu as well
            break;
        default:
            print "<p>E#1305 Unknown switchName of '$switchName' in header.php</p> ";
    } // end switchName == "eriepittsburgh" )
    ?>
    <!-- =====================================  end #navbar -->
    </div>
    </header>
    </div>
    <!-- end dive id="page" -->
    <!-- #masthead -->
    <!--  ===== last line -2 of header.php ============================================ main content -->
    <div id="main" class="site-main">
        <?php
        function rrwHeaderMenu()
        {
            $msg = "";
            $msg .= "<!--  rrwHeaderMenu  -->
            <div id=\"navbar\" class=\"eriemenu  menucolor\" style='z-index:1;'>
                <nav id=\"site-navigation\" class=\"navigation main-navigation menucolor\">
                    <table role=\"presentation\">
                        <tr>
                            <td>
                                <h3 class=\"menu-toggle\">
                                    <?php _e('Menu', 'twentythirteen'); ?>
                                </h3>
                                <a class=\"screen-reader-text skip-link\" href=\"#content\" title=\"<?php esc_attr_e('Skip to content', 'twentythirteen'); ?>\">
                                    <?php _e('Skip to content', 'twentythirteen'); ?>
                                </a>";
            $rrw_trail_menuText = wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu menucolor',
                'echo' => false
            ));
            $msg .= $rrw_trail_menuText;
            $msg .= "
                            </td>
                        </tr>
                    </table>
                </nav>
            </div>
            <!-- id=navbar  -->
            ";
            return $msg;
        }
        ?>
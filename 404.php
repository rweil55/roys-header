<?php

/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
global $eol;
$debug404 = false;
if ($debug404) ini_set('display_errors', 1);
$switchName = rrw_trail_SetSwitchName();
switch ($switchName) {
    case "shaw-weil":
        LookForTrail();
        break;
    case "nudges":
        LookForCreative();
        break;
    default:
        DisplayNormal404();
        break;
}
return;


function LookForTrail(): void
{
    global $eol, $wpdb, $table_prefix, $wpdbExtra, $debug404;
    $urlarray = parse_url($_SERVER["REQUEST_URI"]);
    if ($debug404) {
        var_dump($urlarray);
        print $eol;
    }
    $scheme = $_SERVER["REQUEST_SCHEME"];
    $host = $_SERVER['SERVER_NAME'];
    if ($debug404) print "host is $host $eol";
    $path = $urlarray["path"];
    if ($debug404) print "path is $path $eol";
    $query = $_SERVER["QUERY_STRING"];
    $url = $_SERVER["REQUEST_URI"];
    $pathinfo = pathinfo($path);
    $filename = $pathinfo["filename"];
    $direname = $pathinfo["dirname"];
    if ("/" == $direname) {
        $direname = "";
    }
    if ($debug404) print "directory - $direname, file - $filename, ABSPATH " .  $eol;
    $pageSlug = str_replace("/", "", $filename);
    if ($debug404) print "page slug is $pageSlug $eol";
    if (0 == strncmp($pageSlug, "trailid=", 8)) {
        header("Location: $direname/?$pageSlug");
        if ($debug404) print "trying   $direname/?$pageSlug $eol";
        return;
    }
    $sqlPage = "SELECT * FROM " . $table_prefix . "posts where post_type = 'page' and post_status='publish' and post_name = '$pageSlug' ";
    $result = $wpdb->get_results($sqlPage);
    if ($debug404) print "sql is $sqlPage $eol";
    if ($wpdb->num_rows > 0) {
        $newRequest = $pageSlug;
        if ($debug404) print "page slug $filename exists $eol";
        header("Location: $newRequest");
        return;
    } else {
        if ($debug404) print "page slug $filename does not exist $eol";
    }
    $possibleExt = array("htm", "php", "html");
    foreach ($possibleExt as $newExt) {
        $file = "$filename.$newExt";
        if (!empty($direname)) {
            $fileLoc = ABSPATH . "$direname$file";
            if ($debug404) print "added dire $eol";
        } else {
            $fileLoc = ABSPATH . "$file";
            if ($debug404) print "no dire $eol";
        }
        if ($debug404) print "file location is $fileLoc $eol";
        if (file_exists($fileLoc)) {
            $newRequest = "$file";
            if (!empty($query)) {
                $newRequest .= "?$query";
            }
            if ($debug404) print "new request is $newRequest $eol";
            //   header("Location: $newRequest");
            //  }
        } // end  if ( $ext == $extTest )
        // -------------------------------------------------------- //
        if ("edit.shaw-weil.com" == $host && empty($query)) {
            $debug404 = true;
            if ($debug404) {
                print "<strong>special code</strong> for edit.shaw-weil.com : host is $host ,path is $path ,query is $query ,url is $url $eol";
                print "filename is $filename ,direname is $direname ,page slug is $pageSlug ,sql is $sqlPage $eol";
            }
            // see if it is just a trail name as the page slug
            //      if so redirect to the page with ?trailId=page slug
            $sqlTrail = "SELECT * FROM  $wpdbExtra->trails where trId = '$pageSlug' ";
            $result = $wpdb->get_results($sqlTrail);
            if ($debug404) print "sql is $sqlTrail $eol";
            if ($wpdb->num_rows > 0) {
                $newRequest = "$direname/?trailid=$pageSlug";
                if ($debug404) print "lets try $newRequest  $eol";
                header("Location: $newRequest");
                return;
            } // end if ($wpdb->num_rows > 0)
            // see if is just a fix task name as the page slug
            //      if so redirect to the page with ?task=page slug
            if ($debug404) print "direname is $direname try a fix task $eol";
            if ("/fix" == substr($direname, 0, 4) && empty($query)) {
                $newRequest = "$direname/?task=$pageSlug";
                if ($debug404) print "lets try $newRequest  $eol";
                header("Location: $newRequest");
                return;
            } // end if ("/fix" == substr($pageslug, 0, 3))
            if ("task=" == substr($pageSlug, 0, 5)) {
                $newRequest = "$direname/?$pageSlug";
                if ($debug404) print "lets try $newRequest  $eol";
                header("Location: $newRequest");
                return;
            } // end if ("/task" == substr($pageslug, 0, 5))

        }
    } // end foreach ( $possibleExt as $newExt )

    return;
}
function LookForCreative(): void
{
    global $eol, $wpdb, $wpdbExtra;
    $debugCreative = true;
    $permaLink = $_SERVER["REQUEST_URI"];
    $permaLink = trim($permaLink, "/ ");
    $newRequest = "https://creative-nudges.com/onecard/?n=$permaLink";
    header("Location: $newRequest");
    /*
    get_header();
    if ($debugCreative) print "permaLink is $permaLink $eol";
    print "[creative_nudge_search SearchBox=$permaLink]";
    get_footer();
    */
    return;
}
function DisplayNormal404()
{
    get_header();
?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <header class="page-header">
                <h1 class="rrw-title">
                    <?php _e("$url was not Found on site", 'twentythirteen'); ?>
                </h1>
            </header>
            <div class="page-wrapper">
                <div class="page-content">
                    <h2>
                        <?php _e('This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen'); ?>
                    </h2>
                    <p>
                        <?php _e('It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen'); ?>
                    </p>
                    <?php get_search_form(); ?>
                    <div id="wb404" />
                    <script src="https://archive.org/web/wb404.js"> </script>
                </div> <!-- .wb404 -->
            </div> <!-- .page-content -->
        </div> <!-- .page-wrapper -->
    </div> <!-- site-content -->
    </div> <!-- #primary -->
<?php get_footer();
} // end function DisplayNormal404
?>
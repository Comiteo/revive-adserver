<?

/*********************************************************/
/* Database configuration                                */
/*********************************************************/

// MySQL hostname
$phpAds_hostname = "localhost";

// MySQL username
$phpAds_mysqluser = "mysqlusername";

// MySQL password
$phpAds_mysqlpassword = "mysqlpassword";

// The database phpAdsNew lives in
$phpAds_db = "phpads";

// phpAdsNew' database tables
$phpAds_tbl_adclicks = "adclicks";
$phpAds_tbl_adviews = "adviews";
$phpAds_tbl_adstats = "adstats";
$phpAds_tbl_banners = "banners";
$phpAds_tbl_clients = "clients";
$phpAds_tbl_session = "session";
$phpAds_tbl_acls = "acls";

// Use persistent connections to the database
$phpAds_persistent_connections = "0";

// Use INSERT DELAYED in logging functions?
$phpAds_insert_delayed = false;



/*********************************************************/
/* phpAdsNew configuration                               */
/*********************************************************/

// The URL to your phpAds-installation
$phpAds_url_prefix = "http://www.your-url.com/phpAdsNew";

// HTML header and footer file (relative path)
$phpAds_my_header="";
$phpAds_my_footer="";

// Standard colors
$phpAds_table_border_color = "#000099";
$phpAds_table_back_color = "#CCCCCC";
$phpAds_table_back_color_alternative = "#F7F7F7";
$phpAds_main_back_color = "#FFFFFF";

// Your language file
$phpAds_language = "english";

// The name of this application
$phpAds_name = "phpAdsNew";

// Company Name
$phpAds_company_name = "mysite.com";



/*********************************************************/
/* Statistics and logging                                */
/*********************************************************/

// Use compact or verbose statistics
$phpAds_compact_stats = 1;

// Enabled logging of adviews?
$phpAds_log_adviews = true;

// Enabled logging of adclicks?
$phpAds_log_adclicks = true;

// Reverse DNS lookup remotes hosts?
$phpAds_reverse_lookup = false;

// Hosts to ignore (don't count adviews coming from them)
$phpAds_ignore_hosts = array();   // Example: array("slashdot.org", "microsoft.com");

// weeks start on sundays if "0", on mondays if "1"
$phpAds_begin_of_week = "1";

// Precision of showing percentage results
$phpAds_percentage_decimals = "1";

// E-mail admin when clicks/views get low? (0=no, 1=yes)
$phpAds_warn_admin = "1";

// E-mail client when clicks/views get low? (0=no, 1=yes)
$phpAds_warn_client = "1";

// Minimum clicks/views before warning e-mail is sent
$phpAds_warn_limit = "100"; 



/*********************************************************/
/* Banner retrieval                                      */
/*********************************************************/

// Use random or sequential banner retrieval? 
// 0 = Random banner retrieval (default)
// 1 = Normal sequental banner retrieval
// 2 = Weight based sequential banner retrieval
// 3 = Full sequential banner retrieval
$phpAds_random_retrieve = 0;

// Use conditional keywords? (0=no, 1=yes)
$phpAds_con_key = "1";

// Use multiple keywords for banners in banner table? (0=no, 1=yes)
$phpAds_mult_key = "1";

// default banner, it is show when phpAdsNew can't connect to the database or
// there are absolutely no banner to display. The banner is not logged.
// Enter the complete url (incl. http://) for the image and the target,
// or leave them empty if you don't want to show a banner when this happens.
$phpAds_default_banner_url = "";
$phpAds_default_banner_target = "";



/*********************************************************/
/* Banner storage and types                              */
/*********************************************************/

// Allowed banner type methods
$phpAds_type_sql_allow  = true;
$phpAds_type_web_allow  = true;
$phpAds_type_url_allow  = true;
$phpAds_type_html_allow = true;

// Web banner configuration
// 0 = local mode (stored in a local directory)
// 1 = ftp mode (stored on a external ftp server)
$phpAds_type_web_mode   = "0";

// Local mode Web banner directory
// You need to make sure this directory is writable by PHP!
$phpAds_type_web_dir    = "/home/myname/www/ads";

// FTP mode Web banner server
$phpAds_type_web_ftp	= "ftp://user:password@ftp.myname.com/ads";

// Public URL of local directory / ftp server
$phpAds_type_web_url    = "http://www.myname.com/ads";



/*********************************************************/
/* Administrator configuration                           */
/*********************************************************/

// Admins's username
$phpAds_admin = "phpadsuser";

// Admin's password
$phpAds_admin_pw = "phpadspass";

// Admin's full name (used when sending stats via email)
$phpAds_admin_fullname = "Your Name";

// Admin's email address (used to set the FROM-address when sending email)
$phpAds_admin_email = "your@email.com";

//Mail Headers for the reflection of the sender of the daily ad reports
$phpAds_admin_email_headers = "From: $phpAds_admin_email \n";







/*********************************************************/
/* phpAdsNew self configuration code - don't change      */
/*********************************************************/

// Disable magic_quotes_runtime
set_magic_quotes_runtime(0);

if (empty($phpAds_path)) {
    if (strlen(__FILE__) > strlen(basename(__FILE__)))
        $phpAds_path=substr(__FILE__, 0, strlen(__FILE__) - strlen(basename(__FILE__)) - 1);
    // If this path doesn't work for you, customize it here like this
    // $phpAds_path="/home/myname/www/phpAdsNew";       // Note: no trailing backslash
}

if (empty($phpAds_path))
    $phpAds_path = ".";

?>
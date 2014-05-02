<?php
    # script to check if we are inside firewall, else return "no wiki" message (static snapshots in future)
    $wikilink = "http://micronwiki.bioch.ox.ac.uk/mediawiki";
    # set up IP ranges inside the firewall
    # 1. Biochemistry: 129.67.72.0/21
    $lower1="129.67.72.1";
    $upper1="129.67.79.254";
    $lower_dec1 = ip2long($lower1);
    $upper_dec1 = ip2long($upper1);
    # 2. Dunn School: 129.67.80.0/22
    $lower2="129.67.80.1";
    $upper2="129.67.83.254";
    $lower_dec2 = ip2long($lower2);
    $upper_dec2 = ip2long($upper2);
    # now get viewer IP address
    $vwr_ipaddress = getenv(REMOTE_ADDR);
    $vwr_dec = ip2long($vwr_ipaddress);
    # check if we are external
    $extViewer=0;
    if( !( (($vwr_dec>=$lower_dec1)&&($vwr_dec<=$upper_dec1))||(($vwr_dec>=$lower_dec2)&&($vwr_dec<=$upper_dec2)) ) ){
        $extViewer = 1;
        $wikilink = "noWiki.shtml";
    }
    # function to return appropriate URL: currently either a specific wiki page, or a message for external viewers
    function wikiHref($extViewer, $wikiPage)
    {
        if($extViewer){
            echo "noWiki.shtml";
        }else{
            echo "http://micronwiki.bioch.ox.ac.uk/mediawiki/index.php/$wikiPage";
        }
    }
?>

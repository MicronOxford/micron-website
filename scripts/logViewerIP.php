<?php
    $wikilink = "http://micronwiki.bioch.ox.ac.uk/mediawiki";
    $vwr_ipaddress = getenv('REMOTE_ADDR');
    $logFile = "scripts/viewerIPlog.txt";
    if($fh = fopen($logFile, 'a')){
        $timestamp = date('Y/m/d H-i-s :');
        $logEntry="$timestamp viewer IP address : $vwr_ipaddress\n";
        fwrite($fh, $logEntry);
    }else{
        echo "<!-- Warning: could not open IP log file -->\n";
    }
?>

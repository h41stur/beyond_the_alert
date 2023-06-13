<?php
    header('Content-Type: text/xml');
    $xml_content = file_get_contents('endpoints.xml');
    echo $xml_content;
?>

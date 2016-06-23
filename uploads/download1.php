<?php
    $name= $_GET['nama'];
    //$file="SDS.pdf";
    //$dir="uploads/";
    //$path=$file;
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: public');
    header('Pragma: public');
    header('Content-Length:'. filesize($name));
    ob_clean();
    flush();
    readfile($name);
    
   
?>

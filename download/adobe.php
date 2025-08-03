<?php
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=\"adobe-prospekt-elegant.pdf\"");
    $filename = "adobe-prospekt-elegant.pdf";
    $fp = fopen($filename, "rb");
    if ($fp)
    {
        $buffer = fread ($fp, filesize ($filename));
        echo $buffer;
        fclose($fp);
    }
    exit();
?>

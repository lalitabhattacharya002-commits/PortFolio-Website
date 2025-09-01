<?php
$file = 'D:\portfolio\cv\Resume_AVIK_BANERJEE.pdf';

if (file_exists($file)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="Resume_AVIK_BANERJEE.pdf"');
    readfile($file);
} else {
    echo "File not found.";
}
?>

<?php
RewriteCond %{REQUEST_FILENAME}.html -f
RewriteRule !.*\.html$ %{REQUEST_FILENAME}.html [L]
?>

<?php

header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
header("Content-Security-Policy: script-src 'self' code.jquery.com www.google-analytics.com about: 'unsafe-inline'");
header("X-Frame-Options: DENY");
header("X-Xss-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: no-referrer-when-downgrade");
header_remove("Server"); 

?>
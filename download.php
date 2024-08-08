<?php
// Serve the download file (replace with appropriate headers and file path)
header('Content-Type: application/octet-stream'); // Adjust content type if needed
header('Content-Disposition: attachment; filename="Victory.mp4"');
readfile('path/to/your/Victory.mp4');
exit;

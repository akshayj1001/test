<?php
if (!isset($_SERVER['argc']) || $_SERVER['argc'] < 1) {
    die("Usage: cli <action> <options>");
}
$argc = $_SERVER['argc'];
$argv = $_SERVER['argv'];

switch ($argv[1]) {
    case "ls":
        echo "Listing directory";
        break;
    case "download":
        if (($argc) < 4) {
            die("Usage: cli download <url> <output-file>");
        }
        $url = $argv[2];
        $outputFile = $argv[3];
        echo "Downloading ${url} to ${outputFile}";
        file_put_contents($outputFile, file_get_contents($url));
        break;
    default:
        die("Valid command are ls/download");
}

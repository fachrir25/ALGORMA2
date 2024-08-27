<?php
// membuat konstanta dengan fungsi define()
define('DB_SERVER', 'localhost');
define('DB_USER', 'Fachri');
define('DB_PASS', 'Rahasia');
define('DB_KEGIATAN', 'Belajar');
define('DB_API_KEY', '1234');

// membuat konstanta dengan kata kunci const
const API_KEY = "1234";

const SITE_NAME = "fachri";
const SITE_LOCAL = "localhost";
const SITE_RAHASIA = "Rahasia";
const SITE_BELAJAR = "Belajar";
const SITE_API_KEY = "1234";


echo "Nama User: " . SITE_NAME;
echo "<p>Nama Server: " . SITE_LOCAL;
echo "<p>Nama Pass: " . SITE_RAHASIA;
echo "<p>Nama Kegiatan: " . SITE_BELAJAR;
echo "<p>Nama Apikey: " . SITE_API_KEY;

echo "<br><br><br><strong>By Fachri </strong>";
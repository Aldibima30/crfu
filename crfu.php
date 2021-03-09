<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
echo "
 __________________
|                  |
| Tahu Petis Tools |
___________________
[Kediri Black Hat]  Directory Brute\n\n";
$pat = array("/document/","/documents/","/pdf/","/pdfs/","/cv/","/cvs/",
"/CV/","/CVS/","/resume/","/resumes/",
"/upload/","/uploads/","/uploaded/","/uploadify/","/dock/","/docks/",
"/dokumen/","/career/","/simpandokumen/","/UPLOAD/","/UPLOADS/","/UPLOADED/",
"/data/","/data_file/","/data_upload/");
echo "Masukin webnya: ";
$wb = trim(fgets(STDIN));
foreach($pat as $path) {
$c3k = get_headers($wb.$path);
if (preg_match("/200/", $c3k[0])) {
echo "[Gamteng] Zeeb > $wb/$path \nSudah Selesai Tuan \n";
exit;
} elseif (preg_match("/403/", $c3k[0])) {
echo "[403] On > $wb/$path \nSudah Selesai Tuan \n";
exit;
} else {
echo "[Burik] Sangat mencintai nchi:) > $wb/$path \n";
}
}
echo "Sudah Selesai Tuan\n";
?><?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
echo "
 __________________
|                  |
| Tahu Petis Tools |
___________________
[Kediri Black Hat]  Directory Brute\n\n";
$pat = array("/document/","/documents/","/pdf/","/pdfs/","/cv/","/cvs/",
"/CV/","/CVS/","/resume/","/resumes/",
"/upload/","/uploads/","/uploaded/","/uploadify/","/dock/","/docks/",
"/dokumen/","/career/","/simpandokumen/","/UPLOAD/","/UPLOADS/","/UPLOADED/",
"/data/","/data_file/","/data_upload/");
echo "Masukin webnya: ";
$wb = trim(fgets(STDIN));
foreach($pat as $path) {
$c3k = get_headers($wb.$path);
if (preg_match("/200/", $c3k[0])) {
echo "[Gamteng] Zeeb > $wb/$path \nSudah Selesai Tuan \n";
exit;
} elseif (preg_match("/403/", $c3k[0])) {
echo "[403] On > $wb/$path \nSudah Selesai Tuan \n";
exit;
} else {
echo "[Burik] Sangat mencintai nchi:) > $wb/$path \n";
}
}
echo "Sudah Selesai Tuan\n";
?>

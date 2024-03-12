<?php  
// echo date("l d M Y");
// echo ("<br>");
// echo time();
// echo ("<br>");
echo date("l, m - M - Y" , time() + 60 * 60 * 24 * 5 );
echo ("<br>");
echo date("l , m - M - Y ", time() - 60 * 60 * 24 * 365 * 20);
echo ("<br>");
echo date("l", mktime(0,0,0, 7, 9, 2003));
echo ("<br>");
echo date("l, m M Y", strtotime("25 jul 2003"));
echo ("<br>");
var_dump(strlen("aku adalah superman")); 

?>
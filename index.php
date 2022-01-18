<?php
define('BASEPATH', str_replace("\\", "/", dirname(__FILE__)));
/*
 * 取票pdf生成
 * 2015-07-24
 * 
 */
//lmr 2016-07-19 start
$site = '';
if (isset($_GET['site']))
{
    $site = '-'.$_GET['site'];
}
if (!file_exists("ht".$site.".php"))
{
    die('没有找到站点模板!<br>模板目录：\\\\202.103.68.123\collectTrainTikectPdf');
}
//lmr 2016-07-19 end

$code = $_GET['code'];
$d = $_GET['d'];
$file_name = $_GET['file'];
$url = "http://202.103.68.123/createPdf/ht".$site.".php?code=$code&d=$d&".time();
$pdfpath = BASEPATH."/cache/".$file_name.".pdf";
$pdfpath = str_replace('/','\\\\',$pdfpath);//echo "wkhtmltopdf {$url} {$pdfpath}" ;exit;
$result = exec("wkhtmltopdf \"{$url}\" \"{$pdfpath}\"");   //http://202.103.68.182/api/api.php?method=train.howto&no=240000G1010A,240000G1070C&file=popoycc
$fsize = filesize($pdfpath);
header("Pragma: public"); // required 
header("Expires: 0"); 
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Cache-Control: private",false); // required for certain browsers 
header("Content-Type: application/pdf"); 
header("Content-Disposition: attachment; filename=\"".basename($file_name).".pdf\";" ); 
header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ".$fsize); 
ob_clean(); 
flush(); 
readfile( $pdfpath );
?>
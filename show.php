<?php 
include "config.php";
$redirecturl = $_GET['url'];
if (!empty ($redirecturl))
{
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8">
<title><?php echo page_title("$redirecturl");?></title>

<style>html{height:100%}
body{margin:0;font-family:Tahoma,arial;
font-size:8pt;height:100%;overflow:hidden}
td{font-family:Tahoma,arial;font-size:8pt;}
a{color:#9DB2D5;text-decoration:none}a:hover{color:#000}
img{border:none}
#outer-separator{clear:both;width:100%;border-bottom:1px solid #000;border-top:1px solid #a0a0a0;margin:10px 0 0;padding:0;font-size:1px;overflow:hidden}
#separator{background:#000;height:1px}table{font-size:100%}
</style>
</head>
<body>
<table cellpadding=0 cellspacing=0 height="100%" width="100%">
<tr height="1%">
<td style="top:0;width:100%;background:#e7e7e7;">
<div style="color:#9DB2D5;text-align:right;direction:rtl;width:300px;float:right;padding:6px 15px">
<p>
<font size="2"><a href="index.php"><?php echo $sitetitle;?></a></font></p>
</div><br>
<div id=outer-separator><div id=separator></div></div>
</td>
</tr>
<tr>
<td>
<iframe allowtransparency="true" frameborder="0" id="rf" scrolling="auto" src="<?php echo $redirecturl;?>" style="width:100%;height:100%"></iframe>
</td>
</tr>
</table>
</body>

</html>
<?php }?>
<!DOCTYPE html>
<?php
/*
	Feedkhan Script ver1.0
	created by www.persianscript.ir
	copyright 2014 by PersianScript TM
*/
include "config.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $sitetitle;?> - صفحه نخست</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>

<div id="header">
	<div class="middle">
    <a href="">
        <div class="logo">
        
        </div>
    </a>
        <div class="ads">
        <a href="http://www.persianscript.ir" target="_blank"><img src="images/banner.jpg" alt="banner" /></a>
        </div>
    </div>
</div>
<div class="clear"></div>

<div id="nav">
	<div class="middle">
        <ul>
        <li><a href="index.php">صفحه اصلی</a></li>
        <li><a href="contact.php">تماس با ما</a></li>
        <li><a href="arz.php">نرخ ارز</a></li>
        </ul>
    </div>
</div>

<div id="main">

	<div class="middle">
    	<div id="content">
        <?php
		
		foreach ($cc2 as &$value) {
		echo '
		<div class="box">
            <h2>'.$value->Title.'</h2>
            
            <ul>
		';
		$rss = new DOMDocument();
		$rss->load("$value->URL");
		$feed = array();
		foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array (
		'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
		'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
		'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
		);
		array_push($feed, $item);
		}
		$limit = 10;
		for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$description = str_replace(' & ', ' &amp; ', $feed[$x]['description']);
		$link = $feed[$x]['link'];
		echo '<li><a href="show.php?url='.$link.'" class="tooltip" title="'.$description.'" target="_blank">'.$title.'</a></li>';
		}
		echo '</ul>
            </div>';
		}
		
		
		?>
        </div>
        
        
        <div id="sidebar">
        <h3>تبلیغات</h3>
        <a href="http://shop.persianscript.ir" target="_blank"><img src="images/banner128.png" alt="آگهی در فید خوان" /></a>
        <a href="http://shop.persianscript.ir" target="_blank"><img src="images/banner128.png" alt="آگهی در فید خوان" /></a>
        </div>
    <div class="clear"></div>
    </div>

</div>

<div id="footer">
	<div class="middle">
        <div class="blocks">
        <h2>فید خوان</h2>
        <p>فید خوان یک سیستم جامع است که به منظور جمع آوری آخرین اخبار از وب سایت های مختلف ایجاد شده است. این وب سایت هیچ مسئولیتی در قبال لینک ها و اخبار ارسال شده ندارد!</p>
        </div>
        
         <div class="blocks">
        <h2>شبکه های اجتماعی</h2>
        <p>ما را در شبکه های اجتماعی دنبال کنید</p>
        <a target="_blank" href="<?php echo $facebook;?>"><img src="images/facebook.png" alt="facebook" /></a>
        <a target="_blank" href="<?php echo $twitter;?>"><img src="images/twitter.png" alt="twitter" /></a>
        <a target="_blank" href="<?php echo $googleplus;?>"><img src="images/googleplus.png" alt="google plus" /></a>
        
        </div>
        
         <div class="blocks">
        <h2>لینک ها</h2>
        <ul>
        <li><a href="index.php">صفحه نخست</a></li>
        <li><a href="arz.php">نرخ ارز</a></li>
        <li><a href="contact.php">تماس با ما</a></li>
        <li><a href="http://www.persianscript.ir" target="_blank">پرشین اسکریپت</a></li>
        </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div id="copyright">
	<div class="middle">
    <div class="fr"><p>هر گونه کپی برداری از سایت غیر مجاز است</p></div>
    <div class="fl"><p>طراحی توسط <a href="http://www.persianscript.ir/" target="_blank">پرشین اسکریپت</a></p></div>
    </div>
</div>
   
</body>
</html>

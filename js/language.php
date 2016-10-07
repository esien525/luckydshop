<?php
$lurl = Yii::app()->request->requestUri;
$lurl =strtok($lurl, '?');
$query = parse_url($lurl, PHP_URL_QUERY);

if (isset($_GET['lang'])) 
{
	$elang = ($_GET['lang']!='cn' and $_GET['lang']!='bm')? "lselected" : "";
	$clang = ($_GET['lang']=='cn')? "lselected" : "";
	$blang = ($_GET['lang']=='bm')? "lselected" : "";

	if ($_GET['lang']=='cn')
	{
		$lang = '_cn';
		$lang_type = 'cn';
		if ($query) 
		{
			$lang_param = '&lang=cn';
		} 
		else 
		{
			$lang_param = '?lang=cn';
		}
	}
	else if ($_GET['lang']=='bm')
	{
		$lang = '_bm';
		$lang_type = 'bm';
		if ($query) 
		{
			$lang_param = '&lang=bm';
		} 
		else 
		{
			$lang_param = '?lang=bm';
		}
	}
	else{$lang = '';$lang_type = '';$lang_param='';}
}
else
{
	$elang = "lselected";
	$clang = "";
	$blang = "";

	$lang = '';
	$lang_type = '';
	$lang_param='';
}


if ($query) 
{
	$lang_cn = '&lang=cn';
	$lang_bm = '&lang=bm';
} 
else 
{
	$lang_cn = '?lang=cn';
	$lang_bm = '?lang=bm';
}
?>
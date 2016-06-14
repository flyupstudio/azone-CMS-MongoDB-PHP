<?
	header("Content-type: text/html; charset=utf-8");
	$RootPath = '';	
	$url_parts = explode('/', reset(explode('.html', $_SERVER['REDIRECT_URL'])));
	array_shift($url_parts);	
	$redirect = $url_parts;	
	switch($module_name) {
		default:
			$ClassName = 'EditablePage';
		break;	
	}

	require_once $RootPath.'core/initialize.php';
?>

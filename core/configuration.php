<?
	$config = array('DB' => array( 	'host' => 'localhost',
									'port' => '27017', 
									'user' => 'vlasenko', 
									'password' => 'password', 
									'database' => 'simpleTest' 
							), 
					'email' => array(	'username' => '',
										'host' => '',
										'port' => '',
										'passord' => ''
					),
					'charset' => 'UTF-8', 
					'title' => '', 
					'meta-keywords' => '', 
					'meta-description' => '', 
					'admin-email' => '', 
					'manager-email' => '', 
					'info-email' => '', 
					'theme' => 'office2007', 
					'auth' => array( 'table' => 'users', 
									 'f_username' => 'username', 
									 'f_password' => 'password', 
									 'f_redirect' => 'redirect', 
									 'template' => 'login.html', 
									 'session' => 'user_account', 
									 'error' => 'Not correct login or password!' ),
					'azone_auth' => array( 'table' => 'az_users', 
									 	   'f_username' => 'username', 
									 	   'f_password' => 'password', 
									 	   'f_redirect' => 'redirect', 
									 	   'template' => 'login.html', 
									 	   'session' => 'azone_account', 
									 	   'error' => 'Not correct login or password!' ), 
					'site_url' => "http://{$_SERVER['SERVER_NAME']}/",					
					'absolute-path' => "{$_SERVER['DOCUMENT_ROOT']}/"
					);

?>

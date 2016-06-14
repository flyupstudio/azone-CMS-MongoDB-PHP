<?
	ini_set('display_errors',0);
	error_reporting(NULL);
		

	session_set_cookie_params(60*60*24);
	session_start();	
  
	//_debug($_SESSION,0);
	
	/*
	 * Define constants
	 */
	define('PATH_CORE', $RootPath.'core/');
	
	define('PATH_LIB', $RootPath.'core/lib/');
	
	define('PATH_CLASSES', $RootPath.'sources/classes/');
	define('PATH_HTML_TEMPLATES', 'sources/html_templates/');
	define('PATH_SNIPPETS', 'sources/html_templates/snippets/');
	define('PATH_MAIL_TEMPLATES', 'sources/mail_templates/');
	
	
	/*
	 * Include site configuration
	 */
	 
	
	require_once PATH_CORE.'configuration.php';
	
	define('DEFAULT_CHARSET', $config['charset']);
	
	/*
	 * Global functions
	 */
	function AttachLib($name) {		
		require_once PATH_LIB.$name.'.php';
	}
	
	function AttachClass($name){
		global $RootPath;
		require_once $RootPath.PATH_CLASSES.$name.'.php';		 
	}
	
	/*
	 * Init Mongo BG
	 */
	 
	/*
	Add user to DB
	*db.createUser({user: "vlasenko", pwd: "password", roles: [{ role: "readWrite", db: "simpleTest" }]});
	use simpleTest
	db.test.save( {username:"mkyong"} )
		Collection example 
		
			{"host":"http://example.com",
				"level":5, 
				{
					"emails": {'me@exmple.com', 'me1@example.com'}, 
					"hosts":
						{
							"url":"http://example.com/1.html"
							""
						}
				}
			}
	*/
   	
	
	/* Databases functions */
	
	
	
	/*
	 * Create class instance
	 */
	//abstract class AbstractDBCollection extends MongoClient{};
	//abstract class AbstractCollection extends AbstractDBCollection{};	
	//abstract class AbstractSiteCollection extends AbstractCollection{};
	AttachLib('Page');
	abstract class AbstractPage extends Page{};
	AttachClass('ContentPage');	
	AttachClass($ClassName);
	new $ClassName($config);
	
?>
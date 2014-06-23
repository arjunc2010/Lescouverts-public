<?php
/**
 * Created by PhpStorm.
 * User: ACE1
 * Date: 6/8/14
 * Time: 9:34 PM
 */

namespace Les\RestoModule;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\Httpfoundation\Request;
//use Symfony\Component\BrowserKit\Client;
use Goutte\Client;

class Module {

       public function __construct(){
//           echo "hello world";
       }

  public function init(){  	
  		$r = Request::create('index.php','GET', array( 'controller' => 'pjAdminBookings' ,
							'action' => 'index',
							'tab' => 1  )  );









  		$client = new Client();
// $crawler = $client->request('GET', __DIR__.'/index.php', array(  'controller' => 'pjAdminBookings' ,
$crawler = $client->request('GET', 'http://localhost/lescouverts/restoModule/index.php', array(  'controller' => 'pjAdminBookings' ,
							'action' => 'index',
							'tab' => 1  ));
// print_r( get_class_methods($crawler) );

		// echo $crawler->html() ;

			// print_r( $_SESSION );

  		// $crawler = $client->request('GET', 'http://www.symfony.com/blog/');
  		// print_r($crawler);

  				// print_r (  $r->send() ) ;	
		  		
  				// print_r (  get_class_methods($r) ) ;	
	// $r = new HttpRequest('index.php', HttpRequest::METH_GET);
	// $r->addQueryData(array(  'controller' => 'pjAdminBookings' ,
	// 						'action' => 'index',
	// 						'tab' => 1  ));
  }

} 
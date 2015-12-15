<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController {
	public function indexAction($name) {
		return new Response('<html><body>Hello '.$name.'!</body></html>');
	}
}

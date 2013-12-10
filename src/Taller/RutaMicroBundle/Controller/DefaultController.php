<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Helper\MapHelper;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
	public function indexAction()
	{
		
		$usuario = $this->get('security.context')->getToken()->getUser();
		// $error = null;

		if (isset($usuario))

			return $this->render('RutaMicroBundle:Default:index.html.twig');
		else

			return $this->redirect($this->generateUrl('usuario_login'));

		// return $this->render('RutaMicroBundle:Default:index.html.twig');
	}
}

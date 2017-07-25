<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCCoreBundle:Default:index.html.twig');
    }
    public function contactAction( Request $request)
    {
    	// récupération de la session
 		$session = $request->getSession();
        $session->getFlashBag()->add('info', 'Désolé je ne sais pas faire de formulaire ;)');

        return $this->redirectToRoute('oc_core_homepage');
    }
}

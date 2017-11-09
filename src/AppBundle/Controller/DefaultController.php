<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // On récupère le service
        $leservice = $this->container->get('monjoliservice');



       $resu=$leservice->getHappyMessage();
        return $this->render('default/index.html.twig', array(
            'resu' => $resu
        ));
    }


}

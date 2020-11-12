<?php
/* /src/Controller/DefaultController.php */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends AbstractController
{
    /**
     * @param Request $request
     * @Route("/", name="index", options={"expose"=true})
     */
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig', []);
    }

    /**
     * @param Request $request
     * @param $tipo
     * @Route("/colores/{tipo}", name="colores", options={"expose"=true})
     */
    public function askAction(Request $request, $tipo)
    {
        return (($tipo == 'js') ?  $this->render('coloresJs.html.twig', []) : $this->render('coloresJq.html.twig', []));
    }

}
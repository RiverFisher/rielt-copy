<?php

namespace App\Controller\Platform;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Admin main controller
 *
 * Route("admin")
 */
class MainController extends Controller
{
    /**
     * Route("/", name="admin_main")
     * @Route("/")
     * Method("GET")
     */
    public function indexAction()
    {
        return $this->render('Platform/main.html.twig');
    }
}

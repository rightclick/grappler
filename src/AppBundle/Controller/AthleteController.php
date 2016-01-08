<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AthleteController extends Controller
{
    /**
     * @Route("/athlete/test", name="athlete_index")
     */
    public function testAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/athlete.html.twig', [
            'id' => 1
        ]);
    }
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Athlete controller.
 *
 * @Route("/athlete")
 */
class AthleteController extends Controller
{
    /**
     * @Route("/view/{id}", name="athlete_view")
     * @Template("admin/athlete/view.html.twig")
     *
     * @param athlete unique id $id
     * @return mixed
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $athlete = $em->getRepository('AppBundle:Athlete')->find($id);

        if (!$athlete) {
            throw $this->createNotFoundException('Unable to find entity.');
        }

        return array(
            'athlete' => $athlete
        );
    }
}

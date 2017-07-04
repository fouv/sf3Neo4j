<?php

namespace AppBundle\Controller;

use AppBundle\Entity\OGM\Person;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create()
    {
        $em = $this->get("neo4j.entity_manager");
        $person = new Person();

        $person->setFirstName("Laurent");
        $person->setLastName("Dupond");
        $person->setEmail("pouet@gmail.com");

        $em->persist($person);
        $em->flush();

        return $this->render('default/create.html.twig');
    }
}

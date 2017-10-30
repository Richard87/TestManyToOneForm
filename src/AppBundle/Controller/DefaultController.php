<?php

namespace AppBundle\Controller;

use AppBundle\Forms\Signup\ColleagueDTO;
use AppBundle\Forms\Signup\ColleagueType;
use AppBundle\Forms\Signup\RegisterColleagueType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function testSimpleAction() {
        $form = $this->createForm(ColleagueType::class);
        dump($form->getData());

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/pass")
     */
    public function testSimplePassAction() {
        $form = $this->createForm(ColleagueType::class,new ColleagueDTO(0, "Test", "test@test.com", 0));

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
        ]);
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Forms\Signup\ColleagueDTO;
use AppBundle\Forms\Signup\ColleagueType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function testSimpleAction(Request $request) {
        $form = $this->createForm(ColleagueType::class);

        $form->handleRequest($request);
        dump($form->getData());

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/pass")
     */
    public function testSimplePassAction() {
        $form = $this->createForm(ColleagueType::class,new ColleagueDTO(0, 'Test', 'test@test.com', 0));

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

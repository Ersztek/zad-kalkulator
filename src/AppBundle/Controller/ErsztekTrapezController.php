<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\ErsztekTrapezType;
use Ersztek\Tools\Trapez;


class ErsztekTrapezController extends Controller
{

    /**
     * @Route("/Ersztek/Trapez/show/form", name="Ersztek_Trapez_show_form")
     */
    public function showFormAction()
    {
        $trapez = new Trapez();
        $form = $this->createCreateForm($trapez);

        return $this->render(
            'AppBundle:ErsztekTrapez:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/Ersztek/Trapez/calc", name="Ersztek_Trapez_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $trapez = new Trapez();
        $form = $this->createCreateForm($trapez);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:ErsztekTrapez:wynik.html.twig',
                array('wynik' => $trapez->trapez())
            );

        }

        return $this->render(
            'AppBundle:ErztekTrapez:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Trapez $trapez The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Trapez $trapez)
    {
        $form = $this->createForm(new ErsztekTrapezType(), $trapez, array(
            'action' => $this->generateUrl('Ersztek_Trapez_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}

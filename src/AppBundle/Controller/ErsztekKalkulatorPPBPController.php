<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\ErsztekKalkulatorPPBPType;
use Ersztek\Tools\KalkulatorPPBP;


class ErsztekKalkulatorPPBPController extends Controller
{

    /**
     * @Route("/Ersztek/KalkulatorPPBP/show/form", name="Ersztek_KalkulatorPPBP_show_form")
     */
    public function showFormAction()
    {
        $kalkulatorppbp = new KalkulatorPPBP();
        $form = $this->createCreateForm($kalkulatorppbp);

        return $this->render(
            'AppBundle:ErsztekKalkulatorPPBP:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/Ersztek/KalkulatorPPBP/calc", name="Ersztek_KalkulatorPPBP_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kalkulatorppbp = new KalkulatorPPBP();
        $form = $this->createCreateForm($kalkulatorppbp);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:ErsztekKalkulatorPPBP:wynik.html.twig',
                array('wynik' => $kalkulatorppbp->ppbp())
            );

        }

        return $this->render(
            'AppBundle:ErsztekKalkulatorPPBP:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param KalkulatorPPBP $kalkulatorppbp The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(KalkulatorPPBP $kalkulatorppbp)
    {
        $form = $this->createForm(new ErsztekKalkulatorPPBPType(), $kalkulatorppbp, array(
            'action' => $this->generateUrl('Ersztek_KalkulatorPPBP_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}


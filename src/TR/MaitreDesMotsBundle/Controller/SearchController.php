<?php

namespace TR\MaitreDesMotsBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TR\MaitreDesMotsBundle\Entity\Search;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class SearchController extends Controller {

    public function searchAction(Request $request){
       $search = new Search();

       $formBuilder = $this->get('form.factory')->createBuilder(FormType::class,$search);

       $formBuilder
           ->add('mot', TextType::class)
           ->add('relType', TextType::class)
           ->add('go', SubmitType::class)
       ;
       $form  = $formBuilder->getForm();

       return $this->render('TRMaitreDesMotsBundle:Search:search.html.twig',array('form'=> $form->createView(),
           ));
    }
    public function indexAction(){
        $content =$this->get('templating')->render('TRMaitreDesMotsBundle:Search:index.html.twig');
        return new Response($content);
    }
}
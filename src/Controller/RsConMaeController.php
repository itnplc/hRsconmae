<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Rsconmae;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class RsConMaeController extends Controller
{

	/**
	 * @Route("/rsconmae/")
	 */
	public function index(Request $request) {

		$em = $this->getDoctrine()->getManager();
		$rsConMae = $em->getRepository('App\Entity\Rsconmae')->findAll(); 

		$paginator = $this->get('knp_paginator');

		$paginator = $paginator->paginate(
			$rsConMae,
			$request->get('page', 1),
			10
		);

		return $this->render(
			'CAP/900_informatica/index.html.twig',
			['paginator' => $paginator
		]);
	}

	public function create()
	{
		$rsconmae = new Rsconmae();

		$form = $this->createFormBuilder($rsconmae)
			->add('cont_id', TextType::class, ['attr' => ['class' => 'form-control']])
			->add('descrip', TextType::class, ['attr' => ['class' => 'form-control']])
			->add('valor', TextType::class, ['attr' => ['class' => 'form-control']])
			->getForm();

		return $this->render('CAP/900_informatica/new.html.twig',
			['form' => $form->createView()]
		);
	}

	
	public function show($id)
	{
		return new Response(sprintf('Y ahora el show de %c', $id));
	}
}
	

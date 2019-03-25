<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RsConMaeController extends Controller
{

	/**
	 * @Route("/rsconmae/")
	 */
	public function index() {

		$em = $this->getDoctrine()->getManager();
		$rsConMae = $em->getRepository('App\Entity\Rsconmae')->findAll(); 

		return $this->render(
			'CAP/900_informatica/index.html.twig',
			['constants' => $rsConMae
		]);
	}

	/**
	 * @Route("/rsconmae/{id}")
	 */
	public function show($id)
	{
		return new Response(sprintf('Y ahora el show de %c', $id));
	}
}
	

<?php

namespace AppBundle\Controller;

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
        $todoList = [];

        return $this->render('default/index.html.twig', []);
    }

    /**
     * @Route("/list", name="list")
     */
    public function listAction(Request $request)
    {
        $data = $this->getDoctrine()->getRepository('AppBundle:TodoList')->findAll();

	return $this->json($data);
    }

    /**
     * @Route("/record", name="record")
     */
    public function recordAction(Request $request)
    {
        $data = new TodoList();
	$data->setTitle($request->headers->get('title'));
	$data->setDone($request->headers->get('done'));
	
	$repo = $this->getDoctrine()->getManager();
	$repo->persist($data);
	$repo->flush();

        return $this->json($data);
    }
}

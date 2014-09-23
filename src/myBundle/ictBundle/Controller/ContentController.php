<?php
namespace myBundle\ictBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

class ContentController extends Controller
{
	public function helloAction()
	{
		return new Response("Heelow world");
	}
}
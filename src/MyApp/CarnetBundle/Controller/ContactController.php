<?php

namespace MyApp\CarnetBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\CarnetBundle\Entity\Contact;
use MyApp\CarnetBundle\Form\ContactForm;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends ContainerAware
{
    public function listerAction()
{        
	$em = $this->container->get('doctrine')->getEntityManager();

	$contact= $em->getRepository('MyAppCarnetBundle:Contact')->findAll();

	return $this->container->get('templating')->renderResponse('MyAppCarnetBundle:Contact:lister.html.twig', 
	array('contact' => $contact));
}
   
    
    public function editerAction($id = null)
    {
	$message='';
	$em = $this->container->get('doctrine')->getEntityManager();

	if (isset($id)) 
	{
		$contact = $em->find('MyAppCarnetBundle:Contact', $id);

		if (!$contact)
		{
			$message='Aucun contact trouvé';
		}
	}
	else 
	{
		$contact = new Contact();
	}

	$form = $this->container->get('form.factory')->create(new ContactForm(), $contact);

	$request = $this->container->get('request');

	if ($request->getMethod() == 'POST') 
	{
    	  	$form->bind($request);

	if ($form->isValid()) 
	{
		$em->persist($contact);
		$em->flush();
		if (isset($id)) 
		{
			$message='Contact modifié avec succès !';
		}
		else 
		{
			$message='Contact ajouté avec succès !';
		}
	}
	}

	return $this->container->get('templating')->renderResponse(
'MyAppCarnetBundle:Contact:editer.html.twig',
	array(
	'form' => $form->createView(),
	'message' => $message,
	));
}

    public function supprimerAction($id)
    
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $contact = $em->find('MyAppCarnetBundle:Contact', $id);
        
        if (!$contact) 
        {
            throw new NotFoundHttpException("Contact non trouvé");
        }

        $em->remove($contact);  
        $em->flush();        

        return new RedirectResponse($this->container->get('router')->generate('myapp_contact_lister'));
    }    
}
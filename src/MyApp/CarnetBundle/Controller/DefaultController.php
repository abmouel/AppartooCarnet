<?php

namespace MyApp\CarnetBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware,
       Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\CarnetBundle\Entity\Contact;

class DefaultController extends ContainerAware 
    
{    
  
public function indexAction()
{
	$em = $this->container->get('doctrine')->getEntityManager();
	$contact = $em->getRepository('MyAppCarnetBundle:Contact')->findAll();

	return $this->container->get('templating')->renderResponse('MyAppCarnetBundle:Default:index.html.twig',array('contact' => $contact)
	);
}  
/*    
public function enregistrerContact() {
  $em = $this->container->get('doctrine')->getEntityManager();

  $contact1 = new Contact();
  $contact1->setnom('John');
  $contact1->setprenom('Raul');
  $contact1->settelephone('00336755145');
  $contact1->setemail('John.raul@gmail.com');
  $contact1->setsiteweb('www.john-raul.com');
  $em->persist($contact1);

  $contact2 = new Contact();
  $contact2->setnom('Loleh');
  $contact2->setprenom('Mathieu');
  $contact2->settelephone('00336457445');
  $contact2->setemail('Mathieu.Loleh@gmail.com');
  $contact2->setsiteweb('www.Mathieu-developpeur.com');
  $em->persist($contact2);

  $em->flush();

  $message = 'Contacts créées avec succès';

  return $this->container->get('templating')->renderResponse('MyAppCarnetBundle:Default:index.html.twig', array('message' => $message)
  );
}

*/

}

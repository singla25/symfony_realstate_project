<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactForm;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

final class MainController extends AbstractController
{
    #[Route('/home', name: 'home_page')]
    public function home(Request $request, ContactRepository $contactRepository, EntityManagerInterface $em): Response
    {
        $homePageForm = new Contact();
        $form = $this->createForm(ContactForm::class, $homePageForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($homePageForm);
            $em->flush();
            return $this->redirectToRoute('home_page');
        }
        return $this->render('pages/home.html.twig', [
            'form' => $form,
            'homePageEnquiryForm' => $homePageForm,
        ]);
    }

    #[Route('/about', name: 'about_page')]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }

    #[Route('/residential', name: 'residential_page')]
    public function residential(): Response
    {
        return $this->render('pages/residential.html.twig');
    }

    #[Route('/commercial', name: 'commercial_page')]
    public function commercial(): Response
    {
        return $this->render('pages/commercial.html.twig');
    }

    #[Route('/product_listing', name: 'product_listing_page')]
    public function productListing(): Response
    {
        return $this->render('pages/productListing.html.twig');
    }
}

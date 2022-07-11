<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class PagesController extends AbstractController
{
    

    /**
     * @Route("/index", name="index")
     */
    public function Profil(): Response
    {  $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    /**
     * @Route("/admin", name="admin")
     */
    public function adminProfil(): Response
    
    { 
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
       
      
        return $this->render('pages/admin.html.twig', [
            'controller_name' => 'PagesController',
        
        ]);
    }

   /**
 * @Route("/access-denied", name="app_access_denied")
 */
public function accessDenied()
{
    if ( $this->getUser() ) {
        return $this->redirectToRoute('index');
    }

    return $this->redirectToRoute('app_login');
}   
 /**
     * @Route("/useronly", name="admin&user")
     */
    public function user(): Response
    
    { 
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
      
        return $this->render('pages/admin&user.html.twig', [
            'controller_name' => 'PagesController',
         
        ]);
    }
}

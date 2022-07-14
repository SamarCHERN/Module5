<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\QueryBuilder;
use Omines\DataTablesBundle\Adapter\ArrayAdapter;
use Omines\DataTablesBundle\Adapter\Doctrine\ORM\SearchCriteriaProvider;
use Omines\DataTablesBundle\Column\TextColumn;
use Omines\DataTablesBundle\DataTableFactory;
use Symfony\Component\HttpFoundation\Request;
use Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter;

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
    public function adminProfil(Request $request, DataTableFactory $dataTableFactory): Response
    
    { 
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $table = $dataTableFactory->create()
        ->add('userName', TextColumn::class,['label' => 'User name', 'className' => 'bold'])
        ->add('Email', TextColumn::class,['label' => 'Email', 'className' => 'bold'])
        ->add('Action', TextColumn::class,['label' => 'Action', 'className' => 'bold'])
        ->createAdapter(ORMAdapter::class, [
            'entity' => User::class,

        ])
        ->handleRequest($request);

    if ($table->isCallback()) {
        return $table->getResponse();
    }
      
        return $this->render('pages/admin.html.twig', [
            'datatable' => $table,
        
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
//  /**
//      * @Route("/useronly", name="admin&user")
//      */
//     public function user(): Response
    
//     { 
//         $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
      
//         return $this->render('pages/admin&user.html.twig', [
//             'controller_name' => 'PagesController',
         
//         ]);
//     }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends AbstractController
{
     /**
     * @Route("/", name="index_page")
     */
    public function getIndex()
    {
      return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/home", name="homepage")
     */
    public function home()
    {
         return $this->render('customer/homepage.html.twig');
    }

    /**
     * @Route("/admin/{_locale}/customer-list", name="index")
     */
    public function customerList(Request $request)
    {
        if ($this->getUser()) {
            return $this->render('customer/customer_list.html.twig');
        } else {
            return $this->redirectToRoute('app_login');
        }
    }

    /**
     * @Route("/get-customer-data", name="customer-list-data")
     */
    public function getCustomerLististAjax()
    {
        if ($this->getUser()) {
            $getCustomerList = [
                    [
                    'Rendering engine' => 'Trident',
                    'Browser' => 'Internet Explorer 4.0',
                    'Platform' => 'Win 95+',
                    'Engine version' => 4,
                    'CSS grade' => 'X',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Trident11',
                    'Browser' => 'Internet Explorer 9.0',
                    'Platform' => 'Win 98+',
                    'Engine version' => 4,
                    'CSS grade' => 'X',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Trident',
                    'Browser' => 'Safari 1.2',
                    'Platform' => 'OSX.3',
                    'Engine version' => 23.8,
                    'CSS grade' => 'A',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Webkit',
                    'Browser' => 'Safari 1.5',
                    'Platform' => 'OSX.3.1',
                    'Engine version' => '77.15',
                    'CSS grade' => 'B',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Gecko',
                    'Browser' => 'Mozilla 15',
                    'Platform' => 'OSX.3.1',
                    'Engine version' => '82.16',
                    'CSS grade' => 'B',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Webkit',
                    'Browser' => 'Mozilla 25',
                    'Platform' => 'OSX.6.1',
                    'Engine version' => '123.15',
                    'CSS grade' => 'B',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    ['Rendering engine' => 'Gecko',
                    'Browser' => 'Chrome  55.5',
                    'Platform' => 'OSX.13.1',
                    'Engine version' => '5.15',
                    'CSS grade' => 'D',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Gecko',
                    'Browser' => 'Seamonkey 10.5',
                    'Platform' => 'Windows Vista',
                    'Engine version' => 17.13,
                    'CSS grade' => 'C',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Webkit',
                    'Browser' => 'Chrome  35.5',
                    'Platform' => 'Windows 7',
                    'Engine version' => 42.85,
                    'CSS grade' => 'B',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Webkit',
                    'Browser' => 'Chrome  55.2',
                    'Platform' => 'Windows 10',
                    'Engine version' => 25.25,
                    'CSS grade' => 'A',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Webkit',
                    'Browser' => 'Safari 1.22',
                    'Platform' => 'Apple OS 12',
                    'Engine version' => 225.87,
                    'CSS grade' => 'Z',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ],
                    [
                    'Rendering engine' => 'Gecko',
                    'Browser' => 'Seamonkey 1.1',
                    'Platform' => 'Win 98+ / OSX.2+',
                    'Engine version' => 12.15,
                    'CSS grade' => 'F',
                    'Actions' => '<td><a href="details.html"><i class="fas fa-search"></i></a></td>'
                ]
            ];

            return new JsonResponse($getCustomerList);
        } else {
            return $this->redirectToRoute('app_login');
        }
    }

    /**
     * @Route("/admin/langswitch/{lang}/{sourceUrl}", name="langswitch")
     */
    public function langswitch($lang, $sourceUrl, Request $request)
    {
        if ($this->getUser()) {
            return $this->redirectToRoute($sourceUrl, ['_locale' => $lang]);
        } else {
            return $this->redirectToRoute('app_login');
        }
    }
}

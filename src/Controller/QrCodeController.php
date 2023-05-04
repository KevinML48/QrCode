<?php

/**namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\QrCode;

class QrCodeController extends AbstractController
{
    /**
     * @Route("/qr-code/{url}", name="app_qr_code")
     */
    /**public function generateFromUrl($url)
    {
        $qrCode = new QrCode($url);
        $qrCode->setSize(300);

        $response = new Response($qrCode->writeString(), 200, array(
            'Content-Type' => $qrCode->getContentType(),
        ));

        return $response;
    }
}**/

/** 
 * namespace App\Controller;

* use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
* use Symfony\Component\HttpFoundation\Response;
* use Symfony\Component\Routing\Annotation\Route;
* use Endroid\QrCode\QrCode;

* class QrCodeController extends AbstractController
* {
    
     * @Route("/qr-code/{url}", name="app_qr_code")
     */
    /** public function index($url): Response
    * {
        * // Créer un nouvel objet QR Code
        * $qrCode = new QrCode($url);

        * // Obtenir l'image QR Code sous forme de chaîne binaire
        * $qrCodeData = $qrCode->writeString();

        * // Créer une réponse avec l'image QR Code
        * $response = new Response($qrCodeData);
        * $response->headers->set('Content-Type', $qrCode->getContentType());

        * return $response;
    * }
* }

 */

// src/Controller/QrCodeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QrCodeController extends AbstractController
{
    /**
     * @Route("/qr-code/{url}", name="app_qr_code")
     */
    public function index($url): Response
    {
        return new Response('toto');
    }
}





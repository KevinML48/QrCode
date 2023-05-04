<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use QRcode;

// Include the QRcode library
require_once __DIR__ . '/../../vendor/phpqrcode/phpqrcode/qrlib.php';

class YoutubeQRCodeController
{
    public function generateQRCode()
    {
        // Create the data for the QR code
        $data = [
            'url' => 'https://www.youtube.com',
        ];
        
        // Encode the data as JSON
        $json = json_encode($data);
        
        // Generate the QR code
        QRcode::png($json, null, QR_ECLEVEL_L, 10);
        $qrCode = ob_get_clean();

        // Return the QR code as a response
        $response = new Response($qrCode, 200, ['Content-Type' => 'image/png']);
        return $response;
    }
}
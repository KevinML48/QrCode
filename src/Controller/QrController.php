<?php

namespace App\Controller;

use BaconQrCode\Encoder\QrCode;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use BaconQrCode\Common\Mode;

class QrController
{
    /**
     * @Route("/qr/{url}", name="api_qr", methods={"POST"})
     */
    public function generateQrCode(Request $request, $url)
    {
        $mode = Mode::createFromName('byte');
        $qrCode = new QrCode($url, $mode);
        $qrCode->setExtension('png');
        $qrCode->setSize(300);

        $qrCodeDataUri = 'data:image/png;base64,' . base64_encode($qrCode->writeString());
        $responseData = [
            'qr_code_data_uri' => $qrCodeDataUri,
        ];

        return new JsonResponse($responseData);
    }
}

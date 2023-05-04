<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MultiplierController
{
    /**
     * @Route("/multiplier/{number}", name="multiplier")
     */
    public function multiply($number, $data = [])
    {
        $result = $number * 2;

        $responseData = array_merge(['result' => $result], $data);

        return new JsonResponse($responseData);
    }
}

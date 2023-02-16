<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class control
{
    #[Route ('/lucky')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number is: '.$number.'</body></html>'
        );
    }
    #[Route ('/contact')]
    public function contact(): Response
    {
        $number = random_int(0, 100);

        return new (
            '<html><body>Lucky number is: '.$number.'</body></html>'
        );
    }
}


<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PagesController
{
    /**
     * @Route("/age", name ="page_age")
     */
    public function age(Request $request)
    {

       var_dump($request->get('name'));
       die();

    }
}



?>
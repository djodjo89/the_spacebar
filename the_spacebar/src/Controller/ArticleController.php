<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepag()
    {
         return new Response ('Tro bien ma premiere page !');
    }
    /**
     * @Route("/news/pktufaiscavadormir")
     */
    public function show()
    {
        return new Response("coucou");
    }
    /**
     * @Route("cool/{leparametrequejeveux}")
     */
    public function coucou($leparametrequejeveux)
    {
        return new Response("pas mal le parametre ".$leparametrequejeveux);
    }
    /**
     * @Route("jadorlesroutes/{mot}")
     */
    public function route($mot)
    {
        return new Response(sprintf("route : %s", $mot));
    }
}


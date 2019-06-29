<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepag()
    {
         return new Response ('Tro bien ma premiere page !');
    }
    /**
     * @Route("/news/{titre}")
     */
    public function show($titre)
    {
        $comments = [
            "commentaire commentaire commentaire",
            "eriatnemmoc eriatnemmoc eriatnemmoc",
            "moc moc moc",
        ];
        return $this->render("article/show.html.twig", [
            "titre" => ucwords(str_replace('-', '', $titre)),
            "comments" => $comments,
        ]);
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


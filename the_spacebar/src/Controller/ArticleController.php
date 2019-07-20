<?php
namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Service\MarkdownHelper;
use App\Service\SlackClient;
use Doctrine\ORM\EntityManagerInterface;
use Liquid\Template;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Psr\Log\LoggerInterface;

class ArticleController extends AbstractController
{
    /**
     * @var Inutilisée pour l'instant, sert simplement à montrer un contrôleur avec un constructeur
     */
    private $isDebug;

    public function __construct($isDebug, SlackClient $slack)
    {
        $this->isDebug = $isDebug;
    }

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(ArticleRepository $repository, EntityManagerInterface $em, LoggerInterface $logger)
    {
        $articles = $repository->findAllPublishedOrderedByNewest();
        return $this->render('article/homepage.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/onboarding/test", name="liquid")
     */
    public function testLiq()
    {
        $template = new Template();
        $template->parse("Hello, {{ name }}!");
        return $template->render(array("name" => "World"));
    }

    /**
     * @Route("/news/{titre}", name="article_show")
     */
    public function show(Article $article, Environment $twigEnvironment, SlackClient $slack, EntityManagerInterface $em)
    {
        if ($article->getSlug() === "khaaaaaan") {
            $slack->sendMessage('Kahn', 'Ah, Kirk, my old friend...');
        }

        $comments = [
            "commentaire commentaire commentaire",
            "eriatnemmoc eriatnemmoc eriatnemmoc",
            "moc moc moc",
        ];

        $html = $twigEnvironment->render("article/show.html.twig", [
            "article" => $article,
            "comments" => $comments,
        ]);

        return new Response ($html);
    }

    /**
     * @Route("cool/{leparametrequejeveux}")
     */
    public function coucou($leparametrequejeveux)
    {
        return new Response("pas mal le parametre " . $leparametrequejeveux);
    }

    /**
     * @Route("jadorlesroutes/{mot}")
     */
    public function route($mot)
    {
        return new Response(sprintf("route : %s", $mot));
    }

    /**
     * @Route("/news/{$titre}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($titre, LoggerInterface $logger)
    {
        // TODO - aimer l'article

        return new JsonResponse(["hearts" => rand (5, 100)]);
    }
}


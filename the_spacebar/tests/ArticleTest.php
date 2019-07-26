<?php

use PHPUnit\Framework\WebTestCase;
use App\Entity\Article;

final class ArticleTest extends WebTestCase
{
    public function testCreationSansTitre()
    {
        $request = $this->getMock("Symfony\Component\HttpFoundation\Request");
        $container = $this->getMock("Symfony\Component\DependencyInjection\ContainerInterface");
        $service = $this->getMockBuilder("Blabla")->disableOriginalConstructor()->getMock();
        $container->expects($this->once())
            ->method("getParameter")
            ->with($this->equalTo('quelque_chose'))
            ->will($this->returnValue(true));

        $container->expects($)
    }
}
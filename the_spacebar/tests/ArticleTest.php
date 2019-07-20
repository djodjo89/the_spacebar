<?php

use PHPUnit\Framework\TestCase;
use App\Entity\Article;

final class ArticleTest extends TestCase
{
    public function testCreationSansTitre()
    {
        $this->assertNotInstanceOf(
            Article::class,
            new Article()
        );
    }
}
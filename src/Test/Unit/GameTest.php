<?php

require __DIR__ . "/../../Entity/Game.php";

class GameTest extends PHPUnit_Framework_TestCase
{
    public function testImage_WithNull_ReturnPlaceholder()
    {
        $game  = new Game();
        $game->setImagePath(null);
        $this->assertEquals("placeholder.png", $game->getImagePath());
    }

    public function testImage_WithPath_ReturnsPath()
    {
        $game  = new Game();
        $game->setImagePath("aPath");
        $this->assertEquals("aPath", $game->getImagePath());

    }

    public function lol()
    {

    }
}
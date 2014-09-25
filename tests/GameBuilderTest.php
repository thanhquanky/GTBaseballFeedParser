<?php

require_once '../Game.class.php';

class GameTest extends PHPUnit_Framework_TestCase
{
    public function testGameCanBeCreated()
    {

        $baseballGame = new Game();

        $baseballGame->setGameId(1);

        $this->assertEquals(1, $baseballGame->getGameId());
    }

}

?>

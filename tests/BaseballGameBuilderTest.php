<?php



class BaseballGameTest extends PHPUnit_Framework_TestCase
{
    public function testBaseballGameCanBeCreated()
    {

        $baseballGame = new BaseballGame();

        $baseballGame->setGameId(1);

        $this->assertEquals(1, $baseballGame->getGameId());
    }

}

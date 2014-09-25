<?php

require_once 'BaseballGame.class.php';

class BaseballGameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider baseballGameProvider
     */
    public function testBaseballGameCanSetGameId($baseballGame, $expected)
    {
        $this->assertEquals($expected, $baseballGame->getGameId());
    }

    public function baseballGameProvider()
    {
        $baseballGame1 = new \eStadium\BaseballGame();
        $baseballGame1->setGameId(1);

        $baseballGame2 = new \eStadium\BaseballGame();
        $baseballGame2->setGameId(2);
        return array(
          array($baseballGame1, 1),
          array($baseballGame2, 2)
        );
    }

}

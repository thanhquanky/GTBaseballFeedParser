<?php
/**
 * Project: GTBaseballFeedParser
 * User: thanhquanky
 * Date: 9/28/14
 * Time: 1:56 AM
 */

namespace eStadium\Baseball;

require_once 'Player.class.php';

class PlayerParser {
    public function __construct() {}

    public function parseName($feed)
    {
        return $feed['name']->__toString();
    }

    public function parseShortName($feed)
    {
        return $feed['shortname']->__toString();
    }

    public function parseNumber($feed)
    {
        return intval($feed['uni']->__toString());
    }

    public function parseSpot($feed)
    {
        return intval($feed['spot']->__toString());
    }

    public function parsePosition($feed)
    {
        return $feed['pos']->__toString();
    }

    public function parseBats($feed)
    {
        return $feed['bats']->__toString();
    }

    public function parseThrows($feed)
    {
        return $feed['throws']->__toString();
    }

    public function parse($feed) {
        $playerAttributes = $feed->attributes();
        $name = $this->parseName($playerAttributes);
        $shortName = $this->parseShortName($playerAttributes);
        $number = $this->parseNumber($playerAttributes);
        $spot = $this->parseSpot($playerAttributes);
        $position = $this->parsePosition($playerAttributes);
        $bats = $this->parseBats($playerAttributes);
        $throws = $this->parseThrows($playerAttributes);

        $player = new Player($name, $shortName, $number, $spot, $position, $bats, $throws);
        return $player;
    }
} 
<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/25/14
 * Time: 3:07 AM
 */

namespace eStadium\Baseball;

echo __DIR__;

require_once 'scripts/XmlFeedParser.class.php';
require_once 'scripts/Configuration.class.php';
require_once 'scripts/TeamParser.class.php';
require_once 'scripts/VenueParser.class.php';
require_once 'scripts/PlayerParser.class.php';

$xmlFeed = simplexml_load_file('geot.xml');
$playerParser = new PlayerParser();
$teamParser = new TeamParser($playerParser);
$venueParser = new VenueParser();
$baseballXmlFeedParser = new XmlFeedParser($venueParser, $teamParser);
$game = $baseballXmlFeedParser->parse($xmlFeed);
var_dump($game->getTeams()[0]);
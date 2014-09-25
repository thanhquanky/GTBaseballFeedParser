<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/25/14
 * Time: 3:07 AM
 */

namespace eStadium\Baseball;
require_once 'Game.class.php';
require_once 'GameBuilder.class.php';
require_once 'XmlFeedParser.class.php';



$config = array(
    'version' => '0.1',
    'input' => 'geot.xml',
    'author' => 'Thanh Ky Quan'
);

$xmlFeed = simplexml_load_file($config['input']);
$baseballXmlFeedParser = new XmlFeedParser();
$baseballXmlFeedParser->parse($xmlFeed);
$baseballGameBuilder = new GameBuilder($baseballXmlFeedParser);
$baseballGame = $baseballGameBuilder->build();
var_dump($baseballGame);
?>
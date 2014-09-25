<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/25/14
 * Time: 3:07 AM
 */

namespace eStadium;
require_once 'BaseballGame.class.php';
require_once 'BaseballGameBuilder.class.php';
require_once 'BaseballXmlFeedParser.class.php';



$config = array(
    'version' => '0.1',
    'input' => 'geot.xml',
    'author' => 'Thanh Ky Quan'
);

$xmlFeed = simplexml_load_file($config['input']);
$baseballXmlFeedParser = new BaseballXmlFeedParser();
$baseballXmlFeedParser->parse($xmlFeed);
$baseballGameBuilder = new BaseballGameBuilder($baseballXmlFeedParser);
$baseballGame = $baseballGameBuilder->build();
var_dump($baseballGame);
?>
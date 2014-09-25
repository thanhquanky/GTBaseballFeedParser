<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/25/14
 * Time: 2:57 AM
 */

namespace eStadium;

require_once 'IBaseballGameBuilder.interface.php';
require_once 'BaseballGame.class.php';

class BaseballGameBuilder implements IBaseballGameBuilder
{
    private $feedParser;
    private $baseballGame;

    public function __construct($feedParser)
    {
        $this->feedParser = $feedParser;
        $this->baseballGame = new BaseballGame();
    }

    public function setVisitor($visitor)
    {
        $this->baseballGame->setVisitor($visitor);
    }

    public function setHome($home)
    {
        $this->baseballGame->setHome($home);
    }

    public function setDate($date)
    {
        $this->baseballGame->setDate($date);
    }

    public function setLocation($location)
    {
        $this->baseballGame->setLocation($location);
    }

    public function setStartTime($startTime)
    {
        $this->baseballGame->setStartTime($startTime);
    }

    public function setStadium($stadium)
    {
        $this->baseballGame->setStadium($stadium);
    }

    public function setScheduledInning($scheduledInning)
    {
        $this->baseballGame->setScheduledInning($scheduledInning);
    }

   public function build()
   {
       $feedParser = $this->feedParser;

       $this->setVisitor($feedParser->getVisitorName());
       $this->setHome($feedParser->getHomeName());
       $this->setLocation($feedParser->getLocation());
       $this->setDate($feedParser->getDate());
       $this->setStadium($feedParser->getStadium());
       $this->setScheduledInning($feedParser->getScheduledInning());
       $this->setStartTime($feedParser->getStartTime());
       return $this->baseballGame;
   }
} 
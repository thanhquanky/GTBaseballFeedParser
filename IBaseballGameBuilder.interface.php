<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/25/14
 * Time: 2:50 AM
 */
namespace eStadium;

interface IBaseballGameBuilder
{
    public function setHome($home);
    public function setVisitor($visitor);
    public function setDate($date);
    public function setLocation($location);
    public function setStartTime($startTime);
    public function setStadium($stadium);
    public function setScheduledInning($scheduledInning);

}

?>
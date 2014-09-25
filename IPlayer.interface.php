<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/25/14
 * Time: 3:25 PM
 */

namespace eStadium\Baseball;

interface IPlayer
{
    public function getName();
    public function setName($name);

    public function getNumber();
    public function setNumber($number);

    public function getPosition();
    public function setPosition($position);
}
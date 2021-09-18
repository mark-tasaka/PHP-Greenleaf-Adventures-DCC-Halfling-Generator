<?php

/*Halfling */

function getHitPoints($level, $staminaMod)
{
    $baseHP = rand(1, 4);
    $baseHP += $staminaMod;
    
    if($baseHP < 1)
    {
        $baseHP = 1;
    }

    $hitPoints = $baseHP;

    for($i = 0; $i < $level; ++$i)
    {
        $levelHP = rand(2, 6);
        $levelHP += $staminaMod;

        if($levelHP < 2)
        {
            $levelHP = 2;
        }

        $hitPoints += $levelHP ;

    }

    return $hitPoints;

}

/*Halfling*/

function savingThrowReflex($level)
{
    $reflex = 0;

    if($level >= 1 && $level <= 2)
    {
        $reflex = 1;
    }
    
    if($level >= 3 && $level <= 4)
    {
        $reflex = 2;
    }
    
    if($level == 5)
    {
        $reflex = 3;
    }

    if($level >= 6 && $level <= 7)
    {
        $reflex = 4;
    }

    if($level >= 8 && $level <= 9)
    {
        $reflex = 5;
    }

    if($level >= 10)
    {
        $reflex = 6;
    }

    return $reflex;

}


function savingThrowFort($level)
{
    $fort = 0;

    if($level >= 1 && $level <= 3)
    {
        $fort = 1;
    }
    
    if($level >= 4 && $level <= 6)
    {
        $fort = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $fort = 3;
    }

    if($level >= 10)
    {
        $fort = 4;
    }

    return $fort;

}


function savingThrowWill($level)
{
    $will = 0;

    if($level >= 1 && $level <= 2)
    {
        $will = 1;
    }
    
    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }
    
    if($level == 5)
    {
        $will = 3;
    }

    if($level >= 6 && $level <= 7)
    {
        $will = 4;
    }

    if($level >= 8 && $level <= 9)
    {
        $will = 5;
    }

    if($level >= 10)
    {
        $will = 6;
    }

    return $will;

}

function criticalDie($level)
{
    $critical = "";

    if($level == 1 || $level == 2)
    {
        $critical = "1d8/III";
    }

    if($level == 3 || $level == 4)
    {
        $critical = "1d10/III";
    }
    
    if($level == 5 || $level == 6)
    {
        $critical = "1d12/III";
    }
    
    if($level == 7 || $level == 8)
    {
        $critical = "1d14/III";
    }
    
    if($level == 9 || $level == 10)
    {
        $critical = "1d16/III";
    }

    return $critical;

}

function attackBonus($level)
{
    $attackBonus = 0;

    switch($level)
    {
        case 1:
            $attackBonus = 1;
        break;
        
        case 2:
            $attackBonus = 2;
        break;
        
        case 3:
            $attackBonus = 2;
        break;
        
        case 4:
            $attackBonus = 3;
        break;
        
        case 5:
            $attackBonus = 4;
        break;
        
        case 6:
            $attackBonus = 5;
        break;
        
        case 7:
            $attackBonus = 5;
        break;

        case 8:
            $attackBonus = 6;
        break;
        
        case 9:
            $attackBonus = 7;
        break;
        
        case 10:
            $attackBonus = 8;
        break;

        default:
        $attackBonus = 0;
    }

    return $attackBonus;
}

function actionDice($level)
{
    $actionDice = "";

    if($level <= 5)
    {
        $actionDice = "1d20";
    }

    if($level == 6)
    {
        $actionDice = "1d20+1d14";
    }

    if($level == 7)
    {
        $actionDice = "1d20+1d16";
    }

    if($level >= 8)
    {
        $actionDice = "1d20+1d20";
    }

    return $actionDice;
}


function title($level)
{
    $title = "";

    if($level == 1)
    {
        $title = "Wanderer";
    }
    else if($level == 2)
    {
        $title = "Explorer";
    }
    else if($level == 3)
    {
        $title = "Collector";
    }
    else if($level == 4)
    {
        $title = "Accumulator";
    }
    else
    {
        $title = "Wise one";
    }

    return $title;

}

function sneakHide($level)
{   
    $sneakHide = 0;

    switch($level)
    {
        case 1:
            $sneakHide = 3;
        break;
        
        case 2:
            $sneakHide = 5;
        break;
        
        case 3:
            $sneakHide = 7;
        break;
        
        case 4:
            $sneakHide = 8;
        break;
        
        case 5:
            $sneakHide = 9;
        break;
        
        case 6:
            $sneakHide = 11;
        break;
        
        case 7:
            $sneakHide = 12;
        break;
    
        case 8:
            $sneakHide = 13;
        break;
        
        case 9:
            $sneakHide = 14;
        break;
        
        case 10:
            $sneakHide = 15;
        break;
    
        default:
        $sneakHide = 0;
    }
    
    return $sneakHide;

}


?>
<?php
//Zero Levo Occupation


function getOccupation()
{
	$a00 = array("Dwarven Apothecarist", "Dwarf", "Cudgel (as Staff)", "1d4", "Steel Vial");
	$a01 = array("Dwarven Blacksmith", "Dwarf", "Hammer (as Club)", "1d4", "Mithril, 1 oz.");
	$a02 = array("Dwarven Riveter", "Dwarf", "Hammer (as Club)", "1d4", "Mithril, 1 oz.");
	$a03 = array("Dwarven Chestmaker", "Dwarf", "Chisel (as Dagger)", "1d4", "Wood, 10 lbs.");
	$a04 = array("Dwarven Herder", "Dwarf", "Staff", "1d4", "Sow");
	$a05 = array("Dwarven Miner", "Dwarf", "Pick (as Club)", "1d4", "Lantern");
	$a06 = array("Dwarven Linkman", "Dwarf", "Pick (as Club)", "1d4", "Lantern");
	$a07 = array("Dwarven Mushroom Farmer", "Dwarf", "Shovel (as Staff)", "1d4", "Sack");
	$a08 = array("Dwarven Rat-Catcher", "Dwarf", "Club", "1d4", "Net");
	$a09 = array("Dwarven Stonemason", "Dwarf", "Hammer (as club)", "1d4", "Fine Stones, 10 lbs.");
	$a10 = array("Dwarven Mason", "Dwarf", "Hammer (as club)", "1d4", "Fine Stones, 10 lbs.");
	

        $array1 = array($a00, $a01, $a02, $a00, $a04, $a05, $a06, $a07, $a08, $a09, $a10);

        shuffle($array1);
        
        return $array1[0];
        
}

function tradeGoodsAddition($occupation, $weapon)
{
	if($weapon === "Pitchfork (as Spear)")
	{
		$animalArray = array(" (sheep)", " (goat)", " (cow)", " (duck)", " (goose)", " (mule)");
		shuffle($animalArray);
		return $animalArray[0];
	}
	else if($occupation === "Wainwright")
	{
		$cartArray = array(" containing tomatoes", " containing nothing", " containing straw", " containing your dead", " containing dirt", " containing rocks");
		shuffle($cartArray);
		return $cartArray[0];
	}
	else if($occupation === "Mercenary")
	{
		return "Hide Armour";
	}
	else if($occupation === "Outlaw")
	{
		return "Leather Armour";
	}
	else if($occupation === "Soldier")
	{
		return "Shield";
	}
	else
	{
		return "";
	}


}


?>
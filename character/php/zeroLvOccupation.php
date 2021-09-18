<?php
//Zero Levo Occupation


function getOccupation()
{

	$a21 = array("Halfling Chicken Butcher", "Halfling", "Hand Axe", "1d6", "Chicken Meat, 5 lbs.");
	$a22 = array("Halfling Dyer", "Halfling", "Staff", "1d4", "Fabric, 3 yards");
	$a23 = array("Halfling Tailor", "Halfling", "Staff", "1d4", "Fabric, 3 yards");
	$a24 = array("Halfling Glovemaker", "Halfling", "Awl (as Dagger)", "1d4", "Gloves, 4 pairs");
	$a25 = array("Halfling Gypsy", "Halfling", "Sling", "1d4", "Hex Doll");
	$a26 = array("Halfling Haberdasher", "Halfling", "Scissors (as Dagger)", "1d4", "Fine suits, 3 sets");
	$a27 = array("Halfling Mariner", "Halfling", "Knife (as Dagger)", "1d4", "Sailcloth, 2 yards");
	$a28 = array("Halfling Moneylender", "Halfling", "Short Sword", "1d6", "");
	$a29 = array("Halfling Trader", "Halfling", "Short Sword", "1d6", "");
	$a30 = array("Halfling Vagrant", "Halfling", "Club", "1d4", "Begging Bowl");
	

        $array1 = array($a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30);

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
<?php

namespace LiveWireTech\ItemEnchantment;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\enchantment\EnchantmentEntry;
use pocketmine\item\enchantment\EnchantmentList;
use pocketmine\item\Item;
use pocketmine\item\enchantment\Enchantment;

class ItemEnchantment extends PluginBase{

public function onEnable(){
$this->saveDefaultConfig();
$this->getConfig()->set("itemid", "261");
$this->getConfig()->set("enchantment","2");
$this->getLogger()->info("ItemEnchantment has been loaded");
}

public function onDisable(){
$this->getLogger()->info("ItemEnchantment was disabled");
}

public function ItemHeld(PlayerItemHeldEvent $event) {
$item = $event->getItem();
$id = $item->getId();
$damage = $item->getDamage();
}

public function onCommand(CommandSender $sender,Command $command,$commandLabel, array $args){
$conItem = $this->getConfig()->get("itemid");
$enchantment = $this->getConfig()->get("enchantment");

if(strtolower ($command->getName()) === "EnchantItem"){
  
   if($id === $conItem){


   }

}


 }






}


?>

<?php

namespace LiveWireTech\ItemEnchantment;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\utils\Config;


class ItemEnchantment extends PluginBase{

 public function onLoad(){

  $cfg = new Config($this->getDataFolder() . "config.yml", Config::YAML);
  $cfg->set("itemid", "261");
  $cfg->save();
 }

 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
  $cmdName = $cmd->getName();
  $item = new Item($sender->getInventory()->getItemInHand()->getId());
  $conItem = $this->getConfig()->get("itemid");

   if(cmdName === "enchantItem"){
    if($item === $conItem){
    $sender->sendMessage("Enchant Success");
    return true;
    }
   }
 $sender->sendMessage("Enchantment Failed");
 return false;
 }
}
?>
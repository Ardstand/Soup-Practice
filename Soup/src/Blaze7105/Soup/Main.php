<?php

// DO NOT CHANGE ANY CODE WITHOUT PRIOR PERMISSION

namespace Blaze7105\Soup;

use pocketmine\Player;
use pocketmine\event\player\PlayerInteractEvent; 
use pocketmine\item\Item;
use pocketmine\entity\{Effect, EffectInstance};
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
        
        public function onEnable(){
            $this->getServer()->getPluginManager()->registerEvents($this, $this);
            $this->getLogger()->info("Soup Enabled");
            }

        public function onItemInteract(PlayerInteractEvent $event)
        {
            $player = $event->getPlayer();
            $health = $player->getHealth();
            $item = $event->getItem();
            if($item->getId() === 282)
            {
                $player->setHealth($health + 8);
                $player->getInventory()->setItemInHand(new Item(Item::AIR,0,0));
            }
        }
}

?>
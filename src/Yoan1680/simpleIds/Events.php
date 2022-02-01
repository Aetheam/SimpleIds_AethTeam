<?php
namespace Yoan1680\simpleIds;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;

class Events implements Listener{


    public function onItemHeld(PlayerItemHeldEvent $event){
        $player = $event->getPlayer();
        if($player->hasPermission("Use.Ids")){
            $item = $event->getItem();
            $id = $item->getId();
            $meta = $item->getMeta();
            $name = $item->getVanillaName();
            $player->sendActionBarMessage("§f[§6$id §f: §6$meta §f: §6$name §f]");
        }
    }
}
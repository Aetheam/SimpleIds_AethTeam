<?php
namespace Yoan1680\simpleIds;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\item\VanillaItems;

class Events implements Listener{


    public function onItemHeld(PlayerItemHeldEvent $event): void {
        $player = $event->getPlayer();
        if($player->hasPermission("Use.Ids")){
            $item = $event->getItem();
            $id = $item->getTypeId();
            $name = $item->getVanillaName();
            $player->sendPopup("§f[§6$id, §f: §6$name §f]");
        }
    }
}
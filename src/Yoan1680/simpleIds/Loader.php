<?php
namespace Yoan1680\simpleIds;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase{
    protected function onEnable(): void
    {
        $this->getServer()->getLogger()->info("SimpleIds à bien été activés !");
        $this->getServer()->getLogger()->info("Permission de SimpleIds §a[Use.Ids]");
        $this->getServer()->getPluginManager()->registerEvents(new Events, $this);
    }
}
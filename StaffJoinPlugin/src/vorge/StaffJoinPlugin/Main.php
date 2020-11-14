<?php

namespace vorge;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase as pl;

use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;

class main extends pl implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();

        if($player->hasPermission("joinstaff.msg")){
            $this->getServer()->broadcastMessage("[staff]" . $player->getName() . "has joined this amazing server staff be on the look out this could be a hacker!");
        }
    }


}
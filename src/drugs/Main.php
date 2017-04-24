<?php
namespace drugs;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\entity\PrimedTNT;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
class Main extends PluginBase implements Listener{

public function onEnable(){
}

public function drugged(PlayerInteractEvent $event){
$player = $event->getServer()->getPlayer();
$level = $player->getLevel();
if($player->getItemInHand() = Item::get(280){
$entity = $player->createEntity(Entity::get(65), $player->getLineOfSight);
$entity->setMotion($player->getLineOfSight()->getDirection()->multiply(3));
  }
   }
}


<?php
namespace drugs;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerJoinEvent;
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
if($player->getItemInHand() = Item::get(388){
$entity = $player->createEntity(Entity::get(65), $player->getLineOfSight);
$entity->setMotion($player->getLineOfSight()->getDirection()->multiply(3));
  }
   }
public function joinserver(PlayerJoinEvent $event){
  $player = $event->getServer()->getPlayer();
  $playerOp = $player->isOp();
  if($playerOp = true){
    $player->setJoinMessage("An Official Moderator has joined the game!);
  }else{
    $player->setJoinMessage("");
}
}
public function deathu(PlayerDeathEvent $event){
$player = $event->getServer()->getPlayer();
$playerPos = $player->getPos();
$event->createEntity


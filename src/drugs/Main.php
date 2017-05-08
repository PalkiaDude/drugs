<?php
namespace drugs;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\entity\PrimedTNT;
use pocketmine\entity\Snowball;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
class Main extends PluginBase implements Listener{

public function onEnable(){
}

public function drugged(PlayerInteractEvent $event){
$player = $event->getServer()->getPlayer();
$level = $player->getLevel();
if($player->getItemInHand() = Item::get(369){
$entity = $player->createEntity(Entity::get(65), $player->getLineOfSight);
$entity->setMotion($player->getLineOfSight()->getDirection()->multiply(3));
  }
   }
public function joinserver(PlayerJoinEvent $event){
  $player = $event->getServer()->getPlayer();
  $playerOp = $player->isOp();
  if($playerOp = true){
    $player->setJoinMessage("An Official Moderator has joined the game!");
  }else{
    $player->setJoinMessage("");
}
}
public function deathu(PlayerDeathEvent $event){
$player = $event->getServer()->getPlayer();
$playerN = $player->getNameTag();
$playerPos = $player->getPos();
$zombie = $event->createEntity(Entity::get(32), $playerPos);
$zombie->setNameTag($playerN);
$player->setDeathMessage($playerN". has been eliminated!");
$player->setGameMode(3);
}

public function fire(EntityDamageByEntityEvent $event){
$damager = $event->getDamager();
$entity = $event->getEntity();
if($damager instanceof Snowball){
if($entity instanceof Player){
$entity->setOnFire(100);
}
}


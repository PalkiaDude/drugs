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
$player->spawnEntity(Entity::get(65), $level;

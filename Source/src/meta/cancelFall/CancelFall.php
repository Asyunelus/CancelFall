<?php

namespace meta\cancelFall;

class CancelFall extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener {
 public function onEnable () {
  $this->getServer ()->getPluginManager ()->registerEvents ($this,$this);
 }
 public function onDamage (\pocketmine\event\entity\EntityDamageEvent $ev) {
   if ($ev->getCause() == \pocketmine\event\entity\EntityDamageEvent::CAUSE_FALL) $ev->setCancelled ();
  }
}

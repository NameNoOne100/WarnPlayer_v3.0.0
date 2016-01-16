<?php

  namespace WarnPlayer;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\utils\TextFormat as TF;
  use pocketmine\command\Command;
  use pocketmine\command\CommandSender;
  use pocketmine\command\CommandExecutor;

  class Main extends PluginBase implements Listener {

    public function onEnable() {

      $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {

      if(!(isset($args[0]) and isset($args[1]))) {

        $sender->sendMessage(TF::RED . "Error: not enough args. Usage: /warn <player> <reason>");

      } else {

        $sender_name = $sender->getName();
        $player = $this->getServer()->getPlayer($args[0]);
        $player_name = $player->getName();

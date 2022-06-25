<?php

namespace Toshiro0\PluginNice;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase implements Listener {
    public function onEnable() : void {
        $this->getLogger()->info("--- LIVE ---");
    }
    public function onDisable() : void {
        $this->getLogger()->info("--- DEATH ---");
    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
        switch ($command->getName()) {
            case "main" :
                $sender->sendMessage("Hello " . $sender->getName() . "!");
                if (isset($args[0])) {
                    switch (strtolower($args[0])) {
                        case "help":
                            $sender->sendMessage("hrlp...");
                        breack;
                        
                        case "h";
                            $sender->sendMessage("helth testing ");
                }
                return true;
            /*default:
                throw new \AssertionError("This line will never be executed");*/
                }
        }
    }
}    

// TODO : fix the proplmes in the code && add new codes...

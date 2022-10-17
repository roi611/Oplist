<?php
    
namespace roi611\oplist;
    
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
    
class Main extends PluginBase {
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        
        $ops = [];

        foreach($this->getServer()->getOps()->getAll() as $opName => $isOp){
            array_push($ops,$opName);
        }

        $sender->sendMessage("§eOP:§9\n".implode("\n§9", $ops));
        
        return true;
        
    }
        
}
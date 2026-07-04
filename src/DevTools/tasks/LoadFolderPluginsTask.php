<?php

namespace DevTools\tasks;

use pocketmine\plugin\PluginLoadOrder;
use pocketmine\scheduler\Task;
use pocketmine\Server;

class LoadFolderPluginsTask extends Task{

    public function onRun($currentTick){
        $server = Server::getInstance();
        $server->getPluginManager()->loadPlugins($server->getPluginPath(), ["FolderPluginLoader\\FolderPluginLoader"]);
        $server->enablePlugins(PluginLoadOrder::STARTUP);
        $server->enablePlugins(PluginLoadOrder::POSTWORLD);
    }
}
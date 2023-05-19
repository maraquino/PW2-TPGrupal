<?php

namespace TPWebII;
use DatabaseConnect;

include_once('helpers/DatabaseConnect.php');

class Configuration{
    private $configFile = 'config/config.ini';

    public function __construct()
    {
    }

    private function getArrayConfig()
    {
        return parse_ini_file($this->configFile);
    }

    public function getDatabase()
    {
        $config = $this->getArrayConfig();
        return new DatabaseConnect(
            $config['servername'],
            $config['username'],
            $config['password'],
            $config['database']);
    }
}
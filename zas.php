<?php
    /**
     * The ZAS command-line tool for organizing files following the ZAS specification
     */
     # zas helps in creation of classes including adding their boiler plate codes.
 
     require("master.setup.php");
     use Zas\ZasHelper;
  
     $zas = new ZasHelper();
     $zas->makeClass("Server/Worker/cluster", "Server", ["Server/ServerInterface", "Human/ServerInterface"], ["Server/ServerTrait", "Human/ServerTrait"]);
     $zas->process($argc, $argv);
     
?>
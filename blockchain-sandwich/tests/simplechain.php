<?php

    include_once(__DIR__ . "/../Blockchain.php");

    /**
     * Create a chain and mine some blocks
    */

    $six_coin = new BlockChain;

    echo("Mining the first block...\n");
    $six_coin->addBlock(new Block(1, "First Block!", date_timestamp_get(new DateTime)));

    echo("Mining the second block...\n");
    $six_coin->addBlock(new Block(2, "Second Block!", date_timestamp_get(new DateTime)));

    echo(json_encode($six_coin, JSON_PRETTY_PRINT));

?>
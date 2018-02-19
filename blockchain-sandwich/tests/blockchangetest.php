<?php

    include_once(__DIR__ . "/../Blockchain.php");

    /**
     * Let's make a chain where we do some editing of the blocks!
    */

    $six_coin = new Blockchain;

    echo("Mining first block...\n");
    $six_coin->addBlock(new Block(1, "First Block!", date_timestamp_get(new DateTime)));

    echo("Mining second block...\n");
    $six_coin->addBlock(new Block(2, "Second Block!", date_timestamp_get(new DateTime)));

    echo("Chain Valid: " . ($six_coin->isValid() ? "true" : "false") . "\n");

    echo("Editing second block...\n");
    $six_coin->chain[1]->data = "Now this block is different!";
    $six_coin->chain[1]->hash = $six_coin->chain[1]->calculateHash();

    // This should come back false, since blockchains are immutable!
    echo("Chain Valid: " . ($six_coin->isValid() ? "true" : "false") . "\n");

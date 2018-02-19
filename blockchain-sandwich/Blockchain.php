<?php
    require_once("Block.php");

    class Blockchain {

        /**
         * Instatiates the blockchain
         */
        public function __construct()
        {
            // Every chain will ALWAYS begin with a Genesis Block
			$this->chain = [$this->createGenesisBlock()];
			
			// Changing this determines how long the block will take to mine
            $this->difficulty = 5;
        }

        /**
         * Creates the Genesis Block
         *
         * @return Block    The Genesis Block
         */
        public function createGenesisBlock()
        {
            return new Block(0, "This is the genesis block!", date_timestamp_get(new DateTime));
        }

        /**
         * Gets the last block in the chain
         *
         * @return Block    The last block in this blockchain
         */
        public function getLastBlock()
        {
            return $this->chain[count($this->chain) - 1];
        }

        /**
         * Adds a block onto the tail of the blockchain
         *
         * @param Block $block
         * @return void
         */
        public function addBlock(Block $block)
        {
            // The new block's previous hash should be the hash of the former
            // last block in the blockchain
            $block->previous_hash = $this->getLastBlock()->hash;

            // Do work required to push the block onto the chain
            $this->work($block);

            // After work is done, push the block onto the chain
            $this->chain[] = $block;
        }

		/**
		 * Does the work to "mine" the block
		 *
		 * @param Block $block
		 * @return void
		 */
        public function work(Block $block)
        {
            while (substr($block->hash, 0, $this->difficulty) !== str_repeat("0", $this->difficulty)) {
				$block->incrementNonce();
				$block->hash = $block->calculateHash();
			}
			
			echo("Block mined successfully: " . $block->hash . "\n");
		}
		
		/**
		 * Checks to see if the chain is continuous between the current block
		 * and the previous block
		 *
		 * @param Block $current_block
		 * @param Block $previous_block
		 * @return boolean
		 */
		private function isChainContinuous(Block &$current_block, Block &$previous_block)
		{
			return ($current_block->previous_hash === $previous_block->hash);
		}

		/**
		 * Checks to see if the current block's hash is valid
		 *
		 * @param Block $current_block
		 * @return boolean
		 */
		private function isBlockHashValid(Block &$current_block)
		{
			return ($current_block->hash === $current_block->calculateHash());
		}
		
		/**
		 * Checks to see if the blockchain is valid
		 *
		 * @return boolean
		 */
		public function isValid()
		{
			// Use FOR instead of FOREACH since we have to start at 1 instead of 0
			// (we don't need to check if the Genesis Block is valid--that's taken
			// care of by the Blockchain class contract)
			for ($i = 1; $i < count($this->chain); ++$i) { 
				$current_block = $this->chain[$i];
				$previous_block = $this->chain[$i-1];

				if (!$this->isChainContinuous($current_block, $previous_block) || !$this->isBlockHashValid($current_block)) 
					return false;
			}

			return true;
		}
    }

?>
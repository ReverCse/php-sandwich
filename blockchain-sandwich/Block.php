<?php
class Block
{
    public $nonce;

    /**
     * Constructs a Block object
     *
     * @param int $index
     * @param Mixed $data
     * @param int $timestamp
     * @param string $previous_hash
     */
    public function __construct(int $index, $data, int $timestamp, string $previous_hash = null)
    {
        $this->index            = $index;
        $this->data             = $data;
        $this->timestamp        = $timestamp;
        $this->previous_hash    = $previous_hash;
        $this->hash             = $this->calculateHash();
        $this->nonce            = 0;
    }

    /**
     * Calculates the block's hash based off of its parameters
     *
     * @return string
     */
    public function calculateHash()
    {
        return hash("sha256", $this->index.$this->previous_hash.$this->timestamp.((string)$this->data).$this->nonce);
    }

    /**
     * Increments the Nonce of this block
     *
     * @return void
     */
    public function incrementNonce()
    {
        $this->nonce++;
    }
};

# Blockchain Sandwich

## Overview:
This repository is a quick foray into the essence of blockchains. Good for some quick testing to see how blockchains work at the simplest level.

## Instructions:
In order for this codebase to work, you must have PHP 7.0 or greater installed on your system.

1. Clone the repository
2. Open your terminal app of choice
3. Navigate to the `blockchain-sandwich/tests` directory
4. Run the tests!
	* For the simple blockchain proof of concept test, run `php simplechain.php`
	* For the "proof of immutability" blockchain proof of concept test, run `php blockchaintest.php`

## Additional Notes:
Want to make it easier/harder for your computer to mine the next block in the chain? Open up `Blockchain.php` in your favorite editor and change the `$this->difficulty` value! Lower values take less time, while higher values take more time.

## Attribution:
This code is my rendition of the code found at https://github.com/knowledgearcdotorg/phpblockchain, with mostly only the method and variable names changed, but the occasional functional change as well.

Any and all reproductions of this codebase **MUST** include a link back to this parent repository.
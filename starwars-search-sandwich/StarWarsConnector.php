<?php

class StarWarsConnector
{
    private $url;

    public function __construct()
    {
        $this->url = "https://swapi.co/api/people/?search=";
    }

    /**
     * Creates the SWAPI connection
     *
     * @return resource
     */
    private function createConnection(string $query)
    {
        echo("Creating Connection...\n");

        $request = curl_init($this->url . urlencode($query));
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
                
        return $request;
    }

    /**
     * Executed the previously set up query
     *
     * @param resource $request
     * @return void
     */
    private function execute($request)
    {
        echo("Executing Request...\n");

        $response = curl_exec($request);
        curl_close($request);

        return $response;
    }

    /**
     * Searches the Star Wars People database
     *
     * @param string $query
     * @return JSON
     */
    public function search(string $query)
    {
        return $this->execute($this->createConnection($query));
    }
}

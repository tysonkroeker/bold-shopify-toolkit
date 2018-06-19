<?php

namespace BoldApps\ShopifyToolkit\Contracts;

/**
 * Interface ApiSleeper.
 */
interface ApiSleeper
{
    /**
     * @param \GuzzleHttp\Psr7\Response|null $response
     */
    public function sleep($response);
}

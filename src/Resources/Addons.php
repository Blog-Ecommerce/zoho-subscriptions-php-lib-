<?php

namespace ZohoSubscriptions\Resources;

use Client;

/**
 * Class Addons
 * @package ZohoSubscriptions\Resources
 *
 * @property Client $client
 */
class Addons {

  const BASE_URL = 'addons';

  /**
   * Addons constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

}
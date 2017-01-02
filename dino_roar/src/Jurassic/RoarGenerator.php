<?php

/**
 * Created by PhpStorm.
 * User: michaelsilverman
 * Date: 12/22/16
 * Time: 5:31 PM
 */

namespace Drupal\dino_roar\Jurassic;

use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;

class RoarGenerator
{
    private $keyValueFactory;
    private $useCache;
    public function __construct(KeyValueFactoryInterface $keyValueFactory, $useCache)
    {
        $this->keyValueFactory = $keyValueFactory;
        $this->useCache = $useCache;
    }

    public function getRoar($length)
    {
        $key = 'roar_'.$length;
        $store = $this->keyValueFactory->get('dino');

        if ($store->has($key)) {
            return $store->get($key);
        }
        sleep(5);
        $string = 'R'.str_repeat('O', $length).'AR!';
        if ($this->useCache) {
            $store->set($key, $string);
        }


        return $string;
    }
}
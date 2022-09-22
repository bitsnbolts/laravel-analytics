<?php

namespace Bitsnbolts\LaravelAnalytics\Contracts;

/**
 * Interface TrackingBagInterface
 *
 * @package Bitsnbolts\LaravelAnalytics\Contracts
 */
interface TrackingBagInterface
{
    /**
     * adds a tracking
     *
     * @param string $tracking
     *
     * @return void
     */
    public function add($tracking);

    /**
     * returns all trackings
     *
     * @return array
     */
    public function get();
}

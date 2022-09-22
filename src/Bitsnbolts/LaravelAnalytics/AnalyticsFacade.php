<?php

namespace Bitsnbolts\LaravelAnalytics;

use Illuminate\Support\Facades\Facade;
use Bitsnbolts\LaravelAnalytics\Contracts\AnalyticsProviderInterface;

/**
 * Class AnalyticsFacade
 *
 * @package Bitsnbolts\LaravelAnalytics
 */
class AnalyticsFacade extends Facade
{
    /**
     * facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return AnalyticsProviderInterface::class;
    }
}

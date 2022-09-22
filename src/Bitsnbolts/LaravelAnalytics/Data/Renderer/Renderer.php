<?php

namespace Bitsnbolts\LaravelAnalytics\Data\Renderer;

/**
 * Interface Renderer
 * @package Bitsnbolts\LaravelAnalytics\Data\Renderer
 */
interface Renderer
{
    /**
     * Renders data
     *
     * @return string
     */
    public function render();
}

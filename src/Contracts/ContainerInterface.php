<?php

declare(strict_types=1);

namespace Tavaan\Engine\Container\Contracts;

/**
 * قرارداد Container.
 *
 * @see \Tavaan\Engine\Container\Container
 * @api 1.0
 */
interface ContainerInterface
{
    /**
     * متد bind.
     *
     * @return mixed
     */
    public function bind(/* ... */): mixed;

    /**
     * متد singleton.
     *
     * @return mixed
     */
    public function singleton(/* ... */): mixed;

    /**
     * متد scoped.
     *
     * @return mixed
     */
    public function scoped(/* ... */): mixed;

    /**
     * متد factory.
     *
     * @return mixed
     */
    public function factory(/* ... */): mixed;

    /**
     * متد instance.
     *
     * @return mixed
     */
    public function instance(/* ... */): mixed;

    /**
     * متد alias.
     *
     * @return mixed
     */
    public function alias(/* ... */): mixed;

    /**
     * متد tag.
     *
     * @return mixed
     */
    public function tag(/* ... */): mixed;

    /**
     * متد tagged.
     *
     * @return mixed
     */
    public function tagged(/* ... */): mixed;

    /**
     * متد when.
     *
     * @return mixed
     */
    public function when(/* ... */): mixed;

    /**
     * متد extend.
     *
     * @return mixed
     */
    public function extend(/* ... */): mixed;

    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد has.
     *
     * @return mixed
     */
    public function has(/* ... */): mixed;

    /**
     * متد call.
     *
     * @return mixed
     */
    public function call(/* ... */): mixed;

    /**
     * متد lazy.
     *
     * @return mixed
     */
    public function lazy(/* ... */): mixed;

    /**
     * متد flush.
     *
     * @return mixed
     */
    public function flush(/* ... */): mixed;

    /**
     * متد flushScoped.
     *
     * @return mixed
     */
    public function flushScoped(/* ... */): mixed;

    /**
     * متد forgetInstance.
     *
     * @return mixed
     */
    public function forgetInstance(/* ... */): mixed;

    /**
     * متد bindings.
     *
     * @return mixed
     */
    public function bindings(/* ... */): mixed;

    /**
     * متد dependencyGraph.
     *
     * @return mixed
     */
    public function dependencyGraph(/* ... */): mixed;

    /**
     * متد stats.
     *
     * @return mixed
     */
    public function stats(/* ... */): mixed;
}
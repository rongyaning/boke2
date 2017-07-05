<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\HttpCache\HttpCache;
=======
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
use Symfony\Component\HttpKernel\HttpCache\SurrogateInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * SurrogateListener adds a Surrogate-Control HTTP header when the Response needs to be parsed for Surrogates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SurrogateListener implements EventSubscriberInterface
{
    private $surrogate;

    /**
     * Constructor.
     *
     * @param SurrogateInterface $surrogate An SurrogateInterface instance
     */
    public function __construct(SurrogateInterface $surrogate = null)
    {
        $this->surrogate = $surrogate;
    }

    /**
     * Filters the Response.
     *
     * @param FilterResponseEvent $event A FilterResponseEvent instance
     */
    public function onKernelResponse(FilterResponseEvent $event)
    {
<<<<<<< HEAD
        if (!$event->isMasterRequest()) {
            return;
        }

        $kernel = $event->getKernel();
        $surrogate = $this->surrogate;
        if ($kernel instanceof HttpCache) {
            $surrogate = $kernel->getSurrogate();
            if (null !== $this->surrogate && $this->surrogate->getName() !== $surrogate->getName()) {
                $surrogate = $this->surrogate;
            }
        }

        if (null === $surrogate) {
            return;
        }

        $surrogate->addSurrogateControl($event->getResponse());
=======
        if (!$event->isMasterRequest() || null === $this->surrogate) {
            return;
        }

        $this->surrogate->addSurrogateControl($event->getResponse());
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
    }

    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::RESPONSE => 'onKernelResponse',
        );
    }
}

<?php

namespace ExpressiveGui\Action\Factory;

use ExpressiveGui\Action\SiteAction;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

/**
 * @package ExpressiveGui\Action\Factory
 */
class SiteActionFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return SiteAction
     */
    public function __invoke(ContainerInterface $container): SiteAction
    {
        $renderer = $container->get(TemplateRendererInterface::class);

        return new SiteAction($renderer);
    }
}
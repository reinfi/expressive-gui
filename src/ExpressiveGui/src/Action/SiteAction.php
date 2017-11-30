<?php

namespace ExpressiveGui\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

/**
 * @package ExpressiveGui\Action
 */
class SiteAction implements MiddlewareInterface
{
    /**
     * @var TemplateRendererInterface
     */
    private $renderer;

    /**
     * @param TemplateRendererInterface $renderer
     */
    public function __construct(TemplateRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @inheritDoc
     */
    public function process(
        ServerRequestInterface $request,
        DelegateInterface $delegate
    ): HtmlResponse {
        return new HtmlResponse(
            $this->renderer->render(
                'expressive-gui::site',
                [
                    'layout' => false,
                ]
            )
        );
    }
}
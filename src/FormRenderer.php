<?php
declare(strict_types=1);

namespace Studio24\LaravelAccessibleForms;

use Symfony\Component\Form\FormRendererInterface;
use Symfony\Component\Form\FormView;


/**
 * FormRenderer to use outside Twig Templates, based on hostnet/form-twig-bridge (Copyright Hostnetbv)
 * @see https://github.com/hostnet/form-twig-bridge/blob/master/src/PhpRenderer.php
 * @author Nico Schoenmaker <nschoenmaker@hostnet.nl>
 */
class FormRenderer
{
    /** @var FormRendererInterface  */
    protected $renderer;

    public function __construct(FormRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * Renders only the errors of the passed FormView.
     *
     * @param  FormView $view
     * @param  array $variables
     * @return string
     */
    public function formErrorSummary(FormView $view, array $variables = [])
    {
        return $this->renderer->searchAndRenderBlock($view, 'form_error_summary', $variables);
    }

}

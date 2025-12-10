<?php
declare(strict_types=1);

namespace Studio24\LaravelAccessibleForms\Facade;

use Studio24\LaravelAccessibleForms\FormRenderer as RealFormRenderer;
use Illuminate\Support\Facades\Facade;

class FormRenderer extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return RealFormRenderer::class;
    }
}

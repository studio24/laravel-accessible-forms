<?php

declare(strict_types=1);

namespace Studio24\LaravelAccessibleForms;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Studio24\AccessibleForms\Twig\AccessibleFormsExtension;
use Studio24\LaravelAccessibleForms\Facade\FormRenderer as FormRendererFacade;

class ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('accessible-forms')
            ->hasConfigFile();
    }

    public function boot()
    {
        parent::boot();

        $twig = $this->getTwigEnvironment();
        $twig->addExtension(new AccessibleFormsExtension());
        $this->registerBladeDirectives();
    }

    protected function registerBladeDirectives()
    {
        // @formSummary($form)
        Blade::directive('formSummary', function ($expression) {
            return sprintf(
                '<?php echo \\%s::formErrorSummary(%s); ?>',
                FormRendererFacade::class,
                trim($expression, '()')
            );
        });
    }

    protected function getTwigEnvironment(): \Twig\Environment
    {
        return $this->app->make(\Twig\Environment::class);
    }
}

<?php

declare(strict_types=1);

namespace Studio24\LaravelAccessibleForms\Tests;

use Barryvdh\Form\Facade\FormFactory;
use Barryvdh\Form\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Studio24\LaravelAccessibleForms\ServiceProvider;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/** @see https://docs.phpunit.de/en/12.4/writing-tests-for-phpunit.html */
class BladeTest extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app->make('Illuminate\Contracts\Http\Kernel')->pushMiddleware('Illuminate\Session\Middleware\StartSession');

        $app['config']->set('app.debug', true);
        $app['view']->addNamespace('forms', __DIR__ .'/views');

        $app['router']->any('form', function () {

            $form = FormFactory::createBuilder()
                ->add('name', TextType::class, ['required' => true, 'label' => 'Name'])
                ->add('save', SubmitType::class, ['label' => 'Save'])
                ->getForm();

            $form->handleRequest();

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    return 'valid';
                }
            }

            return view('forms::test', $form->createView());
        });
    }

    public function testFormSummary()
    {
        $crawler = $this->call('POST', 'form', [
            'form' => ['save' => true]
        ]);

        $this->assertEquals('problems with this request', $crawler->getContent());
    }
}

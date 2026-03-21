<?php

use Gremo\CaptchaFormBundle\Form\Type\HoneypotType;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set(HoneypotType::class)
        ->arg(0, []) // configuration (collection vide)
        ->tag('form.type', ['alias' => 'gremo_captcha_honeypot'])
        ->tag('captcha_form.type', ['adapter' => 'honeypot']);
};

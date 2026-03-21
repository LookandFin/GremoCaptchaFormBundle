<?php

use Gremo\CaptchaFormBundle\DependencyInjection\Factory\Adapter\RecaptchaAdapter;
use Gremo\CaptchaFormBundle\DependencyInjection\Factory\Adapter\RecaptchaV3Adapter;
use Gremo\CaptchaFormBundle\DependencyInjection\Factory\Adapter\HoneypotAdapter;
use Gremo\CaptchaFormBundle\DependencyInjection\Factory\Adapter\GregwarCaptchaAdapter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set(RecaptchaAdapter::class)
        ->tag('gremo_captcha.adapter_factory');

    $services->set(RecaptchaV3Adapter::class)
        ->tag('gremo_captcha.adapter_factory');

    $services->set(HoneypotAdapter::class)
        ->tag('gremo_captcha.adapter_factory');

    $services->set(GregwarCaptchaAdapter::class)
        ->tag('gremo_captcha.adapter_factory');
};

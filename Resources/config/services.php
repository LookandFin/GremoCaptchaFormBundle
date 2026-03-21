<?php

use Gremo\CaptchaFormBundle\Form\Type\CaptchaType;
use Gremo\CaptchaFormBundle\Validator\Constraints\StoredCaptchaValidator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set('gremo_captcha.captcha_form_type', CaptchaType::class)
        ->arg(0, null) // default adapter form from configuration
        ->tag('form.type', ['alias' => 'gremo_captcha']);

    $services->set('gremo_captcha.validator.stored_captcha', StoredCaptchaValidator::class)
        ->arg(0, new Reference('request_stack'))
        ->tag('validator.constraint_validator', ['alias' => 'gremo_captcha_validator_stored_captcha']);
};

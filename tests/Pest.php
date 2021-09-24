<?php

use RafaHernandez\RfcValidator\RFC;
use RafaHernandez\RfcValidator\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

test('correct format passes', function () {
    expect((new RFC())->passes('test', 'XAXX010101000'))->toBeTrue();
    expect((new RFC())->passes('test', 'XAX010101000'))->toBeTrue();
});

test('invalid format fails', function () {
    expect((new RFC())->passes('test', 'invalid-format'))->toBeFalse();
});

it('can scope by type fisica', function () {
    expect((new RFC(RFC::PERSONA_FISICA))->passes('test', 'XAXX010101000'))->toBeTrue();
    expect((new RFC(RFC::PERSONA_FISICA))->passes('test', 'XAX010101000'))->toBeFalse();
});

it('can scope by type moral', function () {
    expect((new RFC(RFC::PERSONA_MORAL))->passes('test', 'XAX010101000'))->toBeTrue();
    expect((new RFC(RFC::PERSONA_MORAL))->passes('test', 'XAXX010101000'))->toBeFalse();
});

it('returns generic message', function (){
    expect((new RFC())->message())->toBe('El RFC no tiene un formato válido.');
});

it('returns specific message', function (){
    expect((new RFC(RFC::PERSONA_MORAL))->message())->toBe('El RFC no es un formato válido para persona moral.');
});

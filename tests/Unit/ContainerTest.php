<?php

beforeEach(function () {
    $this->container = new \Core\Container();
});

test('it can resolve something out of the container', function () {

    $this->container->bind('foo', function () {
        return 'bar';
    });

    $result = $this->container->resolve('foo');

    expect($result)->toBe('bar');
});

it('throws an exception when resolving an undefined key and exact exception', function () {
    $this->expectException(Exception::class);
    $this->expectExceptionMessage("No matching binding was found for undefined_key");

    $this->container->resolve('undefined_key');
});

it('can replace a binding with a new resolver', function () {
    $this->container->bind('foo', fn() => "foo in container");
    $valueBeforeReplace = $this->container->resolve('foo');

    $this->container->bind('foo', fn() => "foo replaced with bar");
    $valueAfterReplace = $this->container->resolve('foo');

    expect($valueBeforeReplace)->toBe('foo in container')
        ->and($valueAfterReplace)->toBe('foo replaced with bar')
        ->and($valueBeforeReplace)->not->toEqual($valueAfterReplace);
});

it('can resolve multiple values from the container', function () {
    $this->container->bind('first', fn() => 'First value');
    $this->container->bind('second', fn() => 'Second value');
    $this->container->bind('third', fn() => 'Third value');

    expect($this->container->resolve('first'))->toEqual('First value');
    expect($this->container->resolve('second'))->toEqual('Second value');
    expect($this->container->resolve('third'))->toEqual('Third value');
});

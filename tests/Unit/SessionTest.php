<?php
beforeEach( function () {
    $this->session = new \Core\Session();
});

it('Session::put() saves to session', function () {
    \Core\Session::put('foo', 'bar');

    expect($_SESSION['foo'])->toBe('bar');
});

it('Session::get() resolves item from session', function () {
    \Core\Session::put('foo', 'bar');

    expect(\Core\Session::get('foo'))->toBe('bar');
});

it('Session::flash() puts something into "_flashed" session', function () {
    \Core\Session::flash('foo', 'bar');

    expect($_SESSION['_flashed']['foo'])->toBe('bar');
});

it('Session::flush() destroys or cleans all session storage', function () {
    \Core\Session::flash('foo', 'bar');
    \Core\Session::flush();
    expect($_SESSION)->toBeEmpty();
});

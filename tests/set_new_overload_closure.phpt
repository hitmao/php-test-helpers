--TEST--
set_new_overload() with a closure
--SKIPIF--
<?php 
if (!extension_loaded('test_helpers')) die('skip test_helpers extension not loaded');
?>
--FILE--
<?php
class Foo {}
class Bar {}

var_dump(set_new_overload(function ($className) { return 'Foo'; }));

var_dump(get_class(new Bar));
--EXPECT--
bool(true)
string(3) "Foo"

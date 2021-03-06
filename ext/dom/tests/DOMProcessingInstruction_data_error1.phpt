--TEST--
readonly DOMProcessingInstruction->data = 'bar'
--CREDITS--
Adam Martinson
--SKIPIF--
<?php
require_once('skipif.inc');
?>
--FILE--
<?php
$Foo = new DOMProcessingInstruction('foo');
try {
	$Foo->data = 'bar';
} catch (DOMException $Ex) {
	if ($Ex->getCode() == DOM_NO_MODIFICATION_ALLOWED_ERR) {
		echo "OK\n";
	} else {
		echo "$Ex\n";
	}
}
?>
--EXPECT--
OK

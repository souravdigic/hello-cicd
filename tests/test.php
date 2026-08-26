<?php

echo "Running tests...\n";

$expected = "Hello World";
$actual = "Hello World";

if ($actual === $expected) {
    echo "TEST PASSED\n";
    exit(0);
}

echo "TEST FAILED\n";
exit(1);
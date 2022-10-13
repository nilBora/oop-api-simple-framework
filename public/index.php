<?php

$kernel = new Kernel(
    new Route(),
    new Request()
);

$kernel->run();

$kernel->terminate();
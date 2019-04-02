<?php

require_once 'vendor/autoload.php';

use SantonioTheFirst\Structures\Queue;

$queue = new Queue();

$queue->put('Petr');
$queue->put('Ivan');

$queue->printList();
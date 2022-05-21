<?php

namespace haniev\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Ханиев Руслан Магометович') . PHP_EOL;
    echo $truncater->truncate('Ханиев Руслан Магометович', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Ханиев Руслан Магометович', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Ханиев Руслан Магометович', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Ханиев Руслан Магометович', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Ханиев Руслан Магометович', ['separator' => '*']) . PHP_EOL;
}

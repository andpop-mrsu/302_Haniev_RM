<?php

namespace haniev\Tests;
use \PHPUnit\Framework\TestCase;
use haniev\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Ханиев Руслан Магометович...', $truncater->truncate('Ханиев Руслан Магометович'));
        $this->assertSame('Ханиев Рус...', $truncater->truncate('Ханиев Руслан Магометович', ['length' => 10]));
        $this->assertSame('Ханиев Руслан Магометович...', $truncater->truncate('Ханиев Руслан Магометович', ['length' => 50]));
        $this->assertSame('Ханиев Руслан Магометович...', $truncater->truncate('Ханиев Руслан Магометович', ['length' => -10]));
        $this->assertSame('Ханиев Рус*', $truncater->truncate('Ханиев Руслан Магометович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Ханиев Руслан Магометович*', $truncater->truncate('Ханиев Руслан Магометович', ['separator' => '*']));
    }
}

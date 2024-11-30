<?php

declare(strict_types=1);

namespace F9Web\Health\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class OpCache extends Check
{
    public function run(): Result
    {
        $result = Result::make();

        if (false === $this->checkOpcacheIsRunning()) {
            return $result->failed('Opcache is not running');
        }

        return $result->ok()->shortSummary('Opcache is running');
    }

    private function checkOpcacheIsRunning(): bool
    {
        // @todo check Opcache is running
        return true;
    }
}

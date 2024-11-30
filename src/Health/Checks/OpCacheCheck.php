<?php

declare(strict_types=1);

namespace F9Web\Health\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

use function function_exists;
use function is_array;

class OpCacheCheck extends Check
{
    public function run(): Result
    {
        $this->label('OPcache');
        
        $result = Result::make();

        if (false === $this->checkOpcacheIsRunning()) {
            return $result->failed('OPcache is not running');
        }

        return $result->ok()->shortSummary('OPcache is running');
    }

    private function checkOpcacheIsRunning(): bool
    {
        if (
            !function_exists('opcache_get_status') ||
            !function_exists('opcache_get_configuration') ||
            !is_array(opcache_get_status()) ||
            !is_array(opcache_get_configuration())
        ) {
            return false;
        }

        $config = opcache_get_configuration();
        $status = opcache_get_status();

        if (
            (false === ($config['directives']['opcache.enable'] ?? false)) ||
            (false === ($status['opcache_enabled'] ?? false))
        ) {
            return false;
        }

        // sanity check - ensure scripts are being stored within memory
        if (($status['memory_usage']['used_memory'] ?? -1) < 1) {
            return false;
        }

        return true;
    }
}

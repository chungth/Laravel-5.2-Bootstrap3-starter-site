<?php
/**
 * Configuration file of PHP CS Fixer
 * setUsingCache :  speedup
 * TODO: optimize this to suite with project
 */

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude(['vendor',
                'tests/_data',
                'storage',
                'resources'])
    ->ignoreDotFiles(true)
    ->in(__DIR__);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->finder($finder)
    ->setUsingCache(true);


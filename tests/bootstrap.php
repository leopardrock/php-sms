<?php
/**
 * PHP SMS
 *
 * Licensed under the MPL v2.0
 *
 * @author    Jacques Marneweck <jacques@powertrip.co.za>
 * @copyright 2014-2016 Jacques Marneweck.  All rights strictly reserved.
 * @license   MPL
 */

require_once __DIR__.'/../vendor/autoload.php';

\VCR\VCR::configure()
    ->enableRequestMatchers(array('method', 'url', 'host'));
\VCR\VCR::turnOn();

<?php

/*
 * This file is part of the PrinceXMLPhp.
 *
 * (c) Gridonic <hello@gridonic.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PrinceXMLPhp;

require_once __DIR__.'/../../lib/prince.php';

use \Prince;

class PrinceWrapper extends Prince
{
    public function __construct($exePath = null)
    {
        $basename = 'prince';
        if (!$exePath) {
            exec('which '.$basename, $output, $returnVar);
            if ($returnVar === 0) {
                $exePath = $output[0];
            } else {
                throw new PrinceXmlException('Unable to locate '.$basename);
            }
        }

        if (!is_executable($exePath)) {
            throw new PrinceXmlException($basename.' executable is not executable');
        }

        parent::__construct($exePath);
    }
}

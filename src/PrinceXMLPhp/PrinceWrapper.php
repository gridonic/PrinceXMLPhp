<?php
/**
 * This file is part of the PrinceXMLPhp.
 *
 * (c) Gridonic <hello@gridonic.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PrinceXMLPhp;

require_once __DIR__.'/../../lib/prince.php';

use Prince;
use PrinceXMLPhp\Types\PdfProfile;

class PrinceWrapper extends Prince
{
    /**
     * Set optional optional PDF profiles, which can be selected
     * @see https://www.princexml.com/doc/pdf-profiles
     * @example $princeWrapper->setProfile(Profile::createX32002());
     * @param PdfProfile $profile
     * @return PrinceWrapper
     */
    public function setProfile(PdfProfile $profile)
    {
        parent::setProfile(sprintf('%s', $profile));

        return $this;
    }

}
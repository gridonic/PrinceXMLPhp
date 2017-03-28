<?php

namespace PrinceXMLPhp\Types;

/**
 * Class Profile
 * Type-safe type for setting the pdf-profile
 * @package PrinceXMLPhp
 */
class PdfProfile extends AbstractEnumType
{
    const A1B = 'PDF/A-1b';
    const A3B = 'PDF/A-3b';
    const X1A2001 = 'PDF/X-1a:2001';
    const X1A2003 = 'PDF/X-1a:2003';
    const X32002 = 'PDF/X-3:2002';
    const X32003 = 'PDF/X-3:2003';
    const X4 = 'PDF/X-4';

    /**
     * @inheritDoc
     */
    protected function getAllowedValues()
    {
        return [
            self::A1B,
            self::A3B,
            self::X1A2001,
            self::X1A2003,
            self::X32002,
            self::X32003,
            self::X4
        ];
    }

    /**
     * @return PdfProfile
     */
    public static function createA1B()
    {
        return new self(self::A1B);
    }

    /**
     * @return PdfProfile
     */
    public static function createA3B()
    {
        return new self(self::A3B);
    }

    /**
     * @return PdfProfile
     */
    public static function createX1A2001()
    {
        return new self(self::X1A2001);
    }

    /**
     * @return PdfProfile
     */
    public static function createX1A2003()
    {
        return new self(self::X1A2003);
    }

    /**
     * @return PdfProfile
     */
    public static function createX32002()
    {
        return new self(self::X32002);
    }

    /**
     * @return PdfProfile
     */
    public static function createX32003()
    {
        return new self(self::X32003);
    }

    /**
     * @return PdfProfile
     */
    public static function createX4()
    {
        return new self(self::X4);
    }

}
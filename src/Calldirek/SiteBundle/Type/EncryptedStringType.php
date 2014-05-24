<?php

namespace Calldirek\SiteBundle\Type;

use Doctrine\DBAL\Types\TextType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Custom Doctrine field type to encrypt/decrypt strings
 *
 * Class EncryptedStringType
 * @package Calldirek\SiteBundle\Type
 * @author Emmanuel G Piard <empi2b@gmail.com>
 */
class EncryptedStringType extends TextType
{
    const MYTYPE = 'encrypted_string';

    protected $key = "dfb06b7e103e0cd8b54763051def08bc55ffe029fdebbe5e1d417e2eeb2a00a3";


    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $key = pack('H*', $this->key);
        return mcrypt_decrypt(
            MCRYPT_RIJNDAEL_256, $key, base64_decode($value), MCRYPT_MODE_ECB, mcrypt_create_iv(
            mcrypt_get_iv_size(
                MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB
            ), MCRYPT_RAND
        ));
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        $key = pack('H*', $this->key);
        return base64_encode(mcrypt_encrypt(
            MCRYPT_RIJNDAEL_256, $key, $value, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND
        )));
    }

    public function getName()
    {
        return self::MYTYPE;
    }
} 
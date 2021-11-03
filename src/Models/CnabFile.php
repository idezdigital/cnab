<?php

namespace Idez\Cnab\Models;

use Database\Factories\CnabFileFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CnabFile extends Model
{
    use HasFactory;

    public const TYPE_REMITTANCE = 'remittance';
    public const TYPE_RETURN = 'return';
    public const TYPE_UNKNOWN = 'unknown';

    public const TYPES = [
        self::TYPE_REMITTANCE,
        self::TYPE_RETURN,
        self::TYPE_UNKNOWN,
    ];

    public const STATUS_NEW = 'new';
    public const STATUS_PENDING = 'pending';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_CANCELED = 'canceled';
    public const STATUS_FAILED = 'failed';

    public const STATUS = [
        self::STATUS_NEW,
        self::STATUS_PENDING,
        self::STATUS_COMPLETED,
        self::STATUS_CANCELED,
        self::STATUS_FAILED,
    ];

    public const LAYOUT_240 = 240;
    public const LAYOUT_400 = 400;

    public const LAYOUTS = [
        self::LAYOUT_240,
        self::LAYOUT_400,
    ];

    public const EXT_REMITTANCE = 'rem';
    public const EXT_RETURN = 'ret';
    public const EXT_REMITTANCE_TEST = 'tst';
    public const EXT_RETURN_TEST = 'rst';

    public const EXTENSIONS = [
        self::EXT_REMITTANCE,
        self::EXT_RETURN,
        self::EXT_REMITTANCE_TEST,
        self::EXT_RETURN_TEST,
    ];

    protected static function newFactory()
    {
        return CnabFileFactory::new();
    }
}

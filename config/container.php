<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Container Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور container — همهٔ کلیدهای مستندشده در `docs/03-engines/container.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/container.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('CONTAINER_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('CONTAINER_PREFIX', 'container:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('CONTAINER_LOG_CHANNEL', 'container'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];
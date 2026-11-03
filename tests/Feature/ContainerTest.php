<?php

declare(strict_types=1);

namespace Tavaan\Engine\Container\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Container\Container;
use Tavaan\Engine\Container\ContainerServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Container.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class ContainerTest extends TestCase
{
    private Container $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Container($config);
    }

    /**
     * T-01: Singleton دو بار make → یک نمونه
     */
    public function test_t01_singleton___make___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: Transient دو بار → دو نمونه
     */
    public function test_t02_transient_____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: Auto-wire ۵ سطح تو‌در‌تو
     */
    public function test_t03_autowire___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: چرخه A→B→A
     */
    public function test_t04__aba(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: Union `(A&B)\
     */
    public function test_t05_union_ab(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: پارامتر با default و بدون type + `strict.allow_untyped=false`
     */
    public function test_t06___default___type(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: Contextual برای دو مصرف‌کننده
     */
    public function test_t07_contextual___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: `tagged()` lazy (بدون make تا iterate)
     */
    public function test_t08_tagged_lazy__make__itera(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: `extend()` دو بار → زنجیرهٔ decorator
     */
    public function test_t09_extend_____decorato(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-10: `flushScoped()` → singleton باقی، scoped حذف
     */
    public function test_t10_flush_scoped__singleton__sc(): void
    {
        // TODO: پیاده‌سازی سناریوی T-10 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-10 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-11: Variadic parameter
     */
    public function test_t11_variadic_parameter(): void
    {
        // TODO: پیاده‌سازی سناریوی T-11 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-11 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-12: Promoted readonly property
     */
    public function test_t12_promoted_readonly_property(): void
    {
        // TODO: پیاده‌سازی سناریوی T-12 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-12 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-13: Enum injection با default
     */
    public function test_t13_enum_injection__default(): void
    {
        // TODO: پیاده‌سازی سناریوی T-13 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-13 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-14: `call()` روی static method
     */
    public function test_t14_call__static_method(): void
    {
        // TODO: پیاده‌سازی سناریوی T-14 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-14 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-15: Reflection Cache dump/load → نتیجه یکسان
     */
    public function test_t15_reflection_cache_dumpload__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-15 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-15 هنوز پیاده‌سازی نشده است.');
    }

}
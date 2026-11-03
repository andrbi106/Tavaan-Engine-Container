# Tavaan Engine — Container

> **ظرف سرویس (DI)** — موتور Container در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.container` |
| نام | `Container` |
| عنوان فارسی | ظرف سرویس (DI) |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Container` |
| نوع | `engine` |
| Facade | `App` (accessor: `app`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Container\Contracts\ContainerInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Container\Exceptions\AmbiguousUnionException`
- `Tavaan\Engine\Container\Exceptions\BindingResolutionException`
- `Tavaan\Engine\Container\Exceptions\CircularDependencyException`
- `Tavaan\Engine\Container\Exceptions\NotInstantiableException`
- `Tavaan\Engine\Container\Exceptions\ScopeNotActiveException`
- `Tavaan\Engine\Container\Exceptions\UntypedParameterException`

## کلاس‌های اصلی

- `src/Binding.php`
- `src/Console/ContainerGraphCommand.php`
- `src/ConstructorSignature.php`
- `src/Container.php`
- `src/ContainerServiceProvider.php`
- `src/ContainerStats.php`
- `src/ContextualBindingBuilder.php`
- `src/LazyProxy.php`
- `src/Lifetime.php`
- `src/ParameterSignature.php`
- `src/ReflectionCache.php`
- `src/ScopeManager.php`

## Service Providerها

- `Tavaan\Engine\Container\ContainerServiceProvider`

## دستورات CLI

- `container:graph`

## پیکربندی

- فایل پیکربندی: `config/container.php`
- کلید: `container`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Container.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Container`** (این مخزن) | موتور Container |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.

# Pattern Singleton

## Установка

```
composer require codememory/singleton
```

## Использование

```php
<?php

use Codememory\Patterns\Singleton\SingletonTrait;

require_once 'vendor/autoload.php';

// Создаем класс, который будет использовать singleton
class ClassWithSingleton
{

    // Подключаем singleton и можно использовать
    use SingletonTrait;
    
    private int $number = 0;
    
    public function setNumber(int $number): void
    {
    
        $this->number = $number;
    
    }
    
    public function getNumber(): int
    {
    
        return $this->number;
    
    }

}

ClassWithSingleton::getInstance()->setNumber(10);

echo ClassWithSingleton::getInstance()->getNumber(); // 10
```
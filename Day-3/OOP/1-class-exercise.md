### 1. Declaring a Class
A class is a blueprint for creating objects (a particular data structure), defining its properties and methods.

```php
class Car {
    // Properties and methods go here
}
```

### 2. Instantiating an Object
Creating an instance of a class.

```php
$myCar = new Car();
```

### 3. Properties
Variables inside a class are called properties. They represent the state of an object.

```php
class Car {
    public $color;
    private $model;
}
```

### 4. Methods
Functions inside a class are called methods. They define the behavior of an object.

```php
class Car {
    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}
```

### 5. Static Properties and Methods
Static properties/methods belong to the class itself, not to any specific object.

```php
class Car {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}
```

### 6. Class Constants
Constants are similar to properties, but as the name suggests, their value cannot be changed after they are set.

```php
class Car {
    const WHEELS = 4;
}
echo Car::WHEELS;
```

### 7. Constructors and Destructors
A constructor is a special method called when a new instance of a class is created. A destructor is called when the object is destroyed.

```php
class Car {
    public function __construct() {
        echo "The Car is being created.";
    }

    public function __destruct() {
        echo "The Car is being destroyed.";
    }
}
```

### Example Usage:
```php
$myCar = new Car();
$myCar->setModel("Tesla Model S");
echo $myCar->getModel(); // Outputs: Tesla Model S

Car::$count++;
echo Car::getCount(); // Outputs: 1 (or more depending on instantiation)
```
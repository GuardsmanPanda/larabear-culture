# Larabear Culture

Bear Facts About The World.
***
## Installation

You can install the package via composer:

### Step 1
```bash
composer require guardsmanpanda/larabear-culture
```

### Step 2
Publish the vendor data (Flags)
```bash
php artisan vendor:publish --tag=bear-locale --force
```

### Step 3
Run the migrations
```bash
php artisan migrate
```

### Step 4
Run the migrations in production once.

### Step 5
You can now safely uninstall the package, you only need to install it again, and repeat these steps, in case of a new release.
```bash
composer remove guardsmanpanda/larabear-culture
```
***
## Security
If you discover any security related issues, please email guardsmanpanda@gmail.com instead of using the issue tracker.
***
## Credits
-   [Bjørn Dons](https://github.com/guardsmanpanda)
***
## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits
- [Lipis](https://github.com/lipis/flag-icons) for providing a great flag icon repository.

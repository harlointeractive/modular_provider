
## Composer Require
Nice and simple

    "harlo/modular-cm": "dev-master"

### Linking The Service Provider To Your Installation
Add this string to your array of providers in app/config/app.php

    Harlo\ModularCM\ModularCMServiceProvider

### Publishing The Configuration
Publish the configurations for this package in order to change them to your liking:

    php artisan config:publish harlo/modular-cm

### Publishing The Assets
You need assets bro!

    php artisan asset:publish harlo/modular-cm

### Migrations
Migration is pretty simple, ensure your database config is setup and run this:

    php artisan migrate --package="harlo/modular-cm"

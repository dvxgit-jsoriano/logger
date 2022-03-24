# Flex Optimal Laravel Logger

This is a Flexible Optimized Logger for Laravel Apps which you can change and configure your log path, centralize all your application logs into one path, organize by year month and date filename. \

Ex. `/var/logs/your-app/202203/20220324_app.txt` OR `C:\logs\your-app\202203\20220324_app.txt`

## How to use the package

- To install the package:

`composer require dvxgit-jsoriano/logger`

- To publish the package:

`php artisan vendor:publish --tag=logger-config`

- To use the package:

```php
// GET CONFIG FROM jsoriano-logger configuration
Logger::configure();
// SET YOUR OWN CONFIG PATH
Logger::configure('/var/logs/your-app/');
// SET YOUR OWN CONFIG PATH, NAME, EXT
Logger::configure('/var/logs/your-app/', '_app', '.txt');

// CALL LOG AFTER CONFIGURE, YOU CAN ALSO PASS (OPTIONAL) PAYLOAD
Logger::log("Testing 123!", ["key"=>"value"]);
```

## Troubleshoot

- Sometimes you will need to allow write permission to the folder path where you wanted your logs to be placed.

`chmod 755 /var/log/`

## Developer

**Jerome Soriano** says thank you for the coffee!

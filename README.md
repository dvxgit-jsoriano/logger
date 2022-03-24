# Flex Optimal Logger

This is a Flexible Optimized Logger which you can configure the path, centralize all your application logs, organize by year month and date filename.

## How to use the package

- To install the package:

`composer require dvxgit-jsoriano/logger`

- To use the package:

```
// GET CONFIG FROM jsoriano-logger configuration
Logger::configure();
// SET YOUR OWN CONFIG PATH
Logger::configure('/var/log/your-app/');
// SET YOUR OWN CONFIG PATH, NAME, EXT
Logger::configure('/var/log/your-app/', '_app', '.txt');

// CALL LOG AFTER CONFIGURE, PASS PAYLOAD
Logger::log("Testing 123!", ["key"=>"value"]);
```

## Troubleshoot

- Sometimes you will need to allow write permission to the folder path where you wanted your logs to be placed.

`chmod 755 /your/folder/path/`

## Developer

** Jerome Soriano **
Thank you for the coffee!

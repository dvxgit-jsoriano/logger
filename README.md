# Flex Optimal Logger

This is a Flexible Optimized Logger which you can configure the path, centralize all your application logs, organize by year month and date filename.

## How to use the package

- To install the package:

`composer require dvxgit-jsoriano/logger`

- To use the package:

```
$logger = new Logger('/var/log/your-app/');
$logger->log("This is a test log!", ["key"=>"value"]);
```

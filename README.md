<p align="center">
  <h1 align="center">Appium Codeception Starter</h1>
  <p align="center">Simple and easy to use boilerplate for writing tests for mobile or web.</p>
  <p align="center">
    <a href="LICENSE.md">
    <img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License">
    </a>
  </p>
</p>

## Requirements

1. PHP >= 7.0

## Installation

You can install this `appium-codeception-boilerplate` using the following methods:

### Cloning the repo

Run the following command to configure the boilerplate on your machine:

```bash
git clone git@github.com:me-io/appium-codeception-starter.git
```

### Via composer create-project

Alternatively, you may also install `appium-codeception-starter` by issuing the Composer create-project command in your 
terminal:

```bash
composer create-project --prefer-dist me-io/appium-codeception-starter
```

### Running Example Tests

Run the appium server by running the following command:

```bash
./vendor/bin/codecept -c _example_tests_codeception.yml run --steps
```

## License

The code is available under the [MIT license](LICENSE.md).
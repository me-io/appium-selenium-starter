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

## Running Example Tests

You can find the android and ios example tests inside `_example_tests` directory. We also put some example android
and ios apps inside `_example_tests/_data/test-apps` directory.

### Android Tests

You need to configure your enviorment for android testing. Just run the following command inside your terminal 
it will configure your enviorment.

```bash
./vendor/bin/appium.sh configure
```

For running android emulator we are using genymotion. Follow this [guide](https://shankargarg.wordpress.com/2016/02/25/setup-genymotion-android-emulators-on-mac-os/) 
if you don't know how to install and run android emulator.After setting up android emulator now you need to 
update the `deviceName` inside `_example_tests/android.suite.yml` file.

![Imgur](https://i.imgur.com/znQkuLq.png)

### Staring Appium Server

Now inside your terminal run the following command:

```bash
./vendor/bin/appium.sh start
```

### Running Tests

To run the android tests run the following codecept command inside your terminal:

```bash
./vendor/bin/codecept -c _example_tests_codeception.yml run android --steps
```

![Android](https://i.imgur.com/PdqDRFa.gif)

> **Note:** Make sure appium server is running before running the android tests.

### iOS Tests

Just like we did earlier first we need to configure our machine before running iOS tests. To configure your 
machine just run the following command inside your terminal and you are ready to go:

```bash
./vendor/bin/appium.sh configure
```

### Staring Appium Server

Now inside your terminal run the following command:

```bash
./vendor/bin/appium.sh start
```

### Running Tests

To run the ios tests run the following codecept command inside your terminal:

```bash
./vendor/bin/codecept -c _example_tests_codeception.yml run ios --steps
```

![iOS](https://i.imgur.com/Au45fXv.gif)

## License

The code is available under the [MIT license](LICENSE.md).
<h1 align="center">
  Appium Selenium Starter 
</h1>
<p align="center" style="font-size: 1.2rem;">Simple and easy to use boilerplate for writing tests for mobile or web.</p>

<hr />

[![Build Status][build-badge]][build]
[![downloads][downloads-badge]][downloads]
[![MIT License][license-badge]][license]

[![All Contributors](https://img.shields.io/badge/all_contributors-2-orange.svg?style=flat-square)](#contributors)
[![PRs Welcome][prs-badge]][prs] 
[![Code of Conduct][coc-badge]][coc]
[![Watch on GitHub][github-watch-badge]][github-watch]
[![Star on GitHub][github-star-badge]][github-star]
[![Tweet][twitter-badge]][twitter]

## Requirements

1. PHP >= 7.0
2. Appium - For Mobile Testing
3. Selenium - For Web application testing

## Installation

You can install this `appium-selenium-starter` using the following methods:

### Cloning the repo

Run the following command to configure the boilerplate on your machine:

```bash
git clone git@github.com:me-io/appium-selenium-starter.git
```

### Via composer create-project

Alternatively, you may also install `appium-selenium-starter` by issuing the Composer create-project command in your 
terminal:

```bash
composer create-project --prefer-dist me-io/appium-selenium-starter
```

## Installing Dependencies

Now run the following command to install required dependencies:

```bash
composer install
```

## Configuring Environment

There are two cli applications included in starter. To view a list of all commands in these cli applications inside your terminal run the following commands one by one:

```bash
composer run appium
composer run selenium
```

### Appium

Lets configure your environment for running mobile application testing. Open your terminal and run the following command:

```bash
composer run appium configure
```

### Selenium

To configure your environment for running selenium server run the below command:

```bash
composer run selenium configure
```

## Running Example Tests

> **Note:** For running example tests you need to have installed and configured the android emulator or iOS simulator on your machine.

Before running the mobile tests we need to start the appium server. To start appium server run the following command inside your terminal:

```bash
composer run appium start
```

We need to move everything from `example` directory to the root folder of the project. Run the following command inside your terminal:

```bash
mv example/* .
```

You can find the android and ios example tests inside `/tests` directory. We also put some example apps for android and ios inside `/tests/_data/test-apps` directory.

## Android Tests

For running android emulator we are using genymotion. Follow this [guide](https://shankargarg.wordpress.com/2016/02/25/setup-genymotion-android-emulators-on-mac-os/) 
if you do not know how to install and run android emulator. You also need to install the application that you want to test inside android emulator.

### Update Suite

Now you need to update the `android.suite.yml` you can find this filw inside `tests` directory. And also update the `deviceName` to your android emulator device name. If you have genymotion installed you can find the device name from the devices list.

![Imgur](https://i.imgur.com/znQkuLq.png)

### Running Tests

To run the android tests run the following codecept command inside your terminal:

```bash
./vendor/bin/codecept -c example/codeception.yml run android --steps
```

![Android](https://i.imgur.com/PdqDRFa.gif)

> **Note:** Make sure appium server is running before running the android tests.

## iOS Tests

First you need to run the appium server than you need to start the iOS simulator. Use the following if you do not know how to run iOS sumulator http://www.macinstruct.com/node/494.

### Update Suite

Now you need to update the `ios.suite.yml` you can find this file inside `tests` directory. Open `ios.suite.yml` file and update `xcodeOrgId` and `udid` to your running simulator `identifier` string. You can find your `identifier` string by opening the simulator then `Hardware > Device > Manage Devices > Simulators`. You will find a list of iOS devices now open the device that you are running and after clicking on the device name you will find the `identifier` string.

![](https://dr5mo5s7lqrtc.cloudfront.net/items/052N1f2U0R3r161C2A32/%5B78ae106f1ef8f1f71bcdefd4dbc5e221%5D_Image+2018-02-14+at+6.18.02+PM.png?X-CloudApp-Visitor-Id=2960388&v=029ae989)

### Running Tests

To run the ios tests run the following codecept command inside your terminal:

```bash
./vendor/bin/codecept -c example/codeception.yml run ios --steps
```

![iOS](https://i.imgur.com/Au45fXv.gif)

## Contributors

A huge thanks to all of our contributors:

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore -->
| [<img src="https://avatars0.githubusercontent.com/u/45731?v=3" width="100px;"/><br /><sub><b>Mohamed Meabed</b></sub>](https://github.com/Meabed)<br />[💻](https://github.com/me-io/appium-selenium-starter/commits?author=Meabed "Code") [📢](#talk-Meabed "Talks") | [<img src="https://avatars2.githubusercontent.com/u/16267321?v=3" width="100px;"/><br /><sub><b>Zeeshan Ahmad</b></sub>](https://github.com/zeeshanu)<br />[💻](https://github.com/me-io/appium-selenium-starter/commits?author=zeeshanu "Code") [🐛](https://github.com/me-io/appium-selenium-starter/issues?q=author%3Azeeshanu "Bug reports") [⚠️](https://github.com/me-io/appium-selenium-starter/commits?author=zeeshanu "Tests") [📖](https://github.com/me-io/appium-selenium-starter/commits?author=zeeshanu "Documentation") |
| :---: | :---: |
<!-- ALL-CONTRIBUTORS-LIST:END -->

## License

The code is available under the [MIT license](LICENSE.md).

[build-badge]: https://img.shields.io/travis/me-io/appium-selenium-starter.svg?style=flat-square
[build]: https://travis-ci.org/me-io/appium-selenium-starter
[downloads-badge]: https://img.shields.io/packagist/dm/me-io/appium-selenium-starter.svg?style=flat-square
[downloads]: https://packagist.org/packages/me-io/appium-selenium-starter/stats
[license-badge]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[license]: https://github.com/me-io/appium-selenium-starter/blob/master/LICENSE.md
[prs-badge]: https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square
[prs]: http://makeapullrequest.com
[coc-badge]: https://img.shields.io/badge/code%20of-conduct-ff69b4.svg?style=flat-square
[coc]: https://github.com/me-io/appium-selenium-starter/blob/master/CODE_OF_CONDUCT.md
[github-watch-badge]: https://img.shields.io/github/watchers/me-io/appium-selenium-starter.svg?style=social
[github-watch]: https://github.com/me-io/appium-selenium-starter/watchers
[github-star-badge]: https://img.shields.io/github/stars/me-io/appium-selenium-starter.svg?style=social
[github-star]: https://github.com/me-io/appium-selenium-starter/stargazers
[twitter]: https://twitter.com/intent/tweet?text=Check%20out%20appium-selenium-starter!%20https://github.com/me-io/appium-selenium-starter%20%F0%9F%91%8D
[twitter-badge]: https://img.shields.io/twitter/url/https/github.com/me-io/appium-selenium-starter.svg?style=social
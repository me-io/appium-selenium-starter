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

## Running Example Tests

You can find the android and ios example tests inside `/example/tests` directory. We also put some example android
and ios apps inside `example/tests/_data/test-apps` directory.

### Android Tests

You need to configure your environment for android testing. Just run the following command inside your terminal 
it will configure your environment.

```bash
./vendor/bin/appium.sh configure
```

For running android emulator we are using genymotion. Follow this [guide](https://shankargarg.wordpress.com/2016/02/25/setup-genymotion-android-emulators-on-mac-os/) 
if you don't know how to install and run android emulator.After setting up android emulator now you need to 
update the `deviceName` inside `example/tests/android.suite.yml` file.

![Imgur](https://i.imgur.com/znQkuLq.png)

### Staring Appium Server

Now inside your terminal run the following command:

```bash
./vendor/bin/appium.sh start
```

### Running Tests

To run the android tests run the following codecept command inside your terminal:

```bash
./vendor/bin/codecept -c example/codeception.yml run android --steps
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
[coc]: https://github.com/me-io/selenium-appium-server/blob/master/CODE_OF_CONDUCT.md
[github-watch-badge]: https://img.shields.io/github/watchers/me-io/appium-selenium-starter.svg?style=social
[github-watch]: https://github.com/me-io/appium-selenium-starter/watchers
[github-star-badge]: https://img.shields.io/github/stars/me-io/appium-selenium-starter.svg?style=social
[github-star]: https://github.com/me-io/appium-selenium-starter/stargazers
[twitter]: https://twitter.com/intent/tweet?text=Check%20out%20appium-selenium-starter!%20https://github.com/me-io/appium-selenium-starter%20%F0%9F%91%8D
[twitter-badge]: https://img.shields.io/twitter/url/https/github.com/me-io/appium-selenium-starter.svg?style=social
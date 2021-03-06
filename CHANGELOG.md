# Change Log

All notable changes to this project will be documented in this file.

This projects adheres to [Semantic Versioning](http://semver.org/) and [Keep a CHANGELOG](http://keepachangelog.com/).

## [Unreleased][unreleased]
-

## [1.3.0] - 2016-10-20
- Improved error reporting.

## [1.2.9] - 2016-06-08
- Simplified the gateay payment start function.

## [1.2.8] - 2016-04-12
- No longer use camelCase for payment data.

## [1.2.7] - 2016-03-22
- Added product and dashboard URLs and get_settings().
- Fixed fatal error 'Call to undefined method Pronamic_WP_Pay_Gateways_MultiSafepay_Config::get_gateway_class()'.

## [1.2.6] - 2016-03-02
- Moved get_gateway_class() function to the configuration class.
- Removed get_config_class(), no longer required.

## [1.2.5] - 2016-02-05
- Improved unit tests.

## [1.2.4] - 2016-02-01
- Added an gateway settings class.

## [1.2.3] - 2015-10-14
- Add support for bank transfer as payment method.

## [1.2.2] - 2015-08-04
- Make sure to use the wp-pay/core functions.

## [1.2.1] - 2015-05-08
- Fix fatal error due to undefined var $result.

## [1.2.0] - 2015-05-06
- Added support for direct transaction request for iDEAL.

## [1.1.1] - 2015-03-26
- Updated WordPress pay core library to version 1.1.1.
- If payment description is empty the payment ID is used.

## [1.1.0] - 2015-02-27
- Updated WordPress pay core library to version 1.1.0.
- Updated WordPress pay MultiSafepay library to version 1.1.0.
- Fixed isues with filter_input INPUT_SERVER (https://bugs.php.net/bug.php?id=49184).

## 1.0.0 - 2015-01-19
- First release.

[unreleased]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.3.0...HEAD
[1.3.0]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.9...1.3.0
[1.2.9]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.8...1.2.9
[1.2.8]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.7...1.2.8
[1.2.7]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.6...1.2.7
[1.2.6]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.5...1.2.6
[1.2.5]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.4...1.2.5
[1.2.4]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.3...1.2.4
[1.2.3]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.2...1.2.3
[1.2.2]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.1...1.2.2
[1.2.1]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.2.0...1.2.1
[1.2.0]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.1.1...1.2.0
[1.1.1]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.1.0...1.1.1
[1.1.0]: https://github.com/wp-pay-gateways/multisafepay-connect/compare/1.0.0...1.1.0

<div align="center">

![Magento 2 Product Attachment](https://i.imgur.com/d8QEHRb.png)
# Magento 2 Product Attachment

</div>

<div align="center">

[![Packagist Version](https://img.shields.io/packagist/v/magepsycho/magento2-product-pdf-file-attachment?style=for-the-badge)](https://packagist.org/packages/magepsycho/magento2-product-pdf-file-attachment)
[![Packagist Version](https://img.shields.io/packagist/dt/magepsycho/magento2-product-pdf-file-attachment.svg?style=for-the-badge)](https://packagist.org/packages/magepsycho/magento2-product-pdf-file-attachment/stats)
![Supported Magento Versions](https://img.shields.io/badge/magento-%202.3_|_2.4-brightgreen.svg?logo=magento&longCache=true&style=for-the-badge)
![License](https://img.shields.io/github/license/magepsycho/magento2-product-pdf-file-attachment?color=%23234&style=for-the-badge)

</div>

## Overview
[Magento 2 Product Attachment](https://www.magepsycho.com/magento2-product-pdf-file-attachment.html) extension allows attaching additional information such as manuals, warranty, recipes, etc. in different formats (`pdf`, `doc`, `jpg`, `zip`, etc.) to the product page.

## Key Features
* Option to enable/disable the extension as per store
* Option to attach different types of files (`pdf`, `doc`, `jpg`, `zip`, etc.)
* Option to configure attachment labels

## Feature Highlights

### Product Attachment
With this extension, store admin can attach/upload different file types to provide additional information about the product.  
And user can view and download the attachment from the tab of the product page.

![M2 Product Attachment - Product Edit Page](https://www.magepsycho.com/media/catalog/product/4/0/40-m2-product-attachment-admin-product-edit.png)

![M2 Product Attachment - Product Storefront Page](https://www.magepsycho.com/media/catalog/product/5/0/50-1-m2-product-attachment-frontend-product.png)

## Installation
1. Download the extension .zip file and extract the files.
1. Copy the extension files from src/ folder to the {your-magento2-root-dir}/app/code/MagePsycho/ProductAttachment *(create non-existing folders manually)*
1. Run the following series of command from SSH console of your server:
```
php bin/magento module:enable MagePsycho_ProductAttachment --clear-static-content
php bin/magento setup:upgrade
```
1. Flush the store cache
```
php bin/magento cache:flush
```
1. Deploy static content - *in Production mode only*
```
rm -rf pub/static/* var/view_preprocessed/*
php bin/magento setup:static-content:deploy
```
1. Go to Admin > CATALOG > Product Attachment > Manage Settings

## Live Demo:

* [Backend Demo](http://m2default.mage-expo.com/admin_m2demo/?module=productattachment)
* [Frontend Demo](http://m2default.mage-expo.com/dual-handle-cardio-ball.html)

## Changelog

**Version 1.0.0 (2022-01-16)**

* Initial Release.

## Authors

- Raj KB [Maintainer] [![Twitter Follow](https://img.shields.io/twitter/follow/rajkbnp.svg?style=social)](https://twitter.com/rajkbnp)
- `{{this could be you}}` (see "Contribution" section)

## Need Support?
If you encounter any problems or bugs, please create an issue on [GitHub](https://github.com/MagePsycho/magento2-product-pdf-file-attachment/issues).

Please [visit our store](https://www.magepsycho.com/extensions/magento-2.html) for more FREE / paid extensions OR [contact us](https://magepsycho.com/contact) for customization / development services.

## Contribution
Any contribution to the development of `Magento 2 Product Attachment` is highly welcome.  
The best possibility to provide any code is to open a [pull request on GitHub](https://github.com/MagePsycho/magento2-product-discount-label/pulls).

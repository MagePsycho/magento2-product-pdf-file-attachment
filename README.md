## Overview:
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

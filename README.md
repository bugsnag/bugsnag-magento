Bugsnag Notifier for Magento
==

The Bugsnag Notifier for Magento gives you instant notification of errors in
your Magento applications.

[Bugsnag](https://www.bugsnag.com/) captures errors in real-time from your web, mobile and
desktop applications, helping you to understand and resolve them as fast as
possible. [Create a free account](https://www.bugsnag.com/) to start capturing errors from
your applications.

The Bugsnag Notifier for Magento supports Magento CE 1.9.0.1+ and PHP 5.2+. It
may work on older versions of Magento, but it's untested.

You can always read about the plugin or download it from Magento Connect.

Learn more about [monitoring and reporting Magento errors](https://www.bugsnag.com/platforms/php/magento/) with Bugsnag.

Installation
--

### Magento Connect (recommended way)

1. Visit [the module's page on Magento Connect](http://www.magentocommerce.com/magento-connect/catalog/product/view/id/24935/s/bugsnag-notifier/)
1. Press "Install Now" and and follow the instructions.

### Modman

```
cd <your-magento-project>
modman init
modman clone https://github.com/bugsnag/bugsnag-magento.git
```

### Composer

```
{
  "require": {
    "magento/core": "1.9.0.1",
    "bugsnag/bugsnag-magento": "dev-master",
    "magento-hackathon/magento-composer-installer": "*"
  },
  "repositories": [
    {
      "type": "composer",
      "url": "http://packages.firegento.com"
    }
  ],
  "extra":{
    "magento-root-dir": "htdocs/"
  }
}
```

### Manual

```
git clone https://github.com/bugsnag/bugsnag-magento.git
cp -R bugsnag-magento/src/* <your-magento-project>
```

Configuration
--

In your Magento admin panel go to System → Configuration → Advanced → Developer
and find the Bugsnag entry. If you don't see the entry, just press `Save Config`:
the command would refresh the cache and pick up Bugsnag.

![](/screenshot.png)

If the orange button "Fire Test Event" is not visible, then go to System →
Configuration → Developer → Template Settings and set `Allow Symlinks` to `Yes`.
You can safely set it back to `No` if you don't need the button or if you worry
about the potential security risks (the plugin will keep working).

To do
--

* Magento 2 introduces a lot of
[exciting changes](https://wiki.magento.com/display/MAGE2DOC/Module+Dependency+Declarations). Currently,
we do not support them

Bugsnag Notifier for Magento
==

The Bugsnag Notifier for Magento gives you instant notification of errors in
your Magento applications.

[Bugsnag](bugsnag.com) captures errors in real-time from your web, mobile and
desktop applications, helping you to understand and resolve them as fast as
possible. [Create a free account](bugsnag.com) to start capturing errors from
your applications.

The Bugsnag Notifier for Magento supports Magento CE 1.9.0.1+ and PHP 5.2+. It
may work on older versions of Magento, but it's untested.

You can always read about the plugin or download it from Magento Connect.

Installation
--

### Magento Connect (recommended way)

TBA.

### Modman

```
cd <your-magento-project>
modman init
modman clone https://github.com/bugsnag/bugsnag-magento.git
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

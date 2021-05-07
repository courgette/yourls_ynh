# YOURLS for YunoHost

[![Integration level](https://dash.yunohost.org/integration/yourls.svg)](https://dash.yunohost.org/appci/app/yourls) ![](https://ci-apps.yunohost.org/ci/badges/yourls.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/yourls.maintain.svg)  
[![Install YOURLS with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=yourls)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install YOURLS quickly and simply on a YunoHost server.  
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview
YOURLS stands for Your Own URL Shortener. It is a small set of PHP scripts that will allow you to run your own URL shortening service (a la TinyURL or bitly).

**Shipped version:** 1.8.1

## Screenshots

![](https://yourls.org/images/stats-anim.gif)

## Demo

* [Official demo](https://yourls.org/cookie+)

## Configuration

How to configure this app: From an admin panel, a plain file with SSH, or any other way.

## Documentation

 * Official documentation: Link to the official documentation of this app
 * YunoHost documentation: If specific documentation is needed, feel free to contribute.

## YunoHost specific features

#### Multi-user support

 * Are LDAP and HTTP auth supported?
 * Can the app be used by multiple users?

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/yourls%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/yourls/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/yourls%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/yourls/)

## Limitations

* Any known limitations.

## Additional information

* Other info you would like to add about this app.

## Links

 * Report a bug: https://github.com/YunoHost-Apps/yourls_ynh/issues
 * App website: https://yourls.org/
 * Upstream app repository: https://github.com/YOURLS/YOURLS
 * YunoHost website: https://yunohost.org/

---

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/yourls_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/yourls_ynh/tree/testing --debug
or
sudo yunohost app upgrade yourls -u https://github.com/YunoHost-Apps/yourls_ynh/tree/testing --debug
```

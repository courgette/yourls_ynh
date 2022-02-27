# Yourls pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/yourls.svg)](https://dash.yunohost.org/appci/app/yourls) ![](https://ci-apps.yunohost.org/ci/badges/yourls.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/yourls.maintain.svg)  
[![Installer Yourls avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=yourls)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer Yourls rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

YOURLS stands for Your Own URL Shortener. It is a small set of PHP scripts that will allow you to run your own URL shortening service (a la TinyURL or bitly).

### YOURLS Features

- Free and open-source software,
- Private (your links only) or Public (everybody can create short links, fine for an intranet),
- Terrific Plugin architecture and dozens of plugins to easily implement new features,
- Handy bookmarklets to easily shorten and share links,
- Awesome stats: historical click reports, referrers tracking, visitors geo-location,
- Developer API to integrate YOURLS into other applications,
- Sample files to create your own public interface and more !


**Version incluse :** 1.8.2~ynh1

**Démo :** https://yourls.org/cookie+

## Captures d'écran

![](./doc/screenshots/p4.png)

## Documentations et ressources

* Site officiel de l'app : https://yourls.org/
* Documentation officielle de l'admin : https://github.com/YOURLS/YOURLS/wiki
* Dépôt de code officiel de l'app : https://github.com/YOURLS/YOURLS
* Documentation YunoHost pour cette app : https://yunohost.org/app_yourls
* Signaler un bug : https://github.com/YunoHost-Apps/yourls_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/yourls_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/yourls_ynh/tree/testing --debug
ou
sudo yunohost app upgrade yourls -u https://github.com/YunoHost-Apps/yourls_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps
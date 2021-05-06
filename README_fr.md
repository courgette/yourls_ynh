# YOURLS pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/yourls.svg)](https://dash.yunohost.org/appci/app/yourls) ![](https://ci-apps.yunohost.org/ci/badges/yourls.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/yourls.maintain.svg)  
[![Installer YOURLS avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=yourls)

*[Read this readme in english.](./README.md)* 

> *Ce package vous permet d'installer YOURLS rapidement et simplement sur un serveur YunoHost.  
Si vous n'avez pas YunoHost, consultez [le guide](https://yunohost.org/#/install) pour apprendre comment l'installer.*

## Vue d'ensemble
YOURLS signifie Your Own URL Shortener. C'est un petit ensemble de scripts PHP qui vous permettront d'exécuter votre propre service de raccourcissement d'URL (à la TinyURL ou bitly).

**Version incluse :** 1.8.1

## Captures d'écran

![](https://yourls.org/images/stats-anim.gif)

## Démo

* [Official demo](https://yourls.org/cookie+)

## Configuration

How to configure this app: From an admin panel, a plain file with SSH, or any other way.

## Documentation

 * Documentation officielle : Lien vers la documentation officielle de cette application.
 * Documentation YunoHost : Si une documentation spécifique est nécessaire, n'hésitez pas à contribuer.

## Caractéristiques spécifiques YunoHost

#### Support multi-utilisateur

* L'authentification LDAP et HTTP est-elle prise en charge ?
* L'application peut-elle être utilisée par plusieurs utilisateurs ?

#### Architectures supportées

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/yourls%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/yourls/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/yourls%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/yourls/)

## Limitations

* Limitations connues.

## Informations additionnelles

* Autres informations que vous souhaitez ajouter sur cette application.

## Links

 * Signaler un bug : https://github.com/YunoHost-Apps/yourls_ynh/issues
 * Site de l'application : https://yourls.org/
 * Dépôt de l'application principale : https://github.com/YOURLS/YOURLS
 * Site web YunoHost : https://yunohost.org/

---

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/yourls_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/yourls_ynh/tree/testing --debug
or
sudo yunohost app upgrade yourls -u https://github.com/YunoHost-Apps/yourls_ynh/tree/testing --debug
```



# Central Authentication Service (CAS)


* Librairie [phpCAS](https://github.com/apereo/phpCAS) - phpCAS sur github

### Tech

* [html5]
* [Dillinger] - fichier MARKDOWN
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [jQuery]



## Installation

Pour une utilisation avec MAMP (mac osx)
Valable également pour tout autre environnement de dev.

### ÉTAPE 1

>Pour permettre à votre application de dialoguer avec LDAP il vous faut au préalable
>modifier le fichier hosts `etc/hosts` de votre machine de dev.
>Modifiez ou remplacez localhost par `nomDeVotreApp.dauphine.fr` le `.dauphine.fr` est important !!!


exemple :

```sh
127.0.0.1	  localhost
127.0.0.1 	nomDeVotreApp.dauphine.fr
```

255.255.255.255	broadcasthost
::1             localhost

### ÉTAPE 2

>/Applications/MAMP/conf/apache
>Dans le fichier de conf apache `httpd.conf` désactivez la ligne :

```sh
# Virtual hosts
Include /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
```
### ÉTAPE 3

>Dans le fichier `httpd-vhosts.conf` situé dans
>Applications/MAMP/conf/apache/extra
>Créez un VirtualHost qui pointe vers le dossier de travail (ici htdocs/_CAS_):

```sh
<VirtualHost cas.dauphine.fr:80>
    DocumentRoot /Applications/MAMP/htdocs/_CAS_
    ServerName nomDeVotreApp.dauphine.fr
</VirtualHost>
```

### ÉTAPE 4

>Redémarrez apache

```sh
$ sudo apachectl stop
$ sudo apachectl restart
```


### ÉTAPE 5

>Dans le dossier connexion, renommez le fichier `parameter-cas-exemple.php` en `paramter-cas.php`
>puis dans ce même fichier indiquez les informations de connexion au server LDAP

ENJOY !

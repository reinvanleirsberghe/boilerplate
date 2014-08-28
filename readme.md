Boilerplate
=====================

A starting project with user logins build with Laravel and Laracasts

## Installation

To use this project as is, first clone the repo from GitHub

```bash
git clone https://github.com/reinvanleirsberghe/boilerplate.git
```

If you are working with Homestead, update your Homestead.yaml

```bash
'folders:'
	- map: /Users/username/code/boilerplate
      to: /home/vagrant/boilerplate
'sites:'
	- map: boilerplate.app
      to: /home/vagrant/boilerplate
```

Update your /etc/hosts
```bash
sudo vi /etc/hosts

127.0.0.1    boilerplate.app
```

cd into homestead and do a 'vagrant reload' and 'vagrant provison'

vm into the site
Do a ‘composer update’ (composer.json)
Do a ‘npm install’  (package.json)
Do a ‘bower install’ (bower.json)

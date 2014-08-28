Boilerplate
=====================

A starting project with user logins build with Laravel and Laracasts

## Installation

Clone this repo into your folder.


To use this project as is, first clone the repo from GitHub, then run:

```bash
git clone https://github.com/reinvanleirsberghe/boilerplate.git
```

If you are working with Homestead, update your Homestead.yaml
Add to section ‘folders:’
	- map: /Users/username/code/boilerplate
      to: /home/vagrant/boilerplate
Add to section ‘sites:’
	- map: boilerplate.app
      to: /home/vagrant/boilerplate

Update your /etc/hosts
```bash
sudo vi /etc/hosts
```
Add '127.0.0.1    boilerplate.app'
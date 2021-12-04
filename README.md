# php skeleton

Skeleton for creating small php packages with static analyzing and unit testing

![GitHub CI](https://github.com/otis22/php-skeleton/workflows/CI/badge.svg)
![Autofix](https://github.com/otis22/php-skeleton/workflows/AUTOFIX/badge.svg)
![Travis CI](https://api.travis-ci.org/otis22/php-skeleton.svg?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/otis22/php-skeleton/badge.svg?branch=master)](https://coveralls.io/github/otis22/php-skeleton?branch=master)

## Local work

For run all tests
```shell
make all
```
or connect to terminal
```shell
make exec
```

or use built in php server [http://localhost:8080](http://localhost:8080)
```shell
# start server on 8080 port
make serve 
# custom port 8081
make serve PORT=8081
```

*Dafault php version is 7.4*. Use PHP_VERSION= for using custom version. 
```shell
make all PHP_VERSION=8.0
# run both 
make all PHP_VERSION=7.4 && make all PHP_VERSION=8.0
```

all commands
```shell
# composer install
make install
# composer install with --no-dev
make install-no-dev
# check code style
make style
# fix code style
make style-fix
# run static analyze tools
make static-analyze
# run unit tests
make unit
#  check coverage
make coverage
```

## Autofix Action

Github Action `.github/workflows/AUTOFIX.yml` commit fixes to your repo. 

Generate [Access Token](https://github.com/settings/tokens) and add token 
to repo Settings/Secrets/Actions secrets with name `ACCESS_TOKEN`. 

Or delete `AUTOFIX.yml` file.

## Adopt for you 

- Click on [Use template button](https://prnt.sc/w7avaw) 
- Put your code to src/ tests/ directory
- Delete config files for unused CI systems
- Change project data in composer.json, README and Makefile


## Comments 

- Repo with analyze tools: https://github.com/exakat/php-static-analysis-tools
- Repo for gitlab-ci php https://gitlab.com/gitlab-org/gitlab-foss/-/blob/master/lib/gitlab/ci/templates/PHP.gitlab-ci.yml

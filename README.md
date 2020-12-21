# php skelleton
Skelleton for write high quality php application

![GitHub CI](https://github.com/otis22/php-skelleton/workflows/CI/badge.svg)
![Travis CI](https://api.travis-ci.org/otis22/php-skelleton.svg?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/otis22/php-skelleton/badge.svg?branch=master)](https://coveralls.io/github/otis22/php-skelleton?branch=master)

## Local work

For run all tests
```shell
make all
```
or you can connect to terminal
```shell
make exec
```

all commands
```shell
# security check
make security
# composer install
make install
# composer install with --no-dev
make install-no-dev
# check code style
make style
# run static analyze tools
make static-analyze
# run unit tests
make unit
#  check coverage
make coverage
```

## Adopt for you 

- Clone this repo to one level with your repo path. For example: Directory "projects" has directory "php-skelleton" and your project directory
- From directory with your project run "cp -r ../php-skelleton/* . && cp -r ../php-skelleton/.github . && cp ../php-skelleton/.gitignore ."
- Put your code to src/ tests/ directory
- Change data in composer.json
- Change README file(Project name, badge url and other)


## Comments 

- Repo with analyze tools: https://github.com/exakat/php-static-analysis-tools
- Repo for gitlab-ci php https://gitlab.com/gitlab-org/gitlab-foss/-/blob/master/lib/gitlab/ci/templates/PHP.gitlab-ci.yml

# php skelleton
Skelleton for write high quality php application

![GitHub CI](https://github.com/otis22/php-skelleton/workflows/CI/badge.svg)
![Travis CI](https://api.travis-ci.org/otis22/php-skelleton.svg?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/otis22/php-skelleton/badge.svg?branch=master)](https://coveralls.io/github/otis22/php-skelleton?branch=master)

## Local work

```
cd docker
docker-compose up
```
now you can connect to terminal
```
docker exec -it php-skelleton /bin/bash
```

## Run tests

```
#run all
composer check-all

#security check
composer security

#check code style
composer check-style

#analyze code
composer check-static-analyze

#run unit tests
composer unit
```


## Adopt for you 

- Clone this repo to one level with your repo path. For example: Directory "projects" has directory "php-skelleton" and your project directory
- From directory with your project run "cp -r ../php-skelleton/* . && cp -r ../php-skelleton/.github . && cp ../php-skelleton/.gitignore ."
- Put your code to src/ tests/ directory
- Change data in composer.json
- Change README file(Project name, badge url and other)


## Comments 

- For create docker was used https://phpdocker.io/ service.
- Repo with analyze tools: https://github.com/exakat/php-static-analysis-tools
- Repo for gitlab-ci php https://gitlab.com/gitlab-org/gitlab-foss/-/blob/master/lib/gitlab/ci/templates/PHP.gitlab-ci.yml

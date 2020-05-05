# php skelleton
Skelleton for write high quality php application

![Build Status](https://github.com/otis22/php-skelleton/workflows/CI/badge.svg)

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
#validate composer json
composer validate

#security check
vendor/bin/security-checker security:check

#check code style
vendor/bin/phpcs --ignore-annotations --standard=PSR12 src tests

#analyze code
vendor/bin/phpcf tests src && vendor/bin/phpstan analyse --level=max src tests

#run unit tests
vendor/bin/phpunit

#run coverage check(need run after phpunit)
vendor/bin/php-coverage-checker build/clover.xml 100
```


## Adopt for you 

- Clone this repo to one level with your repo path. For example: Directory "projects" has directory "php-skelleton" and your project directory
- From directory with your project run "cp -r ../php-skelleton/* . && cp -r ../php-skelleton/.github ."
- Put your code to src/ tests/ directory
- Change data in composer.json
- Change README file


## Comments 

- For create docker was used https://phpdocker.io/ service.
- Repo with analyze tools: https://github.com/exakat/php-static-analysis-tools
- Repo for gitlab-ci php https://gitlab.com/gitlab-org/gitlab-foss/-/blob/master/lib/gitlab/ci/templates/PHP.gitlab-ci.yml
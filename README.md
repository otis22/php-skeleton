# php skelleton
Skelleton for write high quality php application

![Build Status](https://github.com/otis22/php-skelleton/workflows/CI/badge.svg)

##Local work

```
cd docker
docker-compose up
```
now you can connect to terminal
```
docker exec -it php-skelleton /bin/bash
```

##Run tests

```
#validate composer json
composer validate

#security check
vendor/bin/security-checker security:check

#check code style
vendor/bin/phpcs --ignore-annotations --standard=PSR12 src tests

#run unit tests
vendor/bin/phpunit

#run coverage check(need run after phpunit)
vendor/bin/php-coverage-checker build/clover.xml 100
```


## Adopt for you 

- Put your code to src/ tests/ directory
- Change data in composer.json
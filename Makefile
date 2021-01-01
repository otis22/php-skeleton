default_php_version:=7.4
php_version:=$(PHP_VERSION)
ifndef PHP_VERSION
	php_version:=$(default_php_version)
endif
base_dir:=$(shell basename $(CURDIR))
docker:=docker run --rm -v $(CURDIR):/app -w /app $(base_dir):$(php_version)

build:
	docker build --build-arg VERSION=$(php_version) --tag $(base_dir):$(php_version) ./docker/

exec:
	docker run --rm -ti -v $(CURDIR):/app:rw -w /app $(base_dir):$(php_version) sh

security:
	$(docker) composer security

install:
	$(docker) composer install

install-no-dev:
	$(docker) composer install --no-dev

style:
	$(docker) composer style

static-analyze:
	$(docker) composer static-analyze

unit:
	$(docker) -dzend_extension=xdebug.so -dxdebug.mode=coverage  vendor/bin/phpunit

coverage:
	$(docker) composer coverage

all: build install security style static-analyze unit coverage

.PHONY: build
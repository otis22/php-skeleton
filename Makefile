default_php_version:=7.4
default_server_port:=8080
php_version:=$(PHP_VERSION)
server_port:=$(PORT)

ifndef PHP_VERSION
	php_version:=$(default_php_version)
endif

ifndef PORT
	server_port:=$(default_server_port)
endif

base_dir:=$(shell basename $(CURDIR))
docker:=docker run -u=$(shell id -u):$(shell id -g) --rm -v $(CURDIR):/app -w /app $(base_dir):$(php_version)

build:
	docker build --build-arg VERSION=$(php_version) --tag $(base_dir):$(php_version) ./docker/

exec:
	docker run -u=$(shell id -u):$(shell id -g) --rm -ti -v $(CURDIR):/app:rw -w /app $(base_dir):$(php_version) sh

serve:
	docker run -p$(server_port):8080 --rm -v $(CURDIR):/app -w /app $(base_dir):$(php_version) php -S 0.0.0.0:8080

install:
	$(docker) composer install

install-no-dev:
	$(docker) composer install --no-dev

style:
	$(docker) composer style

style-fix:
	$(docker) composer style-fix

static-analyze:
	$(docker) composer static-analyze

unit:
	$(docker) -dzend_extension=xdebug.so -dxdebug.mode=coverage  vendor/bin/phpunit

coverage:
	$(docker) composer coverage

all: build install style static-analyze unit coverage

.PHONY: build
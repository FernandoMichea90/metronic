# Prepare for production
production: ensure-composer ensure-permissions enable-cache build-assets

ensure-composer:
	composer update --ignore-platform-req=php --optimize-autoloader

ensure-permissions:
	#chmod -R o+w storage

enable-cache:
	php artisan optimize

build-assets:
	npm update
	npm run prod --demo1 --dark-mode
	npm run prod --demo2
	npm run prod --demo3

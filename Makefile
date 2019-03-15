install:
	composer install
linter:
	composer run-script phpcs -- --standard=PSR1,PSR2 bin src
fix-linter:
	phpcbf --standard=PSR1,PSR2 bin src
update:
	composer update

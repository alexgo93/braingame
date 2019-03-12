install:
	composer install
linter:
	phpcs --standard=PSR1,PSR2 bin src
fix-linter:
	phpcbf --standard=PSR1,PSR2 bin src

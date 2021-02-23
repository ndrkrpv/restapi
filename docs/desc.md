To run tests use the following command

```
docker-compose run php composer install		# to install dependencies
docker-compose up				# to run the app
docker-compose run php /www/vendor/bin/phpunit	# to run unit tests
docker-compose run php /www/vendor/bin/behat	# to run behat tests
```

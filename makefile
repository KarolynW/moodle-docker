up:
	docker compose up -d

down:
	docker compose down

restart:
	docker compose down && docker compose up -d

test:
	docker exec -it kara-moodle php /bitnami/moodle/vendor/bin/phpunit

behat:
	docker exec -it kara-moodle php /bitnami/moodle/admin/tool/behat/cli/run.php

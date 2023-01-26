how to test:

`docker composer up -d`  
`docker compose exec php bin/console doctrine:migrations:migrate`  
`docker compose exec php bin/console messenger:consume async -vvv`

messenger failes to create it's table

Drop the table with enum field in it:  
`docker compose exec php bin/console doctrine:migrations:migrate prev`  
`docker compose exec php bin/console messenger:consume async -vvv`

messenger works

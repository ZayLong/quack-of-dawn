
## Setup commands


### In project root
- `composer install`
- `touch .env`
- `php artisan db:seed PondSeeder`
- `php artisan queue:work`
- `php artisan key`
- `php artisan serve`


### In mongo
- `db.ducks.createIndex({'hit_points':1})`
- `db.ducks.createIndex({'weapon':1, 'armor':1})`
- `db.ducks.createIndex({'equipment':1})`


### Endpoints
- `/create_ducks/`
- `/update_ducks/`
- `/browse_ducks/`

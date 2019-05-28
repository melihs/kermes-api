
## Kermes Api - v1

## Libraries in the Project


## All Endpoints
```
Auth
POST /api/v1/register
POST /api/v1/login
POST /api/v1/logout

User
- GET     /api/v1/users
- GET     /api/v1/users/:id
- POST    /api/v1/users
- PUT     /api/v1/users/:id
- DELETE  /api/v1/users/:id

Kermes
- GET     /api/v1/kermes
- GET     /api/v1/kermes/:id
- POST    /api/v1/kermes
- PUT     /api/v1/kermes/:id
- DELETE  /api/v1/kermes/:id

```

### Getting Started

### Installation (Manual)
```console
$ git clone https://github.com/melihs/kermes-api.git   
$ cd kermes-api && composer install
$ php artisan migrate:fresh --seed

```


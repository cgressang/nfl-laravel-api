# nfl-laravel-api
RESTful api for [NFL app](https://github.com/cgressang/meta-nfl-la). All responses come in standard JSON.

Using [Laravel](https://laravel.com/) Framework 8.66.0

[Swagger Documentation](https://cgressang.github.io/nfl-laravel-api/)

## RESTful URLs

### Conference endpoints

* List of conferences
	* `GET /api/v1/conference`
* List of conference divisions
	* `GET /api/v1/conference/divisions`
* List of conference teams
	* `GET /api/v1/conference/teams`

### Team endpoints

* A single team
	* `GET /api/v1/team/[id]`
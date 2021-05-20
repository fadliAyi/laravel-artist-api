<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# API SPEC
# Artist API
## Create Artist
Request :
- Method: POST
- Header:
    - Content-Type: application/json
    - Accept: application/json
- Endpoint: `/api/Artist`
- Body :
```json
{
    "name": "string",
    "about": "long",
    "type": "string",
    "gender": "string"
}

```
Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": {
        "id": "integer",
        "name": "string",
        "about": "long",
        "type": "string",
        "gender": "string",
        "created_at": "date",
        "updated_at": "date"
    }
}

```
## Get Artist
Request :
- Method: GET
- Header:
    - Content-Type: application/json
    - Accept: application/json
- Endpoint: `/api/Artist/{id_artist}`

Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": {
        "id": "integer",
        "name": "string",
        "about": "long",
        "type": "string",
        "gender": "string",
        "created_at": "date",
        "updated_at": "date"
    }
}

```
## Update Artist
Request :
- Method: PUT
- Header:
    - Content-Type: application/json
    - Accept: application/json
- Endpoint: `/api/Artist/{id_artist}`
- Body :
```json
{
    "name": "string",
    "about": "long",
    "type": "string",
    "gender": "string"
}

```
Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": {
        "id": "integer",
        "name": "string",
        "about": "long",
        "type": "string",
        "gender": "string",
        "created_at": "date",
        "updated_at": "date"
    }
}

```
## List Artist
Request :
- Method: GET
- Header:
    - Content-Type: application/json
    - Accept: application/json
- Endpoint: `/api/Artist`

Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": [{
        "id": "integer",
        "name": "string",
        "about": "long",
        "type": "string",
        "gender": "string",
        "created_at": "date",
        "updated_at": "date"
    }]
}

```
## Delete Artist
Request :
- Method: DELETE
- Header:
    - Content-Type: application/json
    - Accept: application/json
- Endpoint: `/api/Artist/{id_artist}`

Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": []
}

```

# Song Api

## Create Song
Request:
- Method: POST
- EndPoint: `api/song/{id_artist}`
- Header:
    - Content-Type: application/json
    - Accept: application/json
- Body:
```json
{
    "album_id": "integer",
    "name": "string",
    "duration": "string",
    "release": "date",
    "genre": "string"
}
```
Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": {
        "id": "int",
        "album_id": "integer",
        "name": "string",
        "duration": "string",
        "release": "date",
        "genre": "string",
        "created_at": "timestamp",
        "updated_at": "timestamp"
    }
}
```
## Get Song
Request:
- Method: GET
- EndPoint: `api/song/{id_song}`
- Header:
    - Content-Type: application/json
    - Accept: application/json

Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": {
        "id": "int",
        "album_id": "integer",
        "name": "string",
        "duration": "string",
        "release": "date",
        "genre": "string",
        "created_at": "timestamp",
        "updated_at": "timestamp"
    }
}
```
## Update Song
Request:
- Method: PUT
- EndPoint: `api/song/{id_song}`
- Header:
    - Content-Type: application/json
    - Accept: application/json
- Body:
```json
{
    "album_id": "integer",
    "name": "string",
    "duration": "string",
    "release": "date",
    "genre": "string"
}
```
Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": []
}
```
## List Song
Request:
- Method: GET
- EndPoint: `api/song/{id_artis}`
- Header:
    - Content-Type: application/json
    - Accept: application/json

Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": [{
        "id": "int",
        "album_id": "integer",
        "name": "string",
        "duration": "string",
        "release": "date",
        "genre": "string",
        "created_at": "timestamp",
        "updated_at": "timestamp"
    }]
}
```
## Delete Song
Request:
- Method: DELETE
- EndPoint: `api/song/{id_song}`
- Header:
    - Content-Type: application/json
    - Accept: application/json

Response:
```json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": []
}
```

# Album API
## Create Album
Request:
- Method: POST
- EndPoint: `api/album`
- Header:
    - Content-Type: application/json
    - Accept: application/json
- Body:
``` json
{
    "artist_id": "int",
    "name": "string",
    "label": "string",
    "release_date": "date",
    "about": "long"
}
```
Response:
``` json
{
    "diagnostic": {
        "status": "number",
        "message": "string"
    },
    "data": {
        "artist_id": "int",
        "name": "string",
        "label": "string",
        "release_date": "date",
        "about": "long",
        "created_at": "timestamp",
        "updated_at": "timestamp"
    }
}
```

## Get Album
Request:
- Method: GET
- EndPoint: `api/album/{id_album}`
- Header:
    - Content-Type: application/json
    - Accept: application/json

## Update Album
## List Album
## Delete Album

# emptyproject
PHP Project with MariaDB and NodeJS on Nginx

## Installation

1. Clone repository
2. Install all dependencies
```
composer install
```
3. Create docker volume
```
docker volume create mysqldata
```
4. Run
```
docker compose up -d
```
5. Open http://localhost:8080 in your browser

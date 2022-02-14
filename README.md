# Laravel Restful API

## INSTALLING

### 1. Clone this repo
```bash
git clone https://github.com/hairullana/mimpy.id-laravel
```

### 2. Change directory
```bash
cd gabut-chat
```

### 3. Create and `Setup` .env file (DB)
```bash
cp .env.example .env
```

### 4. Generate key
```bash
php artisan key:generate
```

### 5. Migrate database
```bash
php artisan migrate:fresh --seed
```

### 4. Run application
```bash
php artisan serve
```


## Access API

### 1. First, you must to register from website (open application)

### 2. Use Postman to access API

### 3. Login to get token (http://127.0.0.1:8000/api/login)

### 4. Use token (Authorization -> Type choose "Bearer Token" -> Paste token that you copy before)

### 5. Access your API
- http://127.0.0.1:8000/api/create (POST - create student)
- http://127.0.0.1:8000/api/edit/{id} (GET - show student)
- http://127.0.0.1:8000/api/edit/{id} (POST - edit student)
- http://127.0.0.1:8000/api/delete/{id} (POST - delete student)
- http://127.0.0.1:8000/api/score/create/{id} (POST - create student with multiple scores)
- http://127.0.0.1:8000/api/score/show/{id} (GET - show student)
- http://127.0.0.1:8000/api/score/update/{id} (POST - edit student with multiple scores)
- http://127.0.0.1:8000/api/logot (GET - logout and delete token from database)
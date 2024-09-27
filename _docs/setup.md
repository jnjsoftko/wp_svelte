# 최초 생성

## local sites

"""
name: ilmac
user: master.vw
password:
email: jnjsoft.ko@gmail.com
"""

## files

- "/Users/youchan/Local Sites/ilmac/app/public"

### /\_docs

> `setup.md`

### /\_env 복사

> `vendor/`

> `.env`

> `.env.exmaple`

### `/.gitignore` 복사

### 폴더 삭제

- "/Users/youchan/Local Sites/ilmac/app/public/wp-content/themes" 하위 폴더 삭제
  - "/Users/youchan/Local Sites/ilmac/app/public/wp-content/themes/twentytwentyfour" 제외

## `/_test`

- `phpinfo.php`

## github

```sh
cd "/Users/youchan/Local Sites/ilmac/app/public"

github -e pushRepo -u jnjsoftko -n wp_ilmac -d "일맥구조엔지니어링"
```

# copy

## local sites

"""
name: ilmac
user: master.vw
password:
email: jnjsoft.ko@gmail.com
"""

## copyRepo

```sh
cd "C:\Users\Jungsam\Local Sites\ilmac\app"

# delete C:\Users\Jungsam\Local Sites\ilmac\app\public\wp-content\themes\twentytwentythree
rmdir /s /q "public\wp-content\themes\twentytwentythree"
rmdir /s /q "public\wp-content\themes\twentytwentytwo"

# github copy remote repository
github -e copyRepo -u jnjsoftko -n wp_ilmac

# move github local repository
xcopy "C:\Users\Jungsam\Local Sites\ilmac\app\wp_ilmac\*" "C:\Users\Jungsam\Local Sites\ilmac\app\public" /s /e /h /y
```

## composer(dotenv)

### php 설치 폴더 확인

phpinfo();

"""
Loaded Configuration File C:\Users\Jungsam\AppData\Roaming\Local\run\Mn-mNyiYX\conf\php\php.ini
"""

> `C:\Users\Jungsam\AppData\Roaming\Local\run\Mn-mNyiYX\conf\php\php.ini`

```ini
extension_dir="C:/Users/Jungsam/AppData/Roaming/Local/lightning-services/php-8.1.29+0/bin/win64/ext"
```

> `C:\Users\Jungsam\AppData\Roaming\Local\lightning-services\php-8.1.29+0\bin\win64\php.exe`

### composer 설치(windows10)

- 다운로드
  https://nam24.tistory.com/23
- Setup 파일 실행
  Composer Setup
  - php 경로: C:\APM\php8\php.exe

### dotenv

> `C:\Users\Jungsam\Local Sites\ilmac\app\public\_env\.env`

```
ADMIN_USER_ID=
ADMIN_USER_PW=
ADMIN_USER_EMAIL=
MYSQL_IP=
MYSQL_PORT=
MYSQL_ID=
MYSQL_PW=
MYSQL_DB=
```

```sh
cd "C:\Users\Jungsam\Local Sites\ilmac\app\public\_env"
composer require vlucas/phpdotenv
```

## check in browser

"""
http://ilmac.local/_test/env.php

http://ilmac.local/_test/mysql.php
"""

# 최초 생성

## local sites

"""
name: wpsvelte
user: master.vw
password:
email: jnjsoft.ko@gmail.com
"""

## files

### folder.file 삭제, 복사

```sh
cd "C:\Users\Jungsam\Local Sites\wpsvelte\app\public"
rmdir /s /q "wp-content\themes\twentytwentythree"
rmdir /s /q "wp-content\themes\twentytwentytwo"

copy "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\.gitignore" "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\.gitignore"

xcopy "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\_docs\*" "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\_docs\" /s /e /h /y

xcopy "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\_env\*" "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\_env\" /s /e /h /y

xcopy "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\_test\*" "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\_test\" /s /e /h /y
```

### 수정

> `C:\Users\Jungsam\Local Sites\wpsvelte\app\public\.gitignore`

```
# Nodejs
node_modules/
.svelte-kit/

# Python
__pycache__/
*.py[cod]
*$py.class

# Vite
vite.config.js.timestamp-*
vite.config.ts.timestamp-*

# binary
*.exe

# folders
/.svelte-kit
/package
_markdowns/
_links/

build/
dist/
_draft/
_backups/
pocketbase/
sqlite/
```

## github

```sh
github -e pushRepo -u jnjsoftko -n wp_svelte -d "wordpress sveltekit"
```

## sveltekit

- [How to Serve a Svelte Site on WordPress and Why You Shouldn’t](https://bonitotech.com/2024/04/11/how-to-serve-a-svelte-site-on-wordpress-and-why-you-shouldnt/)

### folder, files

- 생성: C:\Users\Jungsam\Local Sites\wpsvelte\app\public\wp-content\themes\svelte-theme

> `C:\Users\Jungsam\Local Sites\wpsvelte\app\public\wp-content\themes\svelte-theme\style.css`

```css
/**
 * Theme Name: Svelte Site
 * Template: twentytwentyfour
 * ...other header fields
 */
```

### sveltekit install

```sh
cd "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\wp-content\themes\svelte-theme"


npm create svelte@latest svelte-project

◇  Which Svelte app template?
│  Skeleton project
│
◇  Add type checking with TypeScript?
│  Yes, using TypeScript syntax
│
◇  Select additional options (use arrow keys/space bar)
│  Add ESLint for code linting, Add Prettier for code formatting

cd svelte-project
npm install
npm run dev
```

## files

> `C:\Users\Jungsam\Local Sites\wpsvelte\app\public\wp-content\themes\svelte-theme\functions.php`

```php

```

> `C:\Users\Jungsam\Local Sites\wpsvelte\app\public\wp-content\themes\svelte-theme\svelte-index.php`

```php

```

"""
http://wpsvelte.local/wp-admin/post-new.php?post_type=page
"""

# copy

## local sites

"""
name: wpsvelte
user: master.vw
password:
email: jnjsoft.ko@gmail.com
"""

## copyRepo

```sh
cd "C:\Users\Jungsam\Local Sites\wpsvelte\app"

# delete C:\Users\Jungsam\Local Sites\wpsvelte\app\public\wp-content\themes\twentytwentythree
rmdir /s /q "public\wp-content\themes\twentytwentythree"
rmdir /s /q "public\wp-content\themes\twentytwentytwo"

# github copy remote repository
github -e copyRepo -u jnjsoftko -n wp_wpsvelte

# move github local repository
xcopy "C:\Users\Jungsam\Local Sites\wpsvelte\app\wp_wpsvelte\*" "C:\Users\Jungsam\Local Sites\wpsvelte\app\public" /s /e /h /y
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

> `C:\Users\Jungsam\Local Sites\wpsvelte\app\public\_env\.env`

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
cd "C:\Users\Jungsam\Local Sites\wpsvelte\app\public\_env"
composer require vlucas/phpdotenv
```

## check in browser

"""
http://wpsvelte.local/_test/env.php

http://wpsvelte.local/_test/mysql.php
"""

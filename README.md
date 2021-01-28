# laravel_docker
## Docker + Laravel + Nginx + MySQL 環境構築
構築の流れ
- 以下Dockerイメージ作成
  - nginx
  - php-fpm
  - MySQL
- laravelインストール
- envファイル設定配置および設定
- DBマイグレーション

## 構築手順
・Githubからソースをcloneを完了させる

※laravelフォルダに存在する「.gitkeep」を削除する

・「docker-compose.yml 」の「mysql」の「environment:」の以下の項目を任意の名前に変更する。
※「MYSQL_PASSWORD」と「MYSQL_ROOT_PASSWORD」は同じものにする。
  MYSQL_DATABASE
  MYSQL_USER
  MYSQL_PASSWORD
  MYSQL_ROOT_PASSWORD

・コマンドラインツール（PowerShell,CMD, Terminal）にて
「docker-compose.yml 」が存在するフォルダへ移動し、以下コマンド実行
```
# dockerイメージ作成（キャッシュ無し）
docker-compose build --no-cache

# dockerコンテナ起動
docker-compose up -d

# php-fpmコンテナにログイン
docker-compose exec php-fpm /bin/bash
```

### MySQLコンテナ起動に失敗する場合（Win）
一旦サービスを止めてみる
`net stop mysql80`

・php-fpmコンテナ内にて"/var/www/html"にいる状態で下記Laravelインストールコマンド実行

```
composer create-project laravel/laravel=7.*.* --prefer-dist .
```
laravelフォルダ直下の「.env」に以下の情報を記述
この時、DB_DATABASE、DB_USERNAME、DB_PASSWORDを任意のものに設定する
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=任意
DB_USERNAME=任意
DB_PASSWORD=任意
BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
LOG_CHANNEL=daily
```
　
■ キャッシュとアプリケーションキーの設定
```
# 設定ファイルのキャッシュを作成
php artisan config:cache

# アプリケーションキー生成
php artisan key:generate

# 設定ファイルのキャッシュを作成
php artisan config:cache
```

■ マイグレーション
```
php artisan migrate
```
■ laravel/ui インストール 

※ログイン機能を実装する場合、一旦bootstrapを入れる
```
composer require laravel/ui:~2.0
php artisan ui bootstrap --auth
```
※JS(React, Vueなど)は後からでもOK

■LaravelMIXインストール（後からでもOK）
```
apt update
apt install nodejs npm
npm install
npm run dev
```
■WebブラウザにてWelcomeページ確認
ブラウザアドレスバーにlocalhostを入力し、Welcomeページが表示されることを確認

以上

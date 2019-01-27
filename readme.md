
# db起動
``docker-compose up -d``
- port: 33060

# server 起動
``php artisan serve``

# migrate & migration
```
php artisan make:migration mue
Created Migration: 2018_11_06_053342_mue
php artisan migrate
Migration table created successfully.
```

# おまけ
## 環境作成
```
brew install homebrew/core/composer
composer global require "laravel/installer"
# export PATH="$PATH:$HOME/.composer/vendor/bin"
source ~/.bashrc
<(╹ヮ╹)>anzu@anzuMacBookPro ~ $ cd develop/
<(╹ヮ╹)>anzu@anzuMacBookPro ~/develop $ mkdir lalala
<(╹ヮ╹)>anzu@anzuMacBookPro ~/develop $ cd lalala/
<(╹ヮ╹)>anzu@anzuMacBookPro ~/develop/lalala $ mkdir vendor
<(╹ヮ╹)>anzu@anzuMacBookPro ~/develop/lalala $ laravel new lalala
Crafting application...
```

- http://www.go-next.co.jp/blog/web/php/28556/
- https://laraweb.net/

### このリポジトリをクローンしてきた場合
```
<(╹ヮ╹)> (master)anzu@anzuAir ~/develop/lalala/lalala $ mv .env.example  .env
<(╹ヮ╹)> (master)anzu@anzuAir ~/develop/lalala/lalala $ vi .env
db passなど書き換える
<(╹ヮ╹)> (master)anzu@anzuAir ~/develop/lalala/lalala $ php artisan key:generate

Warning: require(/Users/anzu/develop/lalala/lalala/vendor/autoload.php): failed to open stream: No such file or directory in /Users/anzu/develop/lalala/lalala/artisan on line 18

Fatal error: require(): Failed opening required '/Users/anzu/develop/lalala/lalala/vendor/autoload.php' (include_path='.:') in /Users/anzu/develop/lalala/lalala/artisan on line 18
<(╹ヮ╹)> (master)anzu@anzuAir ~/develop/lalala/lalala $ ls vendor/
<(╹ヮ╹)> (master)anzu@anzuAir ~/develop/lalala/lalala $ composer install
```

``composer install`` これ必要

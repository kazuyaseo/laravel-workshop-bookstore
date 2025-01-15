# Laravel ハンズオンワークショップ用教材

本リポジトリは，Laravel を使った PHP Web アプリケーション（Web API）の開発を一通り体験するハンズオンワークショップのために作成されたものです．

## 環境構築

本アプリは，Docker を積極的に採用せず，ホストマシンに環境を構築することを目指します．
もちろん，Docker を使うことも可能です．
このドキュメントでは，MacOS を利用していることを前提としています

### PHP のインストール

```shell
$ brew install php
$ php -v
```

### Composer のインストール

```shell
$ brew install composer
$ composer -V
```

### 本リポジトリの Clone

> [!TIP]
> このリポジトリを Fork していただき，ご自分のリポジトリを Clone されることをおすすめします

```shell
$ git clone https://github.com/{user_name}/laravel-workshop-bookstore
$ cd laravel-workshop-bookstore
```

### 依存関係のインストール

```shell
$ composer i
... ライブラリのインストールが始まります
...

Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.  

  laravel/pail ................................................................................................................................ DONE
  laravel/sail ................................................................................................................................ DONE
  laravel/tinker .............................................................................................................................. DONE
  nesbot/carbon ............................................................................................................................... DONE
  nunomaduro/collision ........................................................................................................................ DONE
  nunomaduro/termwind ......................................................................................................................... DONE

79 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

```

### Laravel アプリケーションの立ち上げ

```shell
$ cp .env.example .env
$ php artisan key:generate
$ php artisan serve
  INFO  Server running on [http://127.0.0.1:8000].
  Press Ctrl+C to stop the server
```

ブラウザで http://127.0.0.1:8000 にアクセスしてみて「Application up」という画面が出れば OK！

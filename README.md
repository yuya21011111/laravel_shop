## 開発背景

ポートフォリオを作る際にまず何を作ればいいか悩んでいた時に、身近な人で困っている事があればそれを解決できる物を作ろうと思いそこから考えました。
ある時、祖母が家庭菜園でお野菜を作りすぎてしまい、食べきれないで捨ててしまうお野菜があったため、それをどうにかできないかと考え、「余ったお野菜、果物を販売できるサイト」を作成しようと考えました。

## 使用技術

フロントエンド　HTML/CSS JavaScript  Tailwind CSS
バックエンド PHP(v8.1.13) Laravel(v8.83.27)
DB RDS(MySQL)
インフラ AWS(EC2 RDS)
その他  Git GitHub

## 機能
新規登録、ログイン、ログアウト、商品検索、商品並替（おすすめ、値段昇順降順、古い順、新しい順）、商品購入、支払い機能（API Stripeテストモード）

## API
Stripe（決済時）

## ライブラリ
toastr.js swiper.js

## Faker
DatabaseSeeder.phpにFakerがあるので使用しない場合はコメントアウトしてください。

## Clone 
https://github.com/yuya21011111/laravel_shop.git

## 感想
エラーなどで詰まってしまう事がありましたが完成できてよかったです。
１作品目ですのでまだまだ未熟な所もあり、多くの課題を残していますが、今後一つ一つの積み重ねを大事にしていき、成長したいと考えております。


## 参考サイト
Laravel Document
https://readouble.com/laravel/8.x/ja/installation.html


## php 8.1
export PATH="/usr/local/opt/php@8.1/bin:$PATH"
export PATH="/usr/local/opt/php@8.1/sbin:$PATH"

## git

git add -A .  
git commit -m "Guard"
git push origin main 


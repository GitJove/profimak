# Profimak. The beginning of your beautiful, custom ecommerce on Laravel.

## Features
- Create and organize categories & subcategoires
- Create attributes and group them in sets of attributes
- Create currencies
- Create carriers
- Create taxes and use them on products
- Create order statuses
- Create products and upload product multiple images at once, using dropzone
- Ability to create product groups
- Ability to clone a product

## Installation
- Clone repository
```
$ git clone https://github.com/GitJove/profimak.git
```
- Run in your terminal
```
$ composer install
$ php artisan key:generate
```
- Setup database connection in .env file ( Change .env.example file to .env)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

- Install node package manager NPM
```
$ npm install

- Install composer
```
$ composer install

- Migrate tables with demo data
```
$ php artisan migrate --seed
```

- Laravel 5 Files Folders Permission and Ownership Setup
```
$ cd /dir/of/laravel
$ chmod -R 777 ./storage ./bootstrap

You may need to use sudo on these commands if you get permission denied errors, i.e.:
$ sudo cd /path/to/profimak
$ sudo chmod -R 777 ./storage ./bootstrap

For more info:
https://www.itechempires.com/2017/06/laravel-5-files-folders-permission-ownership-setup/
```

- Access it on
```
http://localhost/profimak/admin/login
```

## Setup
In order to use the shop and be able to add products, you must have a minimum configuration:
- Create at least one category;
- Create at least one attribute for at least one of these types: text, textarea, date, dropdown, multiple select, media;
- Create at least one attribute set;
- Create a tax (eg. VAT).

After creating these, you’re ready to add your first product.

## Known Issues
- Product image uploader not fully responsive
- Changing attribute set on a product that had an old set of media attribute type with an uploaded image and uploading a new image to media attribute type causes an error
- Cloning a product does not clone values field from attribute_product_value table

## Roadmap for v1.0
- Implement orders
- Implement users management
- Improve product image uploader
- Improve and fix styles
- Cool ideas from developers :)


## ER Diagram
![alt_text](http://i.imgur.com/bNaxv0o.png "ERD")

## Screenshots
![alt text](http://i.imgur.com/i3rp9Jk.png "List categories")
![alt text](http://i.imgur.com/CCCgGvl.png "Edit category")
![alt text](http://i.imgur.com/92WE6wd.png "Edit product")
![alt text](http://i.imgur.com/ZZF70eo.png "Edit attribute")
![alt text](http://i.imgur.com/xmb0u7o.png "Edit attribute set")
![alt text](http://i.imgur.com/OVbI44p.png "Edit currency")
![alt text](http://i.imgur.com/86mx9U2.png "Edit tax")

## Contributors
 - [Paul Duca](https://github.com/pduca)
 - [Andrei Barta](https://github.com/abarta)
 
## License
Profimak is based on Backpack which is free for non-commercial use and $19/project for commercial use. Please see [License File](LICENSE.md) and [backpackforlaravel.com](https://backpackforlaravel.com/#pricing) for more information.

[ico-version]: https://img.shields.io/packagist/v/backpack/base.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/backpack/base.svg?style=flat-square

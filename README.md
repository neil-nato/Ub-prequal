<p align="center">
    <img src="https://github.com/octobercms/october/blob/master/themes/demo/assets/images/october.png?raw=true" alt="October" width="25%" height="25%" />
</p>

[October](http://octobercms.com) is a Content Management System (CMS) and web platform whose sole purpose is to make your development workflow simple again. It was born out of frustration with existing systems. We feel building websites has become a convoluted and confusing process that leaves developers unsatisfied. We want to turn you around to the simpler side and get back to basics.

October's mission is to show the world that web development is not rocket science.

[![Build Status](https://travis-ci.org/octobercms/october.svg?branch=develop)](https://travis-ci.org/octobercms/october)
[![License](https://poser.pugx.org/october/october/license.svg)](https://packagist.org/packages/october/october)

### Learning October

The best place to learn October is by [reading the documentation](http://octobercms.com/docs) or [following some tutorials](http://octobercms.com/support/articles/tutorials).

You may also watch these introductory videos for [beginners](https://vimeo.com/79963873) and [advanced users](https://vimeo.com/172202661).

### Installing October

Instructions on how to install October can be found at the [installation guide](http://octobercms.com/docs/setup/installation).

### Quick start installation

For advanced users, run this in your terminal to install October from command line:

```shell
php -r "eval('?>'.file_get_contents('https://octobercms.com/api/installer'));"
```

If you plan on using a database, run this command:

```shell
php artisan october:install
```
---

### Development Setup

To install Composer Dependencies at root folder

``` shell
composer install
```

To install NPM Dependencies go to themes/ub

``` shell
npm install
```

### Run Local Server

``` shell
php artisan serve
```
Default url http://127.0.0.1:8000

### Run Dev Server

- Go to themes/ub

``` shell
npm run dev
```

Default url http://127.0.0.1:3000
Default url of BrowserSync http://localhost:3001

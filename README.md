# Lighthouse Labs | Advanced Lecture: PHP Introduction

* [X] What/why is PHP?
* [ ] Using PHP
* [ ] Data-Types
* [ ] Include
* [ ] Forms

## Have you heard about PHP?

* WordPress is built in PHP!
* Heard the name / about it, but not much!
* PHPMyAdmin -> Online database manager!
* Apache is often used with PHP servers!
* If not careful, there can be security holes!

## What the HECK IS PHP?

* ~1993/1994 by Danish-Canadian Rasmus Lerdorf
* At the time PHP stood for: Personal Home Page Tools
    * Instead of having to write detailed C programs
* At the time meant to help with popular/common features:
    * Guestbooks
    * Page view counters
    * Form submission handling
    * Pull/write-to info from/to a database
* Now, PHP stands for: PHP Hypertext Preprocessor
* Very free, weakly-typed / dynamically typed language
* Facebook / Meta uses PHP as their back-end!
* Over 43% of known/detected stacks include WordPress (CMS built in PHP)
* Over 70% of known/detected back-ends include PHP
* General purpose / interpreted scripting language
    * Web application development
    * Dynamic web page development
    * Command-line program development
    * Desktop GUI application development

## The ElePHPant in the Room...

* A lot of freedom... for better or worse!
* Loosey goosey (like JS!)
* There are lots of examples / tutorials... not all created equal!
* There are inconsistences in the function naming!

## The Good!

* Fun ElePHPant mascot!
* It is very very widely adopted and used!
* There nearly endless resources and tutorials online!
* It is well documented!
* They have a LOT of built-in functions and features (often need to download packages or frameworks in other languages.)
* Great performance (gives most other interpreted languages a run for their money!)
* MVC Framework with ORM and CLI tools: Laravel
* Package Manager: Composer

## How to install?

* Ubuntu: `apt-get install php`
* Macintosh: `brew install php`
* Windows: `choco install php`

Try quick in the browser here: https://www.w3schools.com/php/php_compiler.asp

## Common Command-line Options (PHP Interpretor)

* `php --version` Check the version.
* `php ./path/to/file.php` Please run this file!
* `php -a` Opens a PHP interactive shell for quick Command-Line experiments!
* `php -r "YOUR SCRIPT/CODE"` Good for quick one-line executions/experiments!
* `php -S ADDRESS:PORT` Spin up a web server you can visit from browser.

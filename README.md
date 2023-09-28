# Lighthouse Labs | Advanced Lecture: PHP Introduction

* [ ] What is PHP?
* [ ] Why NOT use PHP - I've heard bad things...
* [ ] Why USE PHP then?
* [ ] Installing PHP
* [ ] Some Common Command-Line Options
* [ ] Data-Types
* [ ] Using PHP (Some Examples)

## What have you heard so far about PHP?

* WordPress is built using PHP
* Lots of making fun of PHP
* Can be used to learn to make dynamic web pages

## What is PHP?

* Was originally developed ~1993 by Danish-Canadian Rasmus Lerdorf
* PHP - originally stood for Personal Home Page tools
* PHP Hypertext Preprocessor
* General-purpose programming language (specialized in web development)
    * Web Apps
    * Dynamic Web Pages
    * Command-line Programs
    * Desktop GUI Applications
* 70% of known back-ends include PHP in their stack
* 40% of known stacks include WordPress
* PHP powers much of Facebook's back-end

## The ElePHPant in the Room...

* Lots of freedom, it is weakly/dynamically typed...
* "Loosey goosey"
* There lots of examples, tutorials, videos, etc. and not all of them are good
* There are inconsistencies in the function names

## The Good!

* Elephant mascot! 🐘
* Widely used—there are many many tutorials, documentation, and resources out there!
* Well-documented
* Frequently updated
* Great performance
* MVC - Laravel
* Package Manager - Composer
* A LOT of major features are built-in

## PHP Installation

Check if PHP is already installed: `php --version`

* Ubuntu: `apt-get install php`
* Macintosh: `brew install php`
* Windows: `choco install php`

Online compiler: https://www.w3schools.com/php/php_compiler.asp

## Common Command-Line Options (PHP Interpretor)

* `php this/file.php` Runs specific file.
* `php -a` Opens an interactive shell for multi-line experiments.
* `php -r "[your test code here]"` Runs one line of PHP.
* `php -S [address]:[port]` -> `php -S localhost:3000` Local test server! Serves PWD by default.
* `php -S [address]:[port] -t path/to/serve` Serves specific folder.

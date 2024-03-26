# Lighthouse Labs | Advanced Lecture: PHP Introduction

* [ ] What is PHP?
* [ ] Why NOT use PHP - I've heard bad things...
* [ ] Why USE PHP then?
* [ ] Installing PHP
* [ ] Some Common Command-Line Options
* [ ] Data-Types
* [ ] Using PHP (Some Examples)

## What have you heard about PHP so far? (If anything!)

* Can be a common ask when looking for jobs!
* Tried it in college
* It is used in WordPress
* Runs the majority of websites with back-ends

## What is PHP?

* Was originally developed in about ~1994 by Danish-Canadian Rasmus Lerdorf
* It originally stood for "Personal Home Page tools"
    * Guestbooks
    * Page view counters
    * Form submission handling
    * Pulling/writing info to/from database
* Now PHP stands for: PHP Hypertext Preprocessor
* It is a general purpose programming language (intended for web development)
    * Web Application Development
    * Dynamic Web Page Development
    * Command-line Program Development
    * Desktop GUI Application Development
* A very free and weakly/dynamically typed language
* Over 70% of the web (with known back-ends) is run using PHP
* Over 40% of known stacks include WordPress
* It powers big sites like Wikipedia and Facebook

## The ElePHPant in the Room

* A lot of freedom for better or for worse!
* Loosey goosey...
* There are lot's examples and tutorials for PHP... not all of them are good
* There are inconsistencies in the function/feature naming

## The Good!

* Elephant mascot!
* It is very widely used, so there are lots of resources!
* Well-documented
* Frequently updated
* Lots of built-in features/function (esp. for web development)
* Package Manager: Composer
* MVC frameworks: Laravel
* Great performance - it gives many of the other interpreted language a run for their money

## Common Ways to Install PHP

* Linux (Ubuntu): `apt-get install php`
* MacOS: `brew install php`
* Windows: `choco install php`

https://www.w3schools.com/php/php_compiler.asp

## Command-line Options for the PHP Interpretor

* `php --version` Check the version installed.
* `php [path/to/file.ext]` Execute the file.
* `php -a` Open an interactive shell.
* `php -r "[your test script/code]"` Run a quick one-liner!
* `php -S [address]:[port]` The current dir is served as a server.
* `php -S [address]:[port] -t [dir/to/serve]` Specify a dir to serve.

# Lighthouse Labs | Advanced Lecture: PHP Introduction

[GitHub Repository Branch](https://github.com/WarrenUhrich/lighthouse-labs-advanced-lecture-php/tree/2022.06.09-web-ft-east-04april2022) | [Vimeo Video Recording](https://vimeo.com/718405428/7f3358beec)

## The PHPlan for Today

* [X] What/why is PHP?
* [X] Using PHP
* [X] Data-Types
* [X] Include
* [X] Forms

## Running this Example

The first two examples can be run via:

* `php hello.php`
* `php data-types.php`

The rest are web pages. For best results, clone this project, `cd` into its directory, and run `php -S localhost:3000` (or a port of your choice.)

## What is PHP?

* Danish-Canadian named Rasmus Lerdorf
* Personal Home Page scripts!
* PHP Hypertext Preprocesser
* PHP can be used for CLI, GUI desktop, server-side web applications
* Weakly and dynamically typed
* Used to power the back-end of Facebook

## The ElePHPant in the room...

* It *was* slow for new releases
* Weakly / dynamically typed can make it difficult to trace values through code
* "Loosey goosey" like JavaScript
* Over 70% use PHP for back-end - there's going to be some bad code
* The functions are inconsistently named

## The Good!

* Easy to pick up
* Because it is so widely used, there are learning resources everywhere
* Well-documented
* Built-in functions for almost anything you need in web development
* Over 40% of websites use WordPress
* MVC framework: Laravel
* Package manager: Composer

- It is used by industry giants like Facebook

## Installing PHP!
- You can install manually via the official site's instructions: https://www.php.net/manual/en/install.php
- Ubuntu: `apt-get install php`
- Macintosh: `brew install php`
- Windows: `choco install php`

## Common Command-Line Options (PHP Interpretor)
- `php --version` Check if PHP is installed, and which version is handy!
- `php [path/to/file.ext]` Execute a file by path/name
- `php -a` Opens an interactive shell, great for quick tests!
- `php -r "[your test script]"` Good for quick one-line tests.
- `php -S [address]:[port]` Accessible local test server! (Not for production.)

## Data-Types
* Strings (concatenations via ., double versus single quotes)
* Integers
* Floats (/Doubles)
* Boolean (true/false)
* NULL (NULL)
* Resource
* Arrays (`array()` versus `[]` syntax, indexed and associative arrays)
* Objects (`json_encode` and `json_decode` are common for data transfer)

## Useful Tips
* You can use `include` to run another PHP file's contents in your script
* Use `var_dump()` or `print_r()` to get more info about a value
* Remember `+` is only used for mathematics in PHP, so it will attempt to convert any values to numbers on either side
* Global array variables exist for `$_GET`, `$_POST`, and `$_SESSION`, allowing for easy access and manipulation of form submissions and session-specific values

## Resources
* (Official PHP Documentation)[https://PHP.net/]
* (PHP on W3Schools)[https://www.w3schools.com/php/default.asp]
* (Programming PHP from O'Reilly)[https://www.oreilly.com/library/view/programming-php-4th/9781492054122/]
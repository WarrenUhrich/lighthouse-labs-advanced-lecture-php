# Lighthouse Labs | Advanced Lecture: PHP Introduction

[GitHub Repository Branch](https://github.com/WarrenUhrich/lighthouse-labs-advanced-lecture-php/tree/2024.03.13-web-immersive-east-a-8january2024) | [Vimeo Video Recording](https://vimeo.com/923002595/d7c9b494c0?share=copy)

* [X] What is PHP?
* [X] Why NOT use PHP - I've heard bad things...
* [X] Why USE PHP then?
* [X] Installing PHP
* [X] Some Common Command-Line Options
* [X] Data-Types
* [X] Using PHP (Some Examples)

## Running this Example

The CLI example(s) can be run via:

* `php hello.php`
* `php simplest-hello-world.php`
* `php write-to-file.php`

The rest are web pages. For best results, clone this project, navigate (`cd`) into its directory, and run `php -S localhost:8080` (or a port of your choice.) If using that port, you can enter the website via: [`http://localhost:8080`](http://localhost:8080).

## Have you heard about PHP?

* WordPress is built in PHP!
* Heard the name / about it, but not much!
* PHPMyAdmin -> Online database manager!
* Apache is often used with PHP servers!
* If not careful, there can be security holes!

## What the HECK is PHP?

* Originally developed in ~1994 by Danish-Canadian Rasmus Lerdorf.
* Originally stood for: Personal Home Page tools.
    * Guestbooks...
    * Page view counters...
    * Form submission handling...
    * Pulling / writing info to/from database...
* Now it stands for PHP Hypertext Preprocessor
* Very free; weakly / dynamically typed
* It powers the back-end of Facebook
* Over 70% of known back-ends include PHP
* Over 40% of known stacks include WordPress
* General purpose interpreted scripting language
    * Web Application Development
    * Dynamic Web Page Development
    * Command-Line Program Development
    * Desktop GUI Application Development

## The ElePHPant in the Room...

* A lot of freedom... for better or for worse!
* Loosey goosey.
* There are lots of examples / tutorials out there... not all of them are good.
* There are inconsistencies in the function names.

## The Good!

* ElePHPant mascot! How cute...
* It is very, very widely used—that there are nearly endless resources out there!
* Well-documented!
* Frequently updated.
* They have a LOT of built-in functions and features (esp. for web development) that other languages are missing out-of-the-box.
* Great performance (gives other interpreted languages a run for their money)
* MVC Framework: Laravel
* Package Manager: Composer

## How do I install/run PHP?

Check for the version you have installed first: `php --version`

If you don't already have it installed, you can install manually via the [official site's instructions](https://www.php.net/manual/en/install.php), or via an appropriate desktop package manager:

* Ubuntu: `apt-get install php`
* Macintosh: `brew install php`
* Windows: `choco install php`

To run quick easy tests online, try:
[W3Schools' Online PHP Compiler](https://www.w3schools.com/php/php_compiler.asp)

## Common Command-Line Options (PHP Interpretor)

*Note that the below should be run without square brackets (`[]`.)*

* `php --version` Check if PHP is installed, and which version is handy!
* `php [path/to/file.ext]` Execute a file by path/name
* `php -a` Opens an interactive shell, great for quick tests!
* `php -r "[your test script]"` Good for quick one-line tests.
* `php -S [address]:[port]` Accessible local test server! (Not for production.)
* `php -S [address]:[port] -t [directory to serve]` Note you can tag on `-t` with a specific directory you'd like to serve.

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

* [Official PHP Documentation](https://PHP.net/)
* [PHP on W3Schools](https://www.w3schools.com/php/default.asp)
* [Programming PHP from O'Reilly](https://www.oreilly.com/library/view/programming-php-4th/9781492054122/)

# Lighthouse Labs | Advanced Lecture: PHP Introduction

* [ ] What/why is PHP?
* [ ] Using PHP
* [ ] Data-Types
* [ ] Include
* [ ] Forms

## What the heck is PHP?

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
* They have a LOT of built-in functions and features (esp. for web development) that other languages are missing out-of-the-box.
* Great performance (gives other interpreted languages a run for their money)
* MVC Framework: Laravel
* Package Manager: Composer

## How do I install/run PHP?

Check for the version you have installed first: `php --version`

If isn't already installed, consider:

* Windows: `choco install php`
* Linux: `sudo apt install php`
* Macintosh: `brew install php`

To run quick easy tests online, try:
https://www.w3schools.com/php/php_compiler.asp

## Common CLI Options

* `php --version` Check which version we're using.
* `php -a` Interactive shell!
* `php -r "[PHP Code here!]"` This is great for quick one-line experiments.
* `php [path/to/file.php]` Executes the target file.
* `php -S localhost:3000` Serves the current directory as a web server.

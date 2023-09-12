# Lighthouse Labs | Advanced Lecture: PHP Introduction

* [ ] What is PHP?
* [ ] Why NOT use PHP - I've heard bad things...
* [ ] Why USE PHP then?
* [ ] Installing PHP
* [ ] Some Common Command-Line Options
* [ ] Data-Types
* [ ] Using PHP (Some Examples)

## What do we know about PHP?

* Nothing just yet!

## What is PHP?

* ~1994 developed by Danish-Canadian Rasmus Lerdorf
* Guestbooks, page view counters, form submissions, pulling info from, or saving info to databases
* PHP - Personal Home Page Tools
* PHP Hypertext Preprocessor
* Free to use
* Weakly / dynamically typed
* Powers the back-end of Facebook
* WordPress is a PHP project
* Over 40% of websites with known stacks use WordPress
* Over 70% of websites with known stacks use PHP
* General purpose interpreted scripting language
    * Web Application Development
    * Dynamic Web Page Development
    * Command-Line Program Development
    * Desktop GUI Application Development

## The ElePHPant in the Room...

* A LOT of freedom... for better or for worse
* "Loosey goosey"
* Not every tutorial or code snippet will be good.. because it is SO widely used and there is SO MUCH freedom..
* Inconsistency in naming of language constructs and functions

## The Good!

* ElePHPant
* Very widely used
* PHP.net has fantastic documentation
* Frequently updated
* Lots of built-in features and functions
* Package manager: Composer
* MVC Framework: Laravel

## Getting Started with PHP

Check if it installed first: `php -v`

If not, run:

* Linux: `apt-get install php`
* Mac: `brew install php`
* Windows: `choco install php`

https://www.w3schools.com/php/php_compiler.asp

## Common Command-line Options

* `php --version` - check if it is installed, and which version you're rockin'
* `php path/to/your/file.php` - execute file by path/name.
* `php -a` - opens an interactive shell.
* `php -r "[your code here]"` - run a quick one-liner from the quotes.
* `php -S localhost:8080` - accessible local test server!
* `php -S localhost:3000 -t directory/to/serve` - local test server (serve only specified directory.)

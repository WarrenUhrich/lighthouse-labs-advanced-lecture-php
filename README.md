# Lighthouse Labs | Advanced Lecture: PHP Introduction

* [X] What is PHP?
* [X] Why NOT use PHP - I've heard bad things...
* [ ] Why USE PHP then?
* [ ] Installing PHP
* [ ] Some Common Command-Line Options
* [ ] Data-Types
* [ ] Using PHP (Some Examples)

## What have you heard about PHP?

* Where I used to work our order processing was done in PHP! Used it a bit, but was mostly collaborating with the dev that was there.
* Not worked with it yet! Was used at a potential job!
* It is considered a full programming language!

## What IS PHP?

* ~1994 a Danish-Canadian named Rasmus Lerdorf invented PHP
* PHP stood for "Personal HomePage Tools"
    * Guestbooks
    * Page counters
    * Forums
    * Blogs
* Now, PHP no longer stands for Personal HomePage Tools...
* It stands for PHP Hypertext Preprocessor
* Very free; weakly/dynamically typed
* It powers the back-end of Facebook
* Over 70% of the known web uses PHP
* Over 40% of the known web uses WordPress (CMS -> Content Management System)
* PHP is a general-purpose programming language
    * Web application development
    * Dynamic web page development
    * Command-line program development
    * Desktop GUI application development

## The ElePHPant in the room...

* PHP brings with it a lot of freedom
* "Loosey goosey"
* There are lots of examples/apps out there, not all are good!
* There are many inconsistencies in how they name their constants and functions

## The Good!

* Very mature documentation!
* It is very widely used, endless resources out there!
* Frequently updated!
* They have a LOT of built-in functions/functionality
* Great performance
* MVC -> Laravel
* Package Manager -> Composer
* Elephant as a mascot

## How do I install/run PHP?

Depending on platform, easiest way is one of:
* Ubuntu/Linux: `apt-get install php`
* Macintosh: `brew install php`
* Windows: `choco install php`

Online compiler: https://www.w3schools.com/php/php_compiler.asp

## Common Command-Line Options

* `php --version` Prints the version installed.
* `php [path/to/file.php]` Execute the file.
* `php -a` This opens an interactive shell.
* `php -r "[your test script]"` Run a one-liner!
* `php -S [address]:[port]` Host a local test server!
* `php -S [address]:[port] -t [path/to/public/dir]` Host a local test server!

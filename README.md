Keel

Keel is a starter theme which is intended to pull out all of the javascript and css that Drupal usually imposes, and then
puts in just enough to make it useful.  It was built off of the Drupal theme [mothership](https://drupal.org/project/mothership),
but minus the configuration built into it - the assumption is that you want to remove all the classes unless they're really
necessary.

### Requirements:

*	Node.JS - <http://nodejs.org/>
*	Grunt / Grunt-CLI - <http://gruntjs.com/>
*	Bower - <http://bower.io/>
*	Ruby Gems
	-	compass
	-	compass-normalize
	-	compass-rgbapng
	-	sass
	-	susy -v "< 2"

### Pull the global project starter Submodule

In the terminal, CD into the theme directory and type:
* git submodule init
* git submodule update
* git submodule foreach git pull origin master
    
### Initialize the javascript components:

*	cd into your _ directory
*	npm install
*	bower install
*	grunt

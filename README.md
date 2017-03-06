#The-Dictionary
The Dictionary is a web based Application which provides user the a powerful tool to search words and their meanings.It helps people in increasing their
vocabulary and helping them better understand the material they read.
The Dictionary runs on a powerful database consisting of 1,76,023+ words.
Soon it will be able to translate the words and their meanings into Hindi Language.

##### Requirements
* XAMPP SERVER WITH 7.0.421
* PHP 7

###Setting Up
1.Install the Xampp Server version 7.0.13-0 , if you don't have it already.

2.Clone the Repository to your Machiene via git.
	
    git clone https://github.com/mark-37/The-Dictionary.git

3.Place the Cloned Repository into the `htdocs` folder of Xampp.

4.Initialize the TheDictionary/configure.php file with your Xampp Localhost settings

	$localhost = 'localhost:3306';
	$username = 'yourUserName';
	$passwd = 'yourPassword';
	$db = 'entries';

5.Download the Database from

	https://www.dropbox.com/s/nay2wivmoygea5p/dictionaryStudyTool.sql?dl=0
And Import the Database to phpMyAdmin in Xampp Control Panel.

6.That's it, Now 

	1. Run Your Xampp Server from the Control Panel.

	2. Open Your Web Browser.

	3. Type in the address bar `localhost/dictionary/TheDictionary/` to get Started. 


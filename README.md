# SubjectsPlus v4.x

SubjectsPlus is a a LAMP/WAMP application that allows you to manage a number of interrelated parts of a library website:

* Research Guides (i.e., subject, course, etc.)
* Database A-Z List
* Staff List
* FAQs
* Suggestion Box
* Videos (i.e., produced in-library)

It was originally developed at the Ithaca College Library, and primary development is now taking place at the University of Miami Libraries.
It is made available under the GNU GPL.

This repository includes a few customizations for Linn-Benton Community College

## Requirements

* PHP >= 7.3
* MySQL = 5.7
* Web server -- Apache
* JavaScript enabled for the admin to work properly. 

If you run into any missing/weird functionality, check that the following extensions are enabled for PHP:

* cURL
* MySQL
* mbstring (not necessary, but you'll need to tweak header.php without this)
* simplexml (for reading RSS feeds)
* json (some data is stored as json)
* gettext (only if you need internationalization, aka translations)
* gd (image resizing--notably for headshots and generation of video thumbnails) 


If you have MySQL 5.7 you must disable ONLY_FULL_GROUP_BY permanently. Please refer to this [stack overflow](https://stackoverflow.com/questions/23921117/disable-only-full-group-by) issue.

## Docker

Run `docker-compose up -d --build` to get a dev environment really fast!  You will need to add data to the database manually at this point.

Demo project
=============

This is demo project with some sample code. Project is running on apache with PHP 7.2 in Docker.

Project also uses third party plugins like Nextras/ORM or phpstan.

About
------------

Project aims to show approaches of structuring code in nette framework.

There is big effort for clean code and strict typing.

No fronted is implemented.


Installation
------------

The best way for launch this project is using Docker. First of all, you need to build an docker image in docker folder:

	docker-compose build

Then, you need start image by:

	docker-compose up


Code anlysis
------------

Project includes phpstan tool, which can make great static code analysis.

Phpstan could be used by:
	
	composer run-script phpstan



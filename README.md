Demo project
=============

This is demo project with some sample code. Project is running on apache with PHP 7.2 in Docker.

Project also uses third party plugins like Nextras/ORM, Nextras/Forms, Nextras/Migrations, ublaboo/datagrid or phpstan.

Nextras/ORM provide object related mapping from database.

Nextras/Forms add some cool features to nette/forms like dateTimePickers etc.

Nextras/Migrations manage database migrations.

Ublaboo/Datagrid provide really nice datagrid for rendering data with minimal effort.

Phpstan make static code checking. It guards clean code.

About
------------

Project aims to show approaches of structuring code in nette framework.

There is big effort for clean code and strict typing.

Installation
------------

The best way for launch this project is using Docker. First of all, you need to build an docker image in docker folder:

	docker-compose build

Then, you need start image by:

	docker-compose up

At the end, database should be initialized. This is task for Nextras/Migrations. In browser go to `.../migrations/run.php` and follow stated steps.

Code anlysis
------------

Project includes phpstan tool, which can make great static code analysis.

Phpstan could be used by:
	
	composer run-script phpstan



#!/bin/bash
rm src/Uni/AdminBundle/Entity/Member.php
rm src/Uni/AdminBundle/Controller/MemberController.php
rm src/Uni/AdminBundle/Form/MemberType.php
php app/console doctrine:generate:entities UniAdminBundle:Member --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:Member --format=yml --with-write --overwrite --no-interaction --route-prefix='member'
rm src/Uni/AdminBundle/Entity/Role.php
rm src/Uni/AdminBundle/Controller/RoleController.php
rm src/Uni/AdminBundle/Form/RoleType.php
php app/console doctrine:generate:entities UniAdminBundle:Role --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:Role --format=yml --with-write --overwrite --no-interaction --route-prefix='role'
rm src/Uni/AdminBundle/Entity/User.php
rm src/Uni/AdminBundle/Controller/UserController.php
rm src/Uni/AdminBundle/Form/UserType.php
php app/console doctrine:generate:entities UniAdminBundle:User --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:User --format=yml --with-write --overwrite --no-interaction --route-prefix='user'
rm src/Uni/AdminBundle/Entity/Notice.php
rm src/Uni/AdminBundle/Controller/NoticeController.php
rm src/Uni/AdminBundle/Form/NoticeType.php
php app/console doctrine:generate:entities UniAdminBundle:Notice --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:Notice --format=yml --with-write --overwrite --no-interaction --route-prefix='notice'
rm src/Uni/AdminBundle/Entity/NoticePhoto.php
rm src/Uni/AdminBundle/Controller/NoticePhotoController.php
rm src/Uni/AdminBundle/Form/NoticePhotoType.php
php app/console doctrine:generate:entities UniAdminBundle:NoticePhoto --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:NoticePhoto --format=yml --with-write --overwrite --no-interaction --route-prefix='noticephoto'
rm src/Uni/AdminBundle/Entity/Report.php
rm src/Uni/AdminBundle/Controller/ReportController.php
rm src/Uni/AdminBundle/Form/ReportType.php
php app/console doctrine:generate:entities UniAdminBundle:Report --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:Report --format=yml --with-write --overwrite --no-interaction --route-prefix='report'
rm src/Uni/AdminBundle/Entity/ReportPhoto.php
rm src/Uni/AdminBundle/Controller/ReportPhotoController.php
rm src/Uni/AdminBundle/Form/ReportPhotoType.php
php app/console doctrine:generate:entities UniAdminBundle:ReportPhoto --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:ReportPhoto --format=yml --with-write --overwrite --no-interaction --route-prefix='reportphoto'
rm src/Uni/AdminBundle/Entity/History.php
rm src/Uni/AdminBundle/Controller/HistoryController.php
rm src/Uni/AdminBundle/Form/HistoryType.php
php app/console doctrine:generate:entities UniAdminBundle:History --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:History --format=yml --with-write --overwrite --no-interaction --route-prefix='history'
rm src/Uni/AdminBundle/Entity/Frontpage.php
rm src/Uni/AdminBundle/Controller/FrontpageController.php
rm src/Uni/AdminBundle/Form/FrontpageType.php
php app/console doctrine:generate:entities UniAdminBundle:Frontpage --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:Frontpage --format=yml --with-write --overwrite --no-interaction --route-prefix='frontpage'
rm src/Uni/AdminBundle/Entity/FrontpagePhoto.php
rm src/Uni/AdminBundle/Controller/FrontpagePhotoController.php
rm src/Uni/AdminBundle/Form/FrontpagePhotoType.php
php app/console doctrine:generate:entities UniAdminBundle:FrontpagePhoto --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:FrontpagePhoto --format=yml --with-write --overwrite --no-interaction --route-prefix='frontpagephoto'
php app/console doctrine:schema:update --force
php app/console cache:clear --env=dev
php app/console cache:clear --env=prod
exit
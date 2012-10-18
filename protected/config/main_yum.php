<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'TrackStar',
    'homeUrl' => '/cctrackstar/project',
    'theme' => 'new',
    // preloading 'log' component
    'preload' => array(
        'log', // preload the log component
        'bootstrap', // preload the bootstrap component
    ),
    // autoloading model and component classes
    'import' => array(
       // 'application.modules.user.*',
        'application.modules.user.models.*',
        'application.models.*',
        'application.components.*',
        'application.modules.admin.models.*',
    ),
    'modules' => array(
// uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'gpass',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
        'admin',
        'user' => array(
            'debug' => true,
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
// enable cookie-based authentication
            'class' => 'application.modules.user.components.YumWebUser',
            'allowAutoLogin' => true,
            'loginUrl' => array('//user/user/login'),
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                'commentfeed' => array(
                    'comment/feed', 'urlSuffix' => '.xml', 'caseSensitive' => false),
                '<pid:\d+>/commentfeed' => array('comment/feed', 'urlSuffix' => '.xml', 'caseSensitive' => false),
            ),
            'showScriptName' => false,
        ),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager' => array(
          'urlFormat' => 'path',
          'rules' => array(
          'commentfeed' => array(
          'comment/feed','urlSuffix' => '.xml', 'caseSensitive' => false),
          '<pid:\d+>/commentfeed'=>array('comment/feed', 'urlSuffix'=>'.xml', 'caseSensitive'=>false),

          '<controller:\w+>/<id:\d+>' => '<controller>/view',
          '<controller:\w+>/<action:\w+>' => '<controller>/<action>',


          ),
          'showScriptName'=>false,
          ),
         */



        /*
          'db' => array(
          'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
          ),


         * 
         */
// uncomment the following to use a MySQL database
        /*
          'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=testdrive',
          'emulatePrepare' => true,
          'username' => 'root',
          'password' => '',
          'charset' => 'utf8',
          ),
         */

        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=trackstar_dev',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
        ///    'password' => 'dev59eO#nz',
            'charset' => 'utf8',
            'tablePrefix' => '',

        ),
        'errorHandler' => array(
// use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            /*   'routes' => array(
              array(
              'class' => 'CFileLogRoute',
              'levels' => 'error, warning',
              ),


             */
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error',
                ),
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'info, trace',
                    'logFile' => 'infoMessages.log',
                ),
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'warning',
                ),
            ),
        // uncomment the following to show log messages on web pages
        /*
          array(
          'class'=>'CWebLogRoute',
          ),
         */
        ),
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
        ),
        /*
          'authManager' => array(
          'class' => 'RDbAuthManager',
          'connectionID' => 'db',
          ),
          'assetManager'=>array(  // added by Kristy on Aug 24,12
          'basePath'=>realpath(dirname(__FILE__).'/../assets'),
          ),

         */

        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
        ),
    ),
    // application-level parameters that can be accessed
// using Yii::app()->params['paramName']
    'params' => array(
// this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
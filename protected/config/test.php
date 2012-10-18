<?php

return CMap::mergeArray(
        require(dirname(__FILE__) . '/main.php'), 
        array(
            'components' => array(
                'fixture' => array(
                    'class' => 'system.test.CDbFixtureManager',
                ),
        // uncomment the following lines to specify a different folder to place the test cache data
        /*
                'cache' => array(
                    'class' => 'system.caching.CFileCache',
                    'cachePath' => '/Webroot/trackstar/protected/runtime/cache/test',
                ),
         
         */
                /* uncomment the following to provide test database connection
                  'db'=>array(
                  'connectionString'=>'DSN for test database',
                  ),
                 */
                'db' => array(
                    'connectionString' => 'mysql:host=localhost;dbname=trackstar_test',
                    'emulatePrepare' => true,
                    'username' => 'root',
               ///     'password' => '',
                   'password' => 'dev59eO#nz',
                    'charset' => 'utf8',
                //  'tablePrefix' => 'tbl_',
                ),
            ),
                )
);

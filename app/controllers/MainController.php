<?php

namespace app\controllers;

use ishop\App;
use ishop\Cache;

class MainController extends AppController {

    public function indexAction() {
        $fields = \R::findAll( 'test' );
        $field = \R::findOne( 'test', 'id = ?', [2] );
//        debug( $field );

        $this->setMeta( App::$app->getProperty( 'shop_name' )  , 'Описание страницы ...', 'Ключевые слова ...' );

        $name = 'John';
        $names = ['Jane', 'Victor', 'Peter', 'Mike'];
        $age = 30;

        $cache = Cache::getInstance();
//        $cache->set( 'test', $names );

//        $cache->delete( 'test' );
        $data = $cache->get( 'test' );
        if ( !$data ) {
            $cache->set( 'test', $names );
        }
//        debug( $data );

        $this-> set( compact( 'fields', 'name', 'names', 'age' ));
    }
}
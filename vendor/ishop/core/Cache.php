<?php

namespace ishop;

class Cache {

    use TSingleton;

    public function set( $key, $data, $expire = 3600 ) {
        if ( $expire ) {
            $content['data'] = $data;
            $content['expire'] = time() + $expire;

            if ( file_put_contents( CACHE . '/' . md5( $key ) . '.txt', serialize( $content ))) {
                return true;
            }
        }
        return false;
    }

    public function get( $key ) {

        $file = CACHE . '/' . md5( $key ) . '.txt';

        if ( file_exists( $file )) {
            $content = unserialize( file_get_contents( $file ));

            if ( time() <= $content['expire'] ) {
                return $content;
            }
            unlink( $file );
        }
        return false;
    }

    public function delete( $key ) {
        $file = CACHE . '/' . md5( $key ) . '.txt';

        if ( file_exists( $file )) {
            unlink( $file );
        }
    }
}
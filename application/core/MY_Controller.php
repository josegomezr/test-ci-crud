<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller {
    public $viewData = array( );
    public function _remap( $method, $params ) {
        $method = strtolower( $_SERVER[ 'REQUEST_METHOD' ] ) . '_' . $method;
        if ( method_exists( $this, $method ) )
            return call_user_func_array( array(
                 $this,
                $method 
            ), $params );
        else
            show_error( "Method <strong>$method</strong> does not exist on class <strong>" . __CLASS__ . "</strong>" );
    }
}
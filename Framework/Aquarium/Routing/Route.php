<?php

namespace Framework\Aquarium\Routing;

use \Klein\klein as klein;

class Route extends klein
{

    /*
    App\\Controllers\\Controller@Action
    */

    public function get( $route = "*", $call = null)
    {

        if ( is_string( $call ) ) {

            $explode = explode( "@", $call );
            $controller = "App\\Controllers\\" . $explode[0] . "Controller";
            $action = $explode[1];

            $this->respond('GET', $route, function ( $request, $response, $app ) use ($controller, $action) {

                $class = new $controller();
                $class->__loadVars( $request, $response, $app );
                return $class->$action();
                
            });

        } else {

            $this->respond( "GET", $route, $call );

        }

    }

    public function set(){}
    
}

?>
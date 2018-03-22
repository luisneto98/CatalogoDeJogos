<?php

namespace Test\Controller;

/**
 * Class ClassModel
 * @package Test\Reflection
 *
 *
 * @Controller
 * @Route("/prefix3")
 */
class DilsonController
{

    /**
     * @Get(name="/rota2", alias="rote.id", middleware    =     {"Test\Middleware\ExampleMiddleware"    , "Test\Middleware\ExampleMiddleware"   , "Test\Middleware\ExampleMiddleware"})
     */
    public function method() {
        echo "Otimo";
    }

    /**
     * @Get(name="/rota3/{id}/{id2}/[{idgenilson}]", alias="route2.id")
     */
    public function method2($request, $response, $args) {
        echo "Alisson";
        print_r($args);
    }

    /**
     * @Post(name="/rota7/{id}", alias="route3.id")
     */
    public function method3() {
    }

    /**
     * @Put(name="/rota4/{id}", alias="route4.id")
     */
    public function method4() {
    }

    /**
     * @Delete(name="/rota5/{id}", alias="route5.id")
     */
    public function method5() {
        echo "Alisson baitola";
    }

}
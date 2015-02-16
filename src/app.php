<?php
use Symfony\Component\Routing;
 
$routes = new Routing\RouteCollection();
// $routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
// $routes->add('bye', new Routing\Route('/bye'));

$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => function ($request) {
        // $foo will be available in the template
        $request->attributes->set('foo', 'bar');
 
        $response = render_template($request);
 
        // change some header
        $response->headers->set('Content-Type', 'text/html');
 
        return $response;
    }
)));

$routes->add('bye', new Routing\Route('/bye', array(

    '_controller' => function ($request) {
        // $foo will be available in the template
        $request->attributes->set('foo', 'bar');
 
        $response = render_template($request);
 
        // change some header
        $response->headers->set('Content-Type', 'text/html');
 
        return $response;
    }
)));
 
return $routes;
?>
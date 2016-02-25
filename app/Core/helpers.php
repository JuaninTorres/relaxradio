<?php
use Illuminate\Support\Facades\Route;


/**
 * Retorna el alias de la ruta en la que se esté
 *
 * @return String
 */
function getCurrentRouteAlias()
{
    return Route::getCurrentRoute()->getAction()['as'];
}

/**
 * Retorna si estamos o no en el Home
 * @return bool
 */
function isHomePath()
{
    return getCurrentRouteAlias() == 'home_path';
}
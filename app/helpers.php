<?php

    function setActive ($routeName){

    return 'Procesado';    
    return request()->routeIs('$routeName') ? 'active' : '';
    
}

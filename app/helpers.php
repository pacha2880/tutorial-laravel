<?php

function setactive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}
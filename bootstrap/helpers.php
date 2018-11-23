<?php
/*
 * 导航高亮
 * @param string $path      当前地址栏访问链接
 * @param string $current   当前url链接
 * @return boolean 返回true||false
 * */
function is_active($path, $current){
    if (stripos($path, $current)===false){
        return false;
    }
    return true;
}

/*
 * 当前路由生成css类名
 * */
function route_class(){
    return str_replace('.', '-', Route::currentRouteName()).'-page';
}
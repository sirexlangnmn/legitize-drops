<?php

class Config {

    /*
     * I don't know if this path will work on the actual server.
     * Incase it won't work. try to change the path here.
     *  
     */
    
    public static function css_path(){
        return '../../..' . '/view/assets/css/';
    }

    public static function js_path(){
        return '../../..' . '/view/assets/js/';
    }

    public static function template_path(){
        return '../../..' . '/view/templates/';
    }

    public static function library_css_path(){
        return '../../..' . '/library/css/';
    }

    public static function library_js_path(){
        return '../../..' . '/library/css/';
    }
}
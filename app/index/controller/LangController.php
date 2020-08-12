<?php


namespace app\index\controller;


class LangController
{
    public function changeLang(){
        $lang = input('lang');
        switch ($lang) {
            case 'en':
                cookie('think_lang', 'en-us');
                break;
            case 'zn':
                cookie('think_lang', 'zh-cn');
                break;
            default:
                cookie('think_lang', 'zh-cn');
                break;
        }
    }

}
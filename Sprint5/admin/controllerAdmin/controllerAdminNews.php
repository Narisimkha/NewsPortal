<?php
class controllerAdminNews {
    // list News
    public static function NewsList() {

        $arr = modelAdminNews::getNewsList();
        include_once('viewAdmin/newsList.php');
    }
}// class
?>
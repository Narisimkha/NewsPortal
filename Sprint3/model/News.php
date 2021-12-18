<?php
class News {

    public static function getLast3News() {
        $query = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
        $db = new database();
        $arr = $db->getAll($query);
        //echo 'start site3';
        return $arr;
    }
    public static function getAllNews() {
        $query = "SELECT * FROM news ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getNewsByCategoryID($id) {
        $query = "SELECT * FROM news where category_id=".(string)$id." ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getNewsByID($id) {
        $query = "SELECT * FROM news where id=".(string)$id;
        $db = new database();
        $n = $db->getOne($query);
        return $n;
    }
}
?>
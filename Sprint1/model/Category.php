<?php
class Category {

    public static function getAllCategory() {
        $query = "SELECT * FROM category";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
}
<?php
class Comments {
    public static function insertComment($c, $id) {
    $query="INSERT INTO `comments` (`id`, `news_id`, `text`, `date`) VALUES (NULL, '".$id."', '".$c."',
    CURRENT_TIMESTAMP)";
    $db = new database();
    $q = $db->executeRun($query);
    return $q;

    }

    public static function getCommentByNewsID($id) {
        $query = "SELECT * FROM comments WHERE news_id=".(string)$id." ORDER BY id DESC";
        //echo $query;
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getCommentsCountByNewsID($id) {
    $query="SELECT count(id) as 'count' FROM comments WHERE news_id=".(string)$id;
    $db = new database();
    $c = $db->getOne($query);
    return $c;

    }
}
        

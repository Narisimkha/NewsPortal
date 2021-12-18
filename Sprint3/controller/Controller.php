<?php

class Controller {
    public static function StartSite() {
        //echo 'start site1';
        $arr = News::getLast3News();
        include_once 'view/start.php';
        //echo 'start site2';
    }
    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }
    public static function AllNews() {
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }
    public static function NewsByCatID($id) {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }
    public static function NewsByID($id) {
        $n = News::getNewsByID($id);
       // echo 'ccccccccccc';
        include_once 'view/readnews.php';
    }
    public static function error404() {
        include_once 'view/error404.php';
    }

    public static function InsertComment($c, $id) {
    Comments::InsertComment($c, $id);
    // self::NewsById(id);
    header('Location:news?id='.$id.'#ctable');
    }
    //список комментариев
    public static function Comments($newsid) {
        // echo 'aaaaaaaaa';
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::CommentsByNews($arr);
    }
    //количество комментариев к новости
    public static function CommentsCount($newsid) {
        $arr = Comments::getCommentsCountByNewsID($newsid);
         ViewComments::CommentsCount($arr);
    }
    //ссылка - переход к списку коментариев
    public static function CommentsCountWithAncor($newsid) {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::CommentsCountWithAncor($arr);
    }
    //--------------------------------- РЕГИСТРАЦИЯ
//    public static function registerForm()
//    {   
//        // echo '22222222222';
//        include_once('view/formRegister.php');
//    }   
//    public static function registerUser()
//    {   
//        $result = Register::registerUser();
//        
//        include_once('view/answerRegister.php');
//    }
}
// end class
// $c - текст комментария
//  id - номер новости
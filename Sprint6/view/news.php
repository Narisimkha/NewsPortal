<?php
class ViewNews {

    public static function NewsByCategory ($arr) {
        //echo 'start site6';
        //var_dump($arr);
        foreach ($arr as $value) {
            
            echo '<img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"width=150 height=120 /><br>';
            echo "<h2>".$value['title']."</h2>";
            Controller::CommentsCount($value['id']);
            echo "<a href='news?id=".$value['id']."'>Edasi</a><br>";
        }
        //echo 'start site7';
    }
    public static function AllNews ($arr) {
        foreach ($arr as $value) {
            echo "<li>".$value['title'];
            Controller::CommentsCount($value['id']);
            echo "<a href='news?id=".$value['id']."'>Edasi</a></li><br>";
        }
    }
    public static function ReadNews ($n) {
        echo "<h2>".$n['title']."</h2>";
        Controller::CommentsCountWithAncor($n['id']);   
        echo '<br><img src="data:image/ipeg;base64,'.base64_encode($n['picture']).'"
        width=250 height=200/><br>';   

        echo "<p>".$n['text']."</p>";
        }
    //Добавить методы для других видов представления новостей
    }//end class
    

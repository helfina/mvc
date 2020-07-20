<?php 
class Articles
{
    public $id;
    public $title;
    public $sentence;
    public $content;
    public $date;
    public $id_admin;
    public $id_category;
    public $id_image;

    public function __construct($id)
    {
        global $db;

        $id = str_secur($id);

        $reqArticle = $db->prepare('SELECT `articles`.*, `images`.`image`, `categories`.`nom`, `admins`.`firstname`
        FROM `articles` 
            LEFT JOIN `images` ON `images`.`id_article` = `articles`.`id` 
            LEFT JOIN `categories` ON `articles`.`id_category` = `categories`.`id` 
            LEFT JOIN `admins` ON `admins`.`id_image` = `images`.`id`
        WHERE `articles`.`id` = ?
        
        ');

        $reqArticle->execute([$id]);
        $data = $reqArticle->fetch();
        $this->id = $id;
        $this->title = $data['title'];
        $this->sentence = $data['sentence'];
        $this->content = $data['content'];
        $this->date = $data['date'];
        $this->id_admin = $data['id_admin'];
        $this->id_category = $data['id_category'];
        $this->id_image = $data['id_image'];        
    }


        
    /**
     * getAllArticles Envois tous les articles
     *
     * @return void
     */
    static function getAllArticles(){

            global $db;

            $reqArticle = $db->prepare('SELECT `articles`.*, `images`.`image`, `categories`.`nom`, `admins`.`firstname`
            FROM `articles` 
                LEFT JOIN `images` ON `images`.`id_article` = `articles`.`id` 
                LEFT JOIN `categories` ON `articles`.`id_category` = `categories`.`id` 
                LEFT JOIN `admins` ON `admins`.`id_image` = `images`.`id`;
            ');
            $reqArticle->execute([]);
            return $reqArticle->fetchAll();
    }
    
    static function getLastArticles(){

        global $db;

        $reqArticle = $db->prepare('SELECT `articles`.*, `categories`.`nom`, `images`.`image`, `admins`.`firstname` FROM `articles` LEFT JOIN `categories` ON `articles`.`id_category` = `categories`.`id`, `images` LEFT JOIN `admins` ON `admins`.`id_image` = `images`.`id` ORDER BY `articles`.`date` DESC 
        ');
        $reqArticle->execute([]);
        return $reqArticle->fetchAll();
    }

    static function readArticle(){

           global $db;

        $reqArticle = $db->prepare('SELECT `articles`.*, `categories`.`nom`, `images`.`image`, `admins`.`firstname` FROM `articles` LEFT JOIN `categories` ON `articles`.`id_category` = `categories`.`id`, `images` LEFT JOIN `admins` ON `admins`.`id_image` = `images`.`id` WHERE `id` = ? 
        ');
        $reqArticle->execute([]);
        return $reqArticle->fetchAll();

    }

    static function deleteArticle(){
        global $db;

        $reqArticle = $db->prepare('DELETE articles.* FROM articles WHERE id = ?
        ');
        $reqArticle->execute([]);
        return $reqArticle->fetchAll();
    }
    
    static  function editArticle(){
        global $db;

        $reqArticle = $db->prepare('UPDATE articles SET title = ?,sentence = ?, content = ?,id_admin = 1, id_category = ?, id_image = ?, date_edit = NOW() WHERE id = ?
        ');
        $reqArticle->execute([]);
        return $reqArticle->fetchAll();
    }

    static function redactArticle(){
        global $db;

        $reqArticle = $db->prepare('INSERT INTO `articles` (`id`,`title`,`description`,  `content`, `date`, `id_admin`, `id_category`, `id_image` )
        VALUE(?,?,?,?,NOW(),1,?)
        ');
        $reqArticle->execute([]);
        return $reqArticle->fetchAll();
    }
}
<?php 
class Articles
{
    public $id;
    public $title;
    public $sentence;
    public $content;
    public $date;
    public $admin;
    public $category;
    public $image;

    function __construct($id)
    {
        global $db;

        $id = str_secur($id);

        $reqArticle = $db->prepare('SELECT `articles`.*, `images`.`id_article`, `admins`.`id`, `categories`.* FROM `articles` LEFT JOIN `images` ON `images`.`id_article` = `articles`.`id` LEFT JOIN `admins` ON `admins`.`id_image` = `images`.`id` LEFT JOIN `categories` ON `articles`.`id_category` = `categories`.`id`
        WHERE `articles`.`id` = ?
        
        ');

        $reqArticle->execute([$id]);
        $data = $reqArticle->fetch();
        $this->id = $id;
        $this->title = $data['title'];
        $this->content = $data['content'];
        $this->sentence = $data['sentence'];
        $this->date = $data['date'];
        $this->admin = $data['firstname'] . '' . $data['lastname'];
        $this->category = $data['id_category'];
        
    }


        
    /**
     * getAllArticles Envois tous les articles
     *
     * @return void
     */
    static function getAllArticles(){

            global $db;

            $reqArticle = $db->prepare('SELECT `articles`.*, `images`.`id_article`, `admins`.`id`, `categories`.* FROM `articles` LEFT JOIN `images` ON `images`.`id_article` = `articles`.`id` LEFT JOIN `admins` ON `admins`.`id_image` = `images`.`id` LEFT JOIN `categories` ON `articles`.`id_category` = `categories`.`id`
            ');
            $reqArticle->execute([]);
            return $reqArticle->fetchAll();
    }
    
    static function getLastArticles(){

        global $db;

        $reqArticle = $db->prepare('SELECT `articles`.*, `images`.`id_article`, `admins`.`id_article`, `categories`.* FROM `articles` LEFT JOIN `images` ON `images`.`id_article` = `articles`.`id` LEFT JOIN `admins` ON `admins`.`id_image` = `images`.`id` LEFT JOIN `categories` ON `articles`.`id_category` = `categories`.`id` ORDER BY `articles`.`id` DESC LIMIT 0, 25
        ');
        $reqArticle->execute([]);
        return $reqArticle->fetchAll();
}
}
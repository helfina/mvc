<?php 
class Articles
{
    public $id;
    public $title;
    public $sentence;
    public $date;
    public $author;
    public $category;

    function __construct($id)
    {
        global $db;

        $id = str_secur($id);

        $reqArticle = $db->prepare('
        SELECT a.*, au.firstname, au.lastname, c.name AS category
        FROM articles a
        INNER JOIN authors au  ON au.id = a.author_id
        INNER JOIN categories c ON c.id = a.categories_id
        WHERE a.id = ?
        
        ');

        $reqArticle->execute([$id]);
        $data = $reqArticle->fetch();
        $this->id = $id;
        $this->title = $data['title'];
        $this->content = $data['content'];
        $this->sentence = $data['sentence'];
        $this->date = $data['date'];
        $this->author = $data['firstname'] . '' . $data['lastname'];
        $this->category = $data['category'];
        
    }


        
    /**
     * getAllArticles Envois tous les articles
     *
     * @return void
     */
    static function getAllArticles(){

            global $db;

            $reqArticle = $db->prepare('
            
            SELECT a.*, au.firstname, au.lastname, c.name AS category
            FROM articles a
            INNER JOIN authors au  ON au.id = a.author_id
            INNER JOIN categories c ON c.id = a.category_id

            ');
            $reqArticle->execute([]);
            return $reqArticle->fetchAll();
    }
    static function getLastArticles(){

        global $db;

        $reqArticle = $db->prepare('
        SELECT a.*, au.firstname, au.lastname, c.name AS category
        FROM articles a
        INNER JOIN authors au  ON au.id = a.author_id
        INNER JOIN categories c ON c.id = a.category_id
        ORDER BY DESC
        LIMIT 1
        ');
        $reqArticle->execute([]);
        return $reqArticle->fetchAll();
}
}
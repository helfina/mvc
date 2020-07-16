if($_GET['page'] == 'admin'){
        $page = trim(strtolower($_GET['admin']));

        include_once 'controllers/' . $page . 'controller.php';
        include_once 'models/' . $page . '_model.php';
        include_once 'views/' . $page . 'view.php';
    }
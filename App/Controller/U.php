<?
class u extends Controller
{

    function __construct()
    {
    }
    function profile($id_user)
    {
        if (isset($_COOKIE['id_user'])) {
            $model = $this->getModel('User');
            $model_posts = $this->getModel('Posts');
            if (isset($_COOKIE['id_user'])) {
                $inforUser = $model->getDataUser($_COOKIE['id_user']);
            }
            $model_like = $this->getModel('Likepost');
            $posts = $model_posts->getAllPostForUser($id_user);
            include ROOT . '/App/View/User/profile.php';
            exit;
        } else {
            include ROOT . '/App/Errors/404.php';
            exit;
        }
    }
    function posts($options)
    {
        if (isset($_COOKIE['id_user'])) {
            switch ($options) {
                case "public": {
                        $model = $this->getModel('User');
                        $model_posts = $this->getModel('Posts');
                        $inforUser = $model->getDataUser($_COOKIE['id_user']);
                        $posts = $model_posts->getAllPostPublicForUser($_COOKIE['id_user']);
                        include ROOT . '/App/View/User/public.php';
                        exit;
                        break;
                    }
                case "pending": {
                        $model = $this->getModel('User');
                        $model_posts = $this->getModel('Posts');
                        $inforUser = $model->getDataUser($_COOKIE['id_user']);
                        $posts = $model_posts->getAllPostPendingForUser($_COOKIE['id_user']);
                        include ROOT . '/App/View/User/pending.php';
                        exit;
                        break;
                    }
                case "deleted": {
                        $model = $this->getModel('User');
                        $model_posts = $this->getModel('Posts');
                        $inforUser = $model->getDataUser($_COOKIE['id_user']);
                        $posts = $model_posts->getAllPostDeleteForUser($_COOKIE['id_user']);
                        include ROOT . '/App/View/User/deleted.php';
                        exit;
                        break;
                    }
                case "uncensored": {
                        $model = $this->getModel('User');
                        $model_posts = $this->getModel('Posts');
                        $inforUser = $model->getDataUser($_COOKIE['id_user']);
                        $posts = $model_posts->getAllPostUncensoredForUser($_COOKIE['id_user']);
                        include ROOT . '/App/View/User/uncensored.php';
                        exit;
                        break;
                    }
                default: {
                        include ROOT . '/App/Errors/404.php';
                        exit;
                    }
            }
        } else {
            include ROOT . '/App/Errors/404.php';
            exit;
        }
    }
}

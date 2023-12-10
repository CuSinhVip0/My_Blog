<?
class Admin extends Controller
{

    function __construct()
    {
        if ($_COOKIE['id_user'] != 'root') {
            header("Location: /");
        }
    }
    function logout()
    {
        setcookie('id_user', '', time() - 3600, '/');
        header("Location: /login");
    }

    function dashboard($options = null)
    {
        if (isset($_COOKIE['id_user'])) {
            switch ($options) {
                case 'public': {
                        $model = $this->getModel('Posts');
                        $posts = $model->getAllPostwithUser();
                        include ROOT . '/App/View/Admin/public.php';
                        exit;
                        break;
                    }
                case 'pending': {
                        $model = $this->getModel('Posts');
                        $posts = $model->getAllPostPendingWithUser();
                        include ROOT . '/App/View/Admin/pending.php';
                        exit;
                    }
                default: {
                        header("Location: /admin/dashboard/public");
                    }
            }
        } else {
            include ROOT . '/App/Errors/404.php';
            exit;
        }
    }
}

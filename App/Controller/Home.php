<?
class Home extends Controller
{

    function __construct()
    {
        if (isset($_COOKIE['id_user']) && $_COOKIE['id_user'] == 'root') {
            setView("/admin/dashboard/public");
            exit;
        }
    }
    function index()
    {
        $model = $this->getModel('User');
        if (isset($_COOKIE['id_user'])) {
            $inforUser = $model->getDataUser($_COOKIE['id_user']);
        }
        $model_post = $this->getModel('Posts');
        $posts = $model_post->getAllPostwithUser();
        $posts_see = $model_post->getAllPostwithTopSee();
        include ROOT . '/App/View/Home/index.php';
        exit;
    }
    function logout()
    {
        unset($_SESSION['name_user']);
        setcookie('id_user', '', time() - 3600, '/');
        header("Location: /");
    }
    public function profile()
    {
        $model = $this->getModel('User');
        $inforUser = $model->getDataUser($_COOKIE['id_user']);
        include ROOT . '/App/View/Home/profile.php';
        exit;
    }
    public function editprofile()
    {

        $name = $_POST['name'];
        $birth =  $_POST['birth'];
        $sex =  $_POST['sex'];

        $model = $this->getModel('User');
        $model->update($_COOKIE['id_user'], $name, $birth, $sex);
        header("Location: /home/profile");
    }

    public function create_blog()
    {
        $model = $this->getModel('User');
        if (isset($_COOKIE['id_user'])) {
            $inforUser = $model->getDataUser($_COOKIE['id_user']);
        }


        include ROOT . '/App/View/Home/createBlog.php';
        exit;
    }

    public function save_blog()
    {
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $model = $this->getModel('Posts');
        $model->insertPost(uniqid(), $title, $content, $_COOKIE['id_user']);
        header("Location: /home/create-blog");
    }
}

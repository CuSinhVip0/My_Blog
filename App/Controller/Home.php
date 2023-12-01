<?
class Home extends Controller
{
    public $model;
    function __construct()
    {
        $this->model = $this->getModel('User');
    }
    function index()
    {
        $model = $this->getModel('Posts');
        $posts = $model->getAllPostwithUser();
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
        $inforUser = $this->model->getDataUser($_COOKIE['id_user']);
        include ROOT . '/App/View/Home/profile.php';
        exit;
    }
    public function editprofile()
    {
        $name =  $_POST['name'];
        $birth =  $_POST['birth'];
        $sex =  $_POST['sex'];

        $this->model->update($_COOKIE['id_user'], $name, $birth, $sex);
        header("Location: /home/profile");
    }

    public function create_blog()
    {
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

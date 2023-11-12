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

        if (isset($_COOKIE['id_user'])) {
            $inforUser = $this->model->getDataUser($_COOKIE['id_user']);
            //lấy name của user hiện tại để show
            if (!empty($inforUser)) {
                $_SESSION['name_user'] = $inforUser[0]['name'];
            }
        }
        include ROOT . '/App/View/Home/index.php';
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
}

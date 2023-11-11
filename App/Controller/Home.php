<?
class Home extends Controller
{
    public $model;
    function __construct()
    {
    }
    function index()
    {
        include ROOT . '/App/View/Home/index.php';
    }
    function logout()
    {
        unset($_SESSION['id']);
        setcookie('username', '', time() - 3600, '/');
        header("Location: /");
    }

    public function chuyenkhoa()
    {
        include ROOT . '/App/View/Home/chuyenkhoa.php';
    }
    public function profile()
    {
        $this->model = $this->getModel('User');
        $inforUser = $this->model->getDataUser($_COOKIE['username']);
        //lấy id của user hiện tại để editprofile
        if (!empty($inforUser)) {
            $_SESSION['id'] = $inforUser[0]['id'];
        }
        include ROOT . '/App/View/Home/profile.php';
        exit;
    }
    public function editprofile()
    {
        $name =  $_POST['name'];
        $birth =  $_POST['birth'];
        $sex =  $_POST['sex'];
        $this->model = $this->getModel('User');
        $this->model->update($_SESSION['id'], $name, $birth, $sex);
        header("Location: /home/profile");
    }
}

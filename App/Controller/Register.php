<?

class Register extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        if (isset($_COOKIE['id_user']))
            setView("/");
        include ROOT . '/App/View/Register/index.php';
    }
    public function doregister()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $model = $this->getModel('Account');
        $account = $model->getAcc($username);
        if (!empty($account)) {
            !isset($_SESSION['returnError']) && $_SESSION['returnError'] =  "Tài khoản đã tồn tại rồi thằng lon";
            setView('/register');
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $id_user = uniqid();
            //tạo account
            $model->addAccount('account', $id_user, $username, $password);

            //tạo profile trống;
            $profile = $this->getModel('User');
            $profile->insert($id_user, null, null, null);

            setView('/login');
        }
    }
}

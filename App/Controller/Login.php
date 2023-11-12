<?
class Login extends Controller
{

    public function __construct()
    {
    }

    public function index()
    
    {
        if(isset($_COOKIE['username']))
            setView("/");
        include ROOT . '/App/View/Login/index.php';
    }
    function dologin()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        //lấy data từ model
        $model = $this->getModel('Account');
        $acc = $model->getAcc( $username);

        // xử lý data
        //username invalid
        if (empty($acc)) {
            !isset($_SESSION['returnError']) && $_SESSION['returnError'] = 'Tài khoản không đúng';
            setView('/login');
        } else {

            //account invalid
            $x = password_verify($password, $acc[0]['password']);
            if ($acc[0]['password'] == $x) {

                //tao cookie
                setcookie('id_user', $acc[0]['id_user'], time() + (86400 * 30), "/");
                
                setView("/");
            } else { //password invalid
                !isset($_SESSION['returnError']) && $_SESSION['returnError'] = 'Mật khẩu sai kìa thằng lone';
                setView('/login');
            }
        }
    }
}

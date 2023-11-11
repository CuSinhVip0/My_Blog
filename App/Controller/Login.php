<?
class Login extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        include ROOT . '/App/View/Login/index.php';
    }
    function dologin()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $model = $this->getModel('Data');
        $acc = $model->getAcc('account', $username);


        if (empty($acc)) {
            $this->setView('Login/index', ['error' => 'Tài khoản không đúng']);
        } else {
            $x = password_verify($password, $acc[0]['password']);
            if ($acc[0]['password'] == $x) {
                
                //tao cookie
                setcookie('username', $acc[0]['username'], time() + (86400 * 30), "/");
                
                //xử lý account không phải là patient
                if ($acc[0]['role'] == 'PHARMACIST')
                    $this->setView('/pharmacist');
                else
                    $this->setView('/');
            } else
                $this->setView('Login/index', ['error' => 'Sai mật khẩu không đúng']);
        }
    }
    public function setView($view, $data = [])
    {
        extract($data);
        if (!empty($data))
            include ROOT . '/App/View/' . $view . '.php';
        else
            header('Location: ' . $view);
    }
}

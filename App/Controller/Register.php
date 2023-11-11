<? 

class Register extends Controller{
    public function __construct(){

    }
    public function index (){
        include ROOT . '/App/View/Register/index.php';
    }
    public function doregister(){
        $username =$_POST['username'];
        $password =$_POST['password'];
        $model = $this->getModel('Data');
        $account = $model->getAcc('account', $username);
        if(!empty($account))
            $this->setView('Register/index', ['error'=>'Tài khoản đã tồn tại rồi thằng lone']);
        else{
            $password = password_hash($password,PASSWORD_DEFAULT);
            
            //tạo account
            $model->addAccount('account',$username,$password);

            //tạo profile trống;
            $profile = $this->getModel('User');
            $profile->insert(uniqid(),null,null,null, $username);
            
            $this->setView('/login');
        }
    }

    public function setView($view ,$data=[]){
        extract($data);
        if(!empty($data))
            include ROOT . '/App/View/'.$view.'.php';
        else
            header("Location: ".$view);
    }
}
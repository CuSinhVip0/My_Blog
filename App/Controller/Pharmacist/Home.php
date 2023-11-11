<?

class Home 
{
   
    public function __construct()
    {
        
    }
    public function index(){
        include ROOT . '/App/View/Pharmacist/index.php';
    } 
    public function logout(){
        unset($_SESSION['username']);
        header("Location: /login");
    }
}
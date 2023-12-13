<?
class Search extends Controller
{

    function __construct()
    {
    }
    function index()
    {
        $modeluser = $this->getModel('User');
        $model = $this->getModel('Posts');
        $model_like = $this->getModel('Likepost');

        $q = trim($_GET['q']);
        if (isset($_COOKIE['id_user'])) {
            $inforUser = $modeluser->getDataUser($_COOKIE['id_user']);
        }
        $posts_see = $model->getAllPostwithTopSee();

        $words = explode(' ', $q); // Tách chuỗi đầu vào thành một mảng các từ
        $regexPattern = implode('|', $words); // Tạo pattern regex, đảm bảo escape các ký tự đặc biệt
        $posts = $model->search($regexPattern);
        include ROOT . '/App/View/Search/index.php';
        exit;
    }
}

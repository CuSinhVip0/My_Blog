<?

class Post extends Controller
{

    public function detail($id)
    {
        $model = $this->getModel('Posts');


        $content = $model->getAllPostwithId($id);
        if ($content == null) {
            include ROOT . '/App/Errors/404.php';
            exit;
        }
        include ROOT . "/App/View/Post/detail.php";
        exit;
    }
}

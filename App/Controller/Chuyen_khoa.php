<?


class Chuyen_khoa extends Controller
{

    public function __construct()
    {
    }

    public function index($pages = null)
    {
        if (!empty($pages)) {

            if (file_exists(ROOT . '/App/View/Chuyenkhoa/'.$pages)) {
                include ROOT . '/App/View/Chuyenkhoa/' . $pages;
                exit;
            }
            else {
                include ROOT . '/App/Errors/404.php';
                exit;
            }
        }
        else {
            $model= $this->getModel('Specialist');
            $listSpecialist =$model->getlistSpecialist();
            var_dump($listSpecialist);
            
            include ROOT . '/App/View/Home/chuyenkhoa.php';
            exit;
        }
    }
}

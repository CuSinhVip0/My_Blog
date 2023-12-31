<?

class Post extends Controller
{

    public function detail($id, $status = 1)
    {


        $model = $this->getModel('Posts');
        $model_like = $this->getModel('Likepost');

        if (isset($_COOKIE['id_user'])) {
            $model_user = $this->getModel("User");
            $inforUser = $model_user->getDataUser($_COOKIE['id_user']);
        }

        if ($status == "pending") {
            $status = 0;
        } else if ($status == "uncensored") {
            $status = 2;
        }
        $content = $model->getAllPostwithId($id, $status);
        if ($status == 0 || $status == 2) {

            if ($content[0]['id_user'] != $_COOKIE['id_user']) {
                include ROOT . '/App/Errors/404.php';
                exit;
            }
        }
        $posts_see = $model->getAllPostwithTopSee();
        $model->updateSeePost($id);
        if ($content == null) {
            include ROOT . '/App/Errors/404.php';
            exit;
        }
        include ROOT . "/App/View/Post/detail.php";
        exit;
    }
    public function delete($id)
    {
        $model = $this->getModel('Posts');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $time = date("Y-m-d H:i:s");
        $model->updateStatusDeletePost(-1, $time, $id);
        header("location: {$_SERVER['HTTP_REFERER']}");
    }
    public function deleteVip($id)
    {
        $model = $this->getModel('Posts');
        $model->deletePost($id);
        header("location: {$_SERVER['HTTP_REFERER']}");
    }

    public function restore($id)
    {
        $model = $this->getModel('Posts');
        $model->updateStatusRestorePost(0, null, $id);
        header("location: {$_SERVER['HTTP_REFERER']}");
    }

    public function updateStatusAccept($id)
    {
        $model = $this->getModel('Posts');
        $model->updateStatusPost(1, $id);
        header("location: {$_SERVER['HTTP_REFERER']}");
    }
    public function updateStatusDecept($id)
    {
        $model = $this->getModel('Posts');
        $model->updateStatusPost(2, $id);
        header("location: {$_SERVER['HTTP_REFERER']}");
    }
}

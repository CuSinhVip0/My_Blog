<?
class Author extends Controller
{

    function __construct()
    {
    }
    function profile($id_user)
    {

        if (isset($_COOKIE['id_user']) && $_COOKIE["id_user"] == $id_user) {
            header("Location: /u/profile/" . $_COOKIE['id_user']);
        }
        $model_like = $this->getModel('Likepost');
        $model = $this->getModel('User');
        $model_posts = $this->getModel('Posts');
        if (isset($_COOKIE['id_user'])) {
            $inforUser = $model->getDataUser($_COOKIE['id_user']);
        }
        $inforUser2 = $model->getDataUser($id_user);
        $posts = $model_posts->getAllPostPublicForUser($id_user);
        include ROOT . '/App/View/Author/profile.php';
        exit;
    }
}

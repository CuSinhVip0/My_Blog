<?

class Posts extends Db
{

    function getAllPost()
    {
        return $this->selectQuery("select * from post ");
    }

    function getAllPostwithTopSee()
    {
        return $this->selectQuery("select * from post join user on post.id_user = user.id_user order by luotxem desc LIMIT 3");
    }
    function getAllPostwithUser()
    {
        return $this->selectQuery("select * from post join user on post.id_user = user.id_user where trangthai = 1 order  by createAt desc");
    }

    function getAllPostPendingWithUser()
    {
        return $this->selectQuery("select * from post join user on post.id_user = user.id_user where trangthai = 0 order by createAt desc");
    }
    function insertPost($id, $title, $content, $id_ser)
    {
        return $this->selectQuery("insert into post (id,title,content,id_user) values(?,?,?,?)", [$id, $title, $content, $id_ser]);
    }
    function getAllPostwithId($id)
    {
        return $this->selectQuery("select * from post join user on post.id_user = user.id_user where id = ?", [$id]);
    }
    function getAllPostForUser($id)
    {
        return $this->selectQuery("select * from post where id_user = ? and trangthai >= 0", [$id]);
    }
    function getAllPostPublicForUser($id)
    {
        return $this->selectQuery("select * from post where id_user = ? and trangthai = 1", [$id]);
    }
    function getAllPostPendingForUser($id)
    {
        return $this->selectQuery("select * from post where id_user = ? and trangthai = 0", [$id]);
    }
    function  getAllPostDeleteForUser($id)
    {
        return $this->selectQuery("select * from post where id_user = ? and trangthai = -1", [$id]);
    }


    function deletePost($id)
    {
        return $this->selectQuery("delete from post where id = ?", [$id]);
    }

    function updateStatusPost($status, $id)
    {
        return $this->selectQuery("update post set trangthai = ? where id = ?", [$status, $id]);
    }
    function updateStatusDeletePost($status, $date, $id)
    {

        return $this->selectQuery("update post set trangthai = ?,deleteAt = ?  where id = ?", [$status, $date, $id]);
    }
    function updateStatusRestorePost($status, $date, $id)
    {

        return $this->selectQuery("update post set trangthai = ?,deleteAt = ?  where id = ?", [$status, $date, $id]);
    }


    function updateSeePost($id)
    {
        $see = $this->selectQuery("select luotxem from post where id = ?", [$id]);
        $final = $see[0]['luotxem'] + 1;

        return $this->selectQuery("update post set luotxem = ?  where id = ?", [$final, $id]);
    }

    function search($q)
    {
        return $this->selectQuery("select * from post  join user on post.id_user = user.id_user where trangthai = 1 and title REGEXP ? ", [$q . "?"]);
    }
}

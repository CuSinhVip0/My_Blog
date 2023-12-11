<?

class LikePost extends Db
{
    function like($id_user, $id_post)
    {
        return $this->selectQuery("insert into likepost (id_user,id_post) values(?,?)", [$id_user, $id_post]);
    }
    function dislike($id_user, $id_post)
    {
        return $this->selectQuery("delete from likepost where id_user = ? and id_post = ?", [$id_user, $id_post]);
    }
    function  getPostwithLikeforUser($id, $id_post)
    {
        return $this->selectQuery("select * from likepost where id_user = ? and id_post = ?", [$id, $id_post]);
    }
}

<?

class Posts extends Db
{

    function getAllPost()
    {
        return $this->selectQuery("select * from post ");
    }
    function getAllPostwithUser()
    {
        return $this->selectQuery("select * from post join user on post.id_user = user.id_user order by createAt desc");
    }
    function insertPost($id, $title, $content, $id_ser)
    {
        return $this->selectQuery("insert into post (id,title,content,id_user) values(?,?,?,?)", [$id, $title, $content, $id_ser]);
    }
    function getAllPostwithId($id)
    {
        return $this->selectQuery("select * from post where id = ?", [$id]);
    }
}

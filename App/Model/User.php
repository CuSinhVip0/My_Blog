<?
class User extends Db
{
    public function getDataUser($user)
    {
        return  $this->selectQuery("select * from user where id_user = ?", [$user]);
    }

    public function update($id, $name, $birth, $sex)
    {
        $this->updateQuery("update user set name = ?,birth = ?,sex = ? where id_user = ?", [$name, $birth, $sex, $id]);
    }
    public function insert($id, $name)
    {
        $this->updateQuery("insert into user (id_user,name) values(?,?)", [$id, $name]);
    }
    public function updateImage($hinh, $id)
    {
        $this->updateQuery("update user set hinh= ? where id_user = ?", [$hinh, $id]);
    }
}

<?

class Account extends Db
{

    public function getAcc($username)
    {
        $stm = $this->connect->prepare("select username,password,id_user from account where username=?");
        $stm->execute([$username]);
        return $stm->fetchAll();
    }

    public function addAccount($table, $id_user, $username, $password)
    {
        $stm = $this->connect->prepare("insert into $table(id_user,username,password) values(?,?,?)");
        $stm->execute([$id_user, $username, $password]);
    }
    public function deleteAcc($id_user)
    {
        return $this->deleteQuery("delete from account where id_user= ?", [$id_user]);
    }
}

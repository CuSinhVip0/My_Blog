<?

class Account extends Db
{
   
    public function getAcc($username){
        $stm = $this->connect->prepare("select username,id_user from account where username=?");
        $stm->execute([$username]);
        return $stm->fetchAll();
    }
   
    public function addAccount($table,$id_user,$username,$password){
        $stm = $this->connect->prepare("insert into $table(id_user,username,password) values(?,?,?)");
        $stm->execute([$id_user,$username,$password]);
    }
    
}

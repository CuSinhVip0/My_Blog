<?

class Data extends Db
{
   
    public function getAcc($table,$username){
        $stm = $this->connect->prepare("select * from $table where username=?");
        $stm->execute([$username]);
        return $stm->fetchAll();
    }
   
    public function addAccount($table,$username,$password){
        $stm = $this->connect->prepare("insert into $table(username,password) values(?,?)");
        $stm->execute([$username,$password]);
    }
    
}

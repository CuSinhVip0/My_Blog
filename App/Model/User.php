<?


class User extends Db{
    public function getDataUser($user){
       return  $this->selectQuery("select id, name,birth,sex from account join patient on account.username=patient.username where patient.username = ?", [$user] );
    }

    public function checkInforPatient($user){
        return $this->selectQuery("select * from patient where id = ?", [$user] );
    }

    public function update ($id,$name,$birth,$sex){
        $this->updateQuery("update patient set name = ?,birth = ?,sex = ? where id = ?",[$name,$birth,$sex,$id]);
    }
    public function insert ($id,$name,$birth,$sex,$username){
        $this->updateQuery("insert into patient (id,name,birth,sex,username) values(?,?,?,?,?)",[$id,$name,$birth,$sex,$username]);
    }
}
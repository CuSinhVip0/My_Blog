<?

class Specialist extends Db{
    
    public function getlistSpecialist()
    {
        return $this->selectQuery("SELECT ten FROM specialist");
      
    }
}
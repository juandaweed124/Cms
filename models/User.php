<?php
//Herencia
class User extends Database{

    public function all(){
        $result = parent::connect()->prepare("SELECT * FROM test");
        $result->execute();
        return $result->fetchAll();
    }

    public function insertar($data){
        try{    
            $result = parent::connect()->prepare("INSERT INTO `test` (`name`) VALUES (?)");
            $result->bindParam(1, $data['name'], PDO::PARAM_STR);                
            return $result->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }


    private function update_user($data){
        try {
            $SQL = 'UPDATE test SET name_user = ?WHERE id = ?';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array(
                    $data['name'],
                    $data['id']
                )
            );
        } catch (Exception $e) {
            die('Error Administrator(update_user) '.$e->getMessage());
        } finally{
            $result = null;
        }
    }

    function set_update_user($data){
        $this->update_user($data);
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 2019-03-24
 * Time: 21:57
 */

require_once "configDB.php";

class Conexao
{



  private static $pdo;

    private function __construct() {
        self::getInstance();
    }

    public static function getInstance() {
        if (!isset(self::$pdo)) {   
            try {
                self::$pdo = new PDO(DRIVER.":host=" . HOSTNAME . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASS);
            } catch (PDOException $e) {
                print "Erro: " . $e->getMessage();
            }
        }
        return self::$pdo;
 }

    // private static $pdo;

    // public function __construct($dbname, $host, $user, $senha) {

    //     try {
    //         $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
    //     } catch (PDOException $e) {
    //         echo "Erro com banco de dados: ".$e->getMessage();
    //         exit();
    //     }catch(Exception $e){
    //          echo "Erro generico: ".$e->getMessage();
    //         exit();
    //     }
        
    // }  

}
// require_once "dao/daoAutor.php";


 
?>
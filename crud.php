
<?php 

try{
    $pdo = new PDO("mysql:dbname=ESTUDO;host=localhost", "root","");
}catch(PDOException $e){
    echo "Erro com o Banco de Dados".$e->getMessage();
}catch(Exception $e){
    echo "Erro Genérico".$e->getMessage();
}

//--------------------------------INSERT -----------////////////


$res = $pdo -> prepare("INSERT INTO pessoa(nome, telefone, email)
VALUES (:nome, :telefone, :email)");//precisa de parametro


//1°forma de inserir
//bindValue aceita funçoes variaveis... mais usado
//$res -> bindValue(":nome","Miriam");
//$res -> bindValue(":telefone","51980808080");
//$res -> bindValue(":email","Miriam@gmail.com");
//$res -> execute();

//2°forma de inserir
/// bindparam só aceita so variaveis
//$nome = "Miriam";
//$res -> bindParam(":nome",$nome);


//3°forma de inserir
$pdo->query("INSERT INTO pessoa(nome, telefone, email)
VALUES ('João','51923232323', 'joao@gmail.com')");


?>
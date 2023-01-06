
<?php 
//---------------------CONEXAO-----------------------------////////
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
//$pdo->query("INSERT INTO pessoa(nome, telefone, email)
//VALUES ('João','51923232323', 'joao@gmail.com')");



//------------------------------DELETE---------------////

//1°forma de deletar
//$res = $pdo -> prepare("DELETE FROM pessoa Where id = :id");
//$id = 2;
//$res -> bindValue(":id",$id);
//$res -> execute();

//2°forma de deletar
//$pdo -> query("DELETE FROM pessoa WHERE id = '3'");


//------------------------------UPDATE---------------////

//$res = $pdo -> prepare("UPDATE pessoa SET email = :email where id = :id");
//$res -> bindValue(":email","Joao02@gmail.com");
//$res -> bindValue(":id",'4');
//$res -> execute();


//$pdo -> query("UPDATE pessoa set email = 'joaoBnana@gmail.com' WHERE id = '5'")
?>
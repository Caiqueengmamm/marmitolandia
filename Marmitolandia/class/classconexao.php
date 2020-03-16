<?php
abstract class classconexao{
    public function conectaDB(){
        try{
            $Con=new mysqli("localhost","root","","marmitolandia");
            return $Con;
        }catch (Exeption $Erro) {
            return $Erro->getMessage();
        }
    }
}
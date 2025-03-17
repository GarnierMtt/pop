<?php
    class liste{
        private $membres;

        public function __construct($nombre, $nom, $richess, $action, $type){
            
        }
    }

    class Individu{
        protected $id;
        protected $richess;
        protected $action;


        public function __construct($id, $r, $a){
            $this->id = $id;
            $this->richess = $r;
            $this->action = $a;
        }


        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i;
        }

        public function getRichess(){
            return $this->richess;
        }
        public function setRichess($r){
            $this->richess = $r;
        }

        public function getAction($id){
            return $this->action;
        }
        public function setAction($a){
            $this->action = $a;
        }

        public function setTransac($t){
            if($t){
                $this->richess++;
            }else{
                $this->richess--;
                if($this->richess < 1){
                    return false;
                }
            }
            return true;
        }
    }

    class Special extends Individu{
        private $ranceur;

        public function getRanceur(){
            echo 'Utilisateurs bannis par '.$this->id. ' : ';
            foreach($this->ranceur as $valeur){
                echo $valeur .', ';
            }
        }
        public function setRanceur($r){
            $this->ranceur[] .= $r;
        }

        public function getAction($id){
            foreach($this->ranceur as $value){
                if($value == $id){
                    return !$this->action;
                }
            }
            return $this->action;
        }

    }
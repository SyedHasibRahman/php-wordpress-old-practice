<?php
    class Language24{
        private $category;
        private $framework;

        public function setCat($a){
            $this->category = $a;
        }
        public function getCat(){
            return $this->category;
        }

        public function setFramework($b){
            $this->framework = $b;
        }
        public function getFramework(){
            return $this->framework;
        }

        public function __clone(){
            $lang = new Language24();
            $lang->setFramework($this->framework);
            return $lang;

        }
    }

?>
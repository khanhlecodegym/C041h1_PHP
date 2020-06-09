<?php
    class Shape {
        protected $name;

        public function __construct($name = null) {
            $this->setName($name);
        }

        public function setName($newName) {
            if(strlen($newName) > 10 || empty($newName) ) {
                echo "Tên Quá dài hoặc bị rỗng <br>";
                $this->name = 'No Name';
            } else {
                $this->name = $newName;
            }
        }

        public function getName() {
            return $this->name;
        }
    }

    

    class Rectangle extends Shape {
        protected $width;
        protected $height;

        public function __construct($name = null, $width = 0, $height = 0) {
            parent::__construct($name);
            $this->setWidth($width);
            $this->setHeight($height);
        }

       function setWidth($newWidth = 0) {
        if($newWidth < 0 ) {
            echo "Width khong duoc am <br>";
            $this->width = 0;
        } else {
            $this->width = $newWidth;
        }}

        function setHeight($newHeight = 0) {
            if($newHeight < 0 ) {
                echo "Width khong duoc am <br>";
                $this->height = 0;
            } else {
                $this->height = $newHeight;
            }
       }
       
       public function calculateArea() {
           return $this->width * $this->height;
       }
    }

    $rect = new Rectangle("thanh", -10, 10);
    echo "Dien tich " . $rect->calculateArea();
?>
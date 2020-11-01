<?php
  class Page{
    private $name;
    private $title;
    private $html;
    private $css;
    private $js;
    private $id;
    function __construct($id,$name,$title,$html,$css,$js){
      $this->id = $id;
      $this->name = $name;
      $this->title= $title;
      $this->html = $html;
      $this->css = $css;
      $this->js = $js;
    }
    function getId(){return $this->id;}
    function getName(){return $this->name;}
    function getTitle(){return $this->title;}
    function getHtml(){return $this->html;}
    function getCss(){return $this->css;}
    function getJs(){return $this->js;}
    
    static function addPage($html,$css,$js,$name,$title,$branch){
      global $mysqli;
      $stmt = $mysqli->prepare("INSERT INTO `pages` (`html`,`css`,`js`,`name`,`title`,`branch`) VALUES (?,?,?,?,?,?)");
      $stmt->bind_param('sssssi', $html,$css,$js,$name,$title,$branch);
      $stmt->execute();
      $stmt->close();
      return json_encode(["result"=>"ok"]);
    }
    
    static function getPageByName($uri){ // ["","course","the_development_of_Christianity_in_the_first_millennium_AD","lecture_1"]
      global $mysqli;
      $endPath = $uri[count($uri)-1]; // "lecture_1"
      $catalog = $uri[count($uri)-2]; // "the_development_of_Christianity_in_the_first_millennium_AD"
      
      if(!empty($catalog)){
        for($i=count($uri)-2; $i>0; $i--){ // $i=0
          $subDir = $uri[$i]; // "course"
          $dir = $uri[$i-1]; // ""
          $stmt = $mysqli->prepare("SELECT `pages`.`id` FROM `pages`,`branches` WHERE `pages`.`name`=? AND `branches`.`name`=? AND `branches`.`id`=`pages`.`branch`");
          $stmt->bind_param('ss',$subDir,$dir);
          $stmt->execute();
          if(!$stmt->get_result()->num_rows) return new Page(0,0,"404","<h1>404 - страница не найдена</h1>","","");
        }
      }
      
      $stmt = $mysqli->prepare("SELECT pages.id,pages.name, pages.html, pages.css, pages.js, pages.title FROM pages, branches WHERE `pages`.`name`=? AND `branches`.`name`=? AND `branches`.`id`=`pages`.`branch`");
      $stmt->bind_param('ss',$endPath,$catalog);
      $stmt->execute();
      $result = $stmt->get_result();
      $row = $result->fetch_assoc();
      $stmt->close();
      if(empty($row)) return new Page(0,0,"404","<h1>404 - страница не найдена</h1>",$row['css'],$row['js']);
      return new Page($row['id'],$row['name'],$row['title'],$row['html'],$row['css'],$row['js']);
    }
    
    
    
    static function getPagesJSON(){
      global $mysqli;
      $result = $mysqli->query("SELECT * FROM pages WHERE 1");
      $data = $result->fetch_all( MYSQLI_ASSOC );
      return json_encode( $data );
    }
    static function getPageByIdJSON($pageId){
      global $mysqli;
      $stmt = $mysqli->prepare("SELECT * FROM pages WHERE `id`=?");
      $stmt->bind_param('i',$pageId);
      $stmt->execute();
      $result = $stmt->get_result();
      $data = $result->fetch_assoc();
      return json_encode( $data );
    }
    static function editPageById($pageId,$name,$title,$html,$css,$js){
      global $mysqli;
      $stmt = $mysqli->prepare("UPDATE `pages` SET `name`=?,`title`=?,`html`=?,`css`=?,`js`=? WHERE `id`=?");
      $stmt->bind_param('sssssi',$name,$title,$html,$css,$js,$pageId);
      $stmt->execute();
      $stmt->close();
      return json_encode(["result"=>"ok"]);
    }
    static function getBranchesJSON(){
      global $mysqli;
      $result = $mysqli->query("SELECT * FROM branches WHERE 1");
      $data = $result->fetch_all( MYSQLI_ASSOC );
      return json_encode( $data );
    }
    static function addBranch($name,$name_rus){
      global $mysqli;
      $stmt = $mysqli->prepare("INSERT INTO `branches` (`name`,`name_rus`) VALUES (?,?)");
      $stmt->bind_param('ss', $name,$name_rus);
      $stmt->execute();
      $stmt->close();
      return json_encode(["result"=>"ok"]);
    }
    static function getPagesbyBranchIdJSON($branchId){
      global $mysqli;
      $stmt = $mysqli->prepare("SELECT * FROM pages WHERE `branch`=?");
      $stmt->bind_param('i',$branchId);
      $stmt->execute();
      $result = $stmt->get_result();
      $data = $result->fetch_all( MYSQLI_ASSOC );
      return json_encode( $data );
    }
    
  }
  
?>
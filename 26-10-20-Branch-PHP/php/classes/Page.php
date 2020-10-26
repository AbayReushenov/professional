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
    
    static function addPage($html,$css,$js,$name,$title){
      global $mysqli;
      $stmt = $mysqli->prepare("INSERT INTO `pages` (`html`,`css`,`js`,`name`,`title`) VALUES (?,?,?,?,?)");
      $stmt->bind_param('sssss', $html,$css,$js,$name,$title);
      $stmt->execute();
      $stmt->close();
      return json_encode(["result"=>"ok"]);
    }
    
    static function getPageByName($name){
      global $mysqli;
      $stmt = $mysqli->prepare("SELECT * FROM pages WHERE `name`=?");
      $stmt->bind_param('s',$name);
      $stmt->execute();
      $result = $stmt->get_result();
      $row = $result->fetch_assoc();
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
    
    static function addBranch($name,$name_rus){
      global $mysqli;
      $stmt = $mysqli->prepare("INSERT INTO `branches` (`name`,`name_rus`) VALUES (?,?)");
      $stmt->bind_param('ss',$name,$name_rus);
      $stmt->execute();
      $stmt->close();
      return json_encode(["result"=>"ok"]);
    }
    
    static function getBranches(){
      global $mysqli;
      $result = $mysqli->query("SELECT * FROM branches WHERE 1");
      $data = $result->fetch_all( MYSQLI_ASSOC );
      return json_encode( $data );
    }
  }
  
?>
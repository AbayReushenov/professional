<?php
  class Page{
    static function addPage($html,$css,$js,$name,$title){
      global $mysqli;
      $stmt = $mysqli->prepare("INSERT INTO `pages` (`html`,`css`,`js`,`name`,`title`) VALUES (?,?,?,?,?)");
      $stmt->bind_param('sssss', $html,$css,$js,$name,$title);
      $stmt->execute();
      $stmt->close();
      return json_encode(["result"=>"ok"]);
    }
    static function getPagesJSON(){
      global $mysqli;
      $result = $mysqli->query("SELECT * FROM `pages` WHERE 1");
      $data = $result->fetch_all( MYSQLI_ASSOC );
      return json_encode($data);
    }
    static function getPage($pageId){
        global $mysqli;
        $stmt = $mysqli->prepare("SELECT * FROM `pages` WHERE `id`=?");
        $stmt->bind_param("i",$pageId);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        return json_encode($row);
    }
    static function editPage($html,$css,$js,$name,$title, $id){
        global $mysqli;
        $stmt = $mysqli->prepare("UPDATE `pages` SET `html`=?, `css`=?, `js`=?, `name`=?, `title`=?  WHERE `id`=?");
        $stmt->bind_param("sssssi",$html,$css,$js,$name,$title,$id);
        $stmt->execute();
        $stmt->close();
        return json_encode(["result"=>"ok"]);
      }
  }
?>
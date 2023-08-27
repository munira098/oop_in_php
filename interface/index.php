interface flower {  
  public function colour();  
}  

interface fruit{
    public function test();
}
  
class rose implements flower,fruit {  
  public function colour() {  
    echo "Red !!!";  
  }
  public function test(){
    echo "good in test";
  }  
}  
  
$flowerOne = new rose();  
$flowerOne->colour(); 
$flowerOne->test();  

?>  


<?php 
 
 
class Select { 
 
public function __construct(public $name, public array $fruitList)
    {
        $this->name = $name;
        $this->fruitList = $fruitList;
    }
    public function __invoke()
    {
        $html = "<select name='fruit' id='fruit'>";

        foreach ($this->fruitList as $key => $fruit) {
            $html .= "<option value={$key}>{$fruit}</option>";
        }

         $html .= "</select>";
          return $html;
    }

} 

$result = new Select('fruit', [234 => 'яблоки', 456=> 'груши']); 
echo $result(); 

?> 
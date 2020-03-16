<?php

class Request
{
    private $errors = [];

    
    public function isPost()
    {
       return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public function clear($str)
    {
        return strip_tags( trim($str) );
    }

    public function getField($inputName)
    {
        $value = $_POST[$inputName] ?? '';

        return $this->clear($value);
    }

    public function required($inputName)
    {
        $value = $this->getField($inputName);
        if(empty($value))
        {
            $this->errors[$inputName][] = 'поле обязательно к заполнению';
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * проверяет длину строки из поля на минимальное значения
     * @param $inputName
     * @param $min
     */
    public function min($inputName, $min)
    {
		$value = $this->getField($inputName);
		

			if( mb_strlen($value)  < $min) {
				$this->errors[$inputName][] = "Минимум симвлолв = $min";
			}
		
    }


    /**
     * проверяет длину строки из поля на максимальное значения
     * @param $inputName
     * @param $max
     */
    public function max($inputName, $max)
    {
		$value = $this->getField($inputName);
		
		if(mb_strlen($value) > $max) {
			$this->errors[$inputName][] = "Привышен лимит символов максимум = $max";
		}
		
    }

    /**
     * проверка значения на максимальность
     * метод проверяет является ли введенное значение email
     * @param $inputName - имя поля
     */
    public function isEmail($inputName)
    {
        //todo
    }

    /**
     * проверка значения на максимальность
     * @param $inputName
     * @param $minValue
     */
    public function maxValue($inputName, $maxValue)
    {

    }

    /**
     * проверка значения на минимальность
     * @param $inputName
     * @param $minValue
     */
    public function minValue($inputName, $minValue)
    {

    }


    
}
	$reqClass = new Request;

	if($reqClass->isPost())
	{
		$reqClass->required('title');
		$reqClass->required('annotation');
		
		$reqClass->min('title' , 5);
		$reqClass->max('title' , 10);

		echo json_encode($reqClass->getErrors());
	}
?>
<?php

class Request
{
	private $errors = []; // массив ошибок

	public function isPost()
	{
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}


	public function required($nameInput)
	{
		$inputData = $_POST[$nameInput] ?? '';
		$data = $this->clearData($inputData);

		if(empty($data))
		{
			$this->errors[$nameInput][] = 'Поле обазятельно к заполнению';
		}
	}


	public function getErrors()
	{
		return $this->errors;
	}

	public function min($inputTitle, $min)
	{
        $inputData = $_POST[$inputTitle] ?? '';
        if(mb_strlen(($inputData))<$min){
            $this->errors[$inputTitle][] = "Запись должно быть больше {$min} ";
        }
	}

	public function max($inputTitle, $max)
	{
        
	}

	/**
	* данный метод очищает входящий текст от концевых пробелов и тегов
	* @param String $text
	* @param String
	*/
	public function clearData($text)
	{
		//todo
		return $text;
	}


}

?>
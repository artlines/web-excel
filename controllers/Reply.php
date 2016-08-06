<?php
namespace Controllers;

class Reply
{
	private $data = array();

	function __construct()
	{
		$this->render('main', $data="");
	}

	//Получение отчетa
	private function getData($form_data)
	{
		parse_str($this->validate($form_data), $data);

		if ($result = $this->db->getReply($data)) {
			//var_dump($result);
			//Подготовка данных к выводу
			$this->render('result', $result);
		}else{
			throw new Exception('Не могу получить данные!'.var_dump($result));
		}
	}

	//Подключение шаблонов
	private function render($template, $data)
	{
		$this->data = $data;
        include_once($_SERVER['DOCUMENT_ROOT'].'/view/'.$template.'.php');
    }

    private function validate($string)
    {
    	return (strip_tags(trim($string)));
    }

}
	
?>
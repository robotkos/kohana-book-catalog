<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public $template = 'basic';

	public function action_index()
	{
		// basic
		$url = $this->request->param('id');
		
		$data = array();
		
		
		$tree = new Model_Tree();
		

		$data['categorys'] = $tree->getCategoryUrl();
		

		if(!$data['categorys'])
		{
			throw new HTTP_Exception_404('Запрашиваемая категория не найдена');
			return;
		}
		

		$this->template = View::factory('basic', $data);
		
		//home

		$data_content = array();

		$material = new Model_Material();

		$data_content = $material->getBooksID();

		if(!$data_content)
				{
					throw new HTTP_Exception_404('Запрашиваемая категория не найдена');
					return;
				}

		$this->template->contentpost = $data_content;
	}


} // End Welcome

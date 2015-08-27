<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Materials extends Mycontroller
{
	public $template = 'basic';
	
	public function action_category()
	{
		$url = $this->request->param('id');

		$data = array();
		
		$category = new Model_Category('tree');
		$material = new Model_Material();
		
		$category_id = $category->getCategoryIdByUrl($url);
		if(!$category_id)
		{
			throw new HTTP_Exception_404('Запрашиваемая категория не найдена');
			return;
		}

		$data['materials'] = $material->getMaterialsByCategory($category_id);
		//$data['category_name'] = $category_info['name'];

		$this->template->content =  View::factory('materialsview', $data);	
	}

	public function action_showcontent()
	{
		$data = array();

		$id = $this->request->param('id');

		$material = new Model_Material();

		$data = $material->showMaterialById($id);

		if(!$data)
		{
			throw new HTTP_Exception_404('Запрашиваемая статья не найдена');
			return;
		}

		$this->template->content =  View::factory('contentview', $data);

	//Категории для сайдбара
		
		$tree = new Model_Tree();

		$data_cat = array();

		$data_cat = $tree->getCategoryUrl();

		if(!$data_cat)
		{
			throw new HTTP_Exception_404('Запрашиваемая категория не найдена');
			return;
		}

		$this->template->categorys = $data_cat;
	}
	
}
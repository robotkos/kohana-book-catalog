<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Mycontrolleradmin {

	public $template = 'basic_admin';

	public function action_index()
	{

		$category = new Model_Category('tree');
		$data['categories'] = $category->getTree();
		

			if(isset($_POST['btnsubmit']))
		{
			$categoryName = Arr::get($_POST, 'categoryName', '');
			$parentId = Arr::get($_POST, 'parentId', '');  
			$url = Arr::get($_POST, 'url', '');
			$categoryimage = Arr::get($_POST, 'categoryimage', '');             

			$res = $category->catInsert($parentId, array('name'=>$categoryName, 'url'=>$url, 'icon_url'=>$categoryimage));               

			if($res)
			{
				//Request::initial()->redirect('admin');
				HTTP::redirect('admin');
			}
			else
			{
				$data['errors'] = $category->getErrors();
			}
		}
		
		if(isset($_POST['materialsavebtn']))
		{
			$categoryId = Arr::get($_POST, 'categoryId', '');
			$content = Arr::get($_POST, 'content', '');
			$name = Arr::get($_POST, 'name');
			$material_image = Arr::get($_POST, 'material_image');


			$material = ORM::factory('Material');	
			$material->addMaterial($categoryId, $content,$name, $material_image);
			
			HTTP::redirect('admin');
		}

		$this->template->content =  View::factory('adminview', $data);
		
	}

} // End Welcome

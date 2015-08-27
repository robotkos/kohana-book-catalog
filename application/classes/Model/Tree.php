<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tree extends ORM
{
	protected $_table_name = 'tree';

	protected $_has_many = array(
		'materials' => array(
			'model'       => 'Material',
			'foreign_key' => 'category_id',
		),
	);

	public function categoryInfoByUrl($url)
	{
		$tree = ORM::factory('Tree', array('url'=>$url));

		if($tree->loaded())
		{
			$result['id'] = $tree->id;
			$result['name'] = $tree->name;
			$result['url'] = $tree->url;  // мое

			return $result;
		}
		else
		{
			return FALSE;
		}
	}

	public function contentCategoryById($id)
	{
		$tree = ORM::factory('Tree', array('id'=>$id));

		if($tree->loaded())
		{
			$result = array();
			$res = $tree->materials->find_all();

			foreach($res as $item)
			{
				$result[] = array('id' => $item->id, 'content' => $item->content, 'name' => $item->name, 'material_image' => $item->material_image);
			}

			return $result;
		}
		else
		{
			return FALSE;
		}
	}
	public function getCategoryUrl()
	{
				return DB::select()
			->from('tree')
			->where('level', '<>', "0")
			->execute()
			->as_array();
	}

		public function getBooksID()
	{
				return DB::select()
			->from('tree')
			//->order_by("1", 'desc')
			//->LIMIT("3")
			->execute()
			->as_array();
	}
}
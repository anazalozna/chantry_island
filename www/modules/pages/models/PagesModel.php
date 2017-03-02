<?php
namespace Pages;
/**
 * Created by Ana Zalozna
 * Date: 20/02/17
 * Time: 5:48 PM
 */
class PagesModel extends \Model
{
	/**
	 * Find data for requested page
	 *
	 * @param string $alias
	 * @return array
	 */
	public function getPage (string $alias) :array{
		$sql = "SELECT content, main_title FROM pages
				WHERE alias = :alias";
		return $this->queryRow($sql, ['alias' => $alias]);
	}

}
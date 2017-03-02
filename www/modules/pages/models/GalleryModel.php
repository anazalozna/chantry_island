<?php
/**
 * Created by Ana Zalozna
 * Date: 20/02/17
 * Time: 8:24 PM
 */

namespace Pages;

class GalleryModel extends \Model
{
	/**
	 * Get all the thumbnails
	 *
	 * @return array
	 */
	public function getThumbs() :array{
		$sql = "SELECT thumb, id, title FROM gallery";
		return $this->queryRows($sql);
	}

	/**
	 * Get a full-size image data
	 *
	 * @param int $id
	 * @return array
	 */
	public function getImageData(int $id) :array{
		$sql = "SELECT img, text FROM gallery
				WHERE id = :id";
		return $this->queryRow($sql, ['id' => $id]);
	}
}
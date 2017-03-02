<?php
namespace News;
/**
 * Created by Ana Zalozna
 * Date: 22/02/17
 * Time: 7:25 PM
 */
class NewsModel extends \Model
{
	/**
	 * Get limited num of news per page
	 *
	 * @param int $page
	 * @return array
	 */
	public function getNews (int $page = 1) :array {
		$sql = "SELECT img, title, text, date FROM news 
				LIMIT :start_news, :max_news";

		$limits = [
			"start_news"=> ($page - 1) * \Config::get('global')['news_limit'],
			"max_news"=> \Config::get('global')['news_limit']
		];

		$stmt = $this->_pdo->prepare($sql);
		$stmt->bindParam(':start_news', $limits['start_news'], \PDO::PARAM_INT);
		$stmt->bindParam(':max_news', $limits['max_news'], \PDO::PARAM_INT);
		$stmt->execute();

		$data = [];
		foreach ($stmt as $row){
			$data[] = $row;
		}
		return $data;
	}

	/**
	 * Get a number of all news
	 *
	 * @return int
	 */
	public function getNewsQnt () :int{
		$sql = "SELECT COUNT(*) as num FROM news";

		$result = $this->queryRow($sql);

		return (int) $result['num'];
	}
}
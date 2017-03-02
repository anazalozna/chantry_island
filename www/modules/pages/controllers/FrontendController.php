<?php
namespace Pages;
/**
 * Created by Ana Zalozna
 * Date: 20/02/17
 * Time: 5:29 PM
 */
class FrontendController extends \Controller
{
	/**
	 * Get page info from db
	 */
	public function actionPage () {
		$model = \App::getInstance()->loadModel('pages/pages');
		if($_SERVER['REQUEST_URI'] == '/') {
			$page_data = $model->getPage('home');
			\App::getInstance()->setParam('header', $this->renderPartial('frontend/header', [], true));
		}else{
			$page_data = $model->getPage($_GET['alias']);
		}

		$data = [
			'content' => $page_data['content'],
			'main_title' => $page_data['main_title'],
		];

		\App::getInstance()->setParam('title', 'Chantry Island');
		$this->render('frontend/page', $data);
	}

	public function actionGallery () {
		$model = \App::getInstance()->loadModel('pages/gallery');
		$data = [
			'images' => $model->getThumbs(),
		];

		$this->render('frontend/gallery', $data);
	}

	public function actionImage () {
		$model = \App::getInstance()->loadModel('pages/gallery');
		$data = [
			'image' => $model->getImageData($_GET['id']),
		];

		$this->renderJson($data);
	}

}
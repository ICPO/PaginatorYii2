<?php


namespace app\widgets;

use yii;

class Paginator extends \yii\base\Widget
{
    public $pagination = '';

    private $url;

    public function init()
    {
        parent::init();
        if (empty($this->pagination)) return false;

        $this->setURL();
    }

    public function run()
    {
        $current_page = $this->getCurrentPage();
        $total_pages = ceil($this->pagination->totalCount / $this->getPageSize());

        if ($current_page > $total_pages) {
            $current_page = $total_pages;
        }

        return $this->render('Pagination/generator',
            [
                'total_pages' => $total_pages,
                'url' => $this->url,
                'current_page' => $current_page
            ]);

    }

    /**
     * Получить текущую страницу
     * @return int
     */
    private function getCurrentPage()
    {
        $page = 1;
        if (!empty(Yii::$app->request->get('page')) && is_numeric((Yii::$app->request->get('page')))){
            $page = (int)Yii::$app->request->get('page');
        }
        return $page;
    }

    /**
     * Метод получения свойства пагинации - сколько выводить записей на 1й странице
     * @return mixed
     */
    private function getPageSize()
    {
        $size = $this->pagination->defaultPageSize;
        if ($this->pagination->getpageSize()) {
            $size = $this->pagination->getpageSize();
        }

        return $size;

    }

    /**
     * Сформировать корректный URL
     */
    private function setURL()
    {
        $get = Yii::$app->request->get();
        $get['page'] = '';
        $this->url = '?'.http_build_query($get);
    }
}

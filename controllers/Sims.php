<?php namespace Skippy\Fms\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Sims extends Controller
{
public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController', 'Backend\Behaviors\RelationController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';



    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Skippy.Fms', 'fms', 'sims');

        $this->postFormWidget = $this->createOrderPostFormWidget();

    }
protected $postFormWidget;
    public function onLoadCreatePostForm()
    {
        $this->vars['postFormWidget'] = $this->postFormWidget;
        $this->vars['departmentId'] = post('manage_id');
        return $this->makePartial('post_create_form');
    }

    protected function createOrderPostFormWidget()
{
    $config = $this->makeConfig('$/skippy/fms/models/postlist/fields.yaml');
    $config->alias = 'postForm';
    $config->arrayName = 'Postlist';
    $config->model = new \Skippy\Fms\Models\Postlist;
    $widget = $this->makeWidget('Backend\Widgets\Form', $config);
    $widget->bindToController();
    return $widget;
}
public function onCreatePost()
{
    $data = $this->postFormWidget->getSaveData();

    $model = new \Skippy\Fms\Models\Postlist;

    $model->fill($data);

    $model->save();

    $order = $this->getOrderModel();

    $order->items()->add($model, $this->itemFormWidget->getSessionKey());

    return $this->refreshOrderPostList();
}
}

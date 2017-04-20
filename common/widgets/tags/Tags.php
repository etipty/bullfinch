<?php
/**
 * @see Yii中文网  http://www.yii-china.com
 * @author Xianan Huang <Xianan_huang@163.com>
 * 图片上传组件
 * 如何配置请到官网（Yii中文网）查看相关文章
 */
namespace common\widgets\tags;

use Yii;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\web\View;
use common\widgets\tags\assets\TagsAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class Tags extends InputWidget
{
    public $config = [];
    
    public $value = '';
    
    public function init()
    {
        $_config = [

        ];
        $this->config = ArrayHelper::merge($_config, $this->config);
    }
    
    public function run()
    {
        $this->registerClientScript();        
        if ($this->hasModel()) {
            $inputName = Html::getInputName($this->model, $this->attribute);
            $inputValue = Html::getAttributeValue($this->model, $this->attribute);
            return $this->render('index',[
                'config'=>$this->config,
                'inputName' => $inputName,
                'inputValue' => $inputValue,
                'attribute' => $this->attribute,
            ]);
        } else {
            return $this->render('index',[
                'config'=>$this->config,
                'inputName' => 'file-upload',
                'inputValue'=> $this->value
            ]);
        }
    }
    
    public function registerClientScript()
    {
        TagsAsset::register($this->view);
        //$script = "FormFileUpload.init();";
        //$this->view->registerJs($script, View::POS_READY);
    }
}
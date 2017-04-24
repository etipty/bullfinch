<?php
use yii\data\Pagination;
use yii\widgets\LinkPager;
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-7-20
 * Time: 下午4:29
 */
$this->title = Yii::t('common', 'Achievements');
$this->params['breadcrumbs'][] = $this->title;

//$count = $ac->getCount();
//$totalCount = $ac->getTotalCount();
//$pages = new Pagination([ 'totalCount' =>$totalCount, 'pageSize' => 10]);
$data = $ac;
//die('ccc');

?>


<div class="box <?=$css['warper']?>">
    <a href="<?= $url ?>">
        <div class="box-header <?= $css['header'] ?>" style="">
            <i class="<?= $css['icon'] ?>"></i>

            <h3 class="box-title <?= $css['title'] ?>"><?= $title ?> </h3>
            <div class="box-tools pull-right">
                <span data-toggle="tooltip" class="badge  index-box-more"><?= Yii::t('common', 'more') ?></span>

            </div>
        </div>
    </a>
    <div class="box-body">
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover table-tab">
                                <tbody><tr >
                                    <th class="tab-th"> </th>
                                    <th class="tab-th">题目</th>
                                    <th class="tab-th">作者</th>
                                    <th class="tab-th">期刊/会议名称</th>


                                </tr>
                                <?php foreach($data as $v){ ?>
                                    <tr>
                                        <td><?= $v['publish_at'] ?></td>

                                        <td><?= $v['title'] ?></td>
                                        <td><?= $v['author'] ?></td>
                                        <td><?= $v['periodical'] ?>
                                            <br><?= $v['serial_number'] ?>
                                        </td>

                                    </tr>
                                <?php } ?>

                                </tbody>

                            </table>

                        </div>

                        <div class="box-footer clearfix">

                        </div>

                </div>



            </div>
</div>
</div>



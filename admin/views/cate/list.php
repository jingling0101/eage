<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

?>
<!--<table class="easyui-datagrid" style="width:100%;height: 100%;" data-options="rownumbers:true,singleSelect:true,url:'',method:'get',toolbar:toolbar">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th data-options="field:'itemid',width:80">Item ID</th>-->
<!--        <th data-options="field:'productid',width:100">Product</th>-->
<!--        <th data-options="field:'listprice',width:80,align:'right'">List Price</th>-->
<!--        <th data-options="field:'unitcost',width:80,align:'right'">Unit Cost</th>-->
<!--        <th data-options="field:'attr1',width:240">Attribute</th>-->
<!--        <th data-options="field:'status',width:60,align:'center'">Status</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--</table>-->
<div><?php echo '<pre/>'; print_r($data); ?></div>
<script type="text/javascript">
    var toolbar = [{
        text:'添加新栏目',
        iconCls:'icon-add',
        handler:function(){alert('add')}
    }];
</script>
</body>
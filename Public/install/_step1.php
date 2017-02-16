<?php defined('PHALAPI_INSTALL') || die('no access'); ?>
<?php include dirname(__FILE__) . DIRECTORY_SEPARATOR . '_header.php'; ?>
<div class="radius bg bouncein window window_big">
    <div class="window_title t_normal">
        <span class="icon-circle"> </span>
        <span class="icon-circle"></span>
        <span class="margin-small-left">Installation Wizard</span>
    </div>
    <div class="padding-large text-black">
        <h1 class="margin-small-bottom" >Environment Detection</h1>
        <h5 class="margin-big-bottom ">In order to ensure PhalApi work as expected, your serser need to satisfy the requirements as below.</h5>
        <table class="table table-bordered">
            <tbody>
            <?php $num = 0; ?>
            <?php foreach ($checkList as $item) { ?>
                <tr class="<?php if ($item['status'] == -1) echo 'alert alert-danger'; else if ($item['status'] == 1) echo 'alert alert-success';?>">
                    <th style="vertical-align : middle;" align="center" scope="row"><?php echo ++ $num; ?></th>
                    <th style="vertical-align : middle;"><?php echo $item['name']; ?></th>
                    <td style="vertical-align : middle; font-size: 12px"><?php echo $item['tip']; ?></td>
                    <td align="center" style="vertical-align : middle;"><?php
                        if ($item['status'] == 1) {
                            echo '<span aria-hidden="true"  class="text-green icon-check-circle"></span>';
                        } else {
                            echo '<span aria-hidden="true" class="text-red icon-times-circle"></span>';
                        }
                        ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="margin-big-top" >
            <a class="button bg-yellow margin-small-right"  href=".?step=2" role="button">  Next  </a>
            <a class="button  margin-small-right"  href=".?step=0" role="button">  Back  </a>
        </div>
    </div>
</div>
</div>

<?php include dirname(__FILE__) . DIRECTORY_SEPARATOR . '_footer.php'; ?>

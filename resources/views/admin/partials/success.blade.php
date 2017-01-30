<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-29
 * Time: 下午7:08
 */
?>

@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>
            <i class="fa fa-check-circle fa-lg fa-fw"></i> Success.
        </strong>
        {{ Session::get('success') }}
    </div>
@endif
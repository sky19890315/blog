<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-29
 * Time: 下午5:57
 */
?>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong>
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
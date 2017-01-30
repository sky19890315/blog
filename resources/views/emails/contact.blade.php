<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-30
 * Time: 上午11:45
 */
?>
<p>
    You have received a new message from your website contact form.</p><p>
    Here are the details:
</p>
<ul>
    <li>Name: <strong>{{ $name }}</strong></li>
    <li>Email: <strong>{{ $email }}</strong></li>
    <li>Phone: <strong>{{ $phone }}</strong></li>
</ul>
<hr>
<p>
    @foreach ($messageLines as $messageLine)
        {{ $messageLine }}<br>
    @endforeach
</p>
<hr>

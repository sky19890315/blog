<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-29
 * Time: 下午2:29
 */

return [
    'name' => "风雪夜归人",
    'title' => '风雪夜归人',
    'subtitle' => 'http://sunkeyi.com.cn',
    'description' => '一个友好的学习与进步的平台',
    'author' => 'sunkeyi',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
    'contact_email'=>env('MAIL_FROM'),
];
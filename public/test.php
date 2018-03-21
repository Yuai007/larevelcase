<?php
/**
 * Created by PhpStorm.
 * User: yuai
 * Date: 2018/2/28
 * Time: 上午2:27
 */

    $redis = new Redis();
    $redis->connect("127.0.0.1","6379");  //php客户端设置的ip及端口
    //存储一个 值
    $redis->set("say","hello world");
    echo $redis->get("say");     //应输出hello world



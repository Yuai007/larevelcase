@extends( 'layouts.admin' )
@section( 'content' )
    <div class="admin-biaoge">
        <div class="xinxitj">系统基本信息</div>
        <table class="am-table">
            <thead>
            <tr>
                <th>Type</th>
                <th>Info</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>操作系统</td>
                <td><?= PHP_OS?></td>
            </tr>
            <tr>
                <td>运行环境</td>
                <td><?= $_SERVER['SERVER_SOFTWARE']?></td>
            </tr>
            <tr>
                <td>PHP运行方式</td>
                <td><?= php_sapi_name()?></td>
            </tr>
            <tr>
                <td>上传附件限制</td>
                <td><?= get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?></td>
            </tr>
            <tr>
                <td>北京时间</td>
                <td><?= date( 'Y年m月d日 H时i分s秒' )?></td>
            </tr>
            <tr>
                <td>服务器域名/IP</td>
                <td><?= $_SERVER['SERVER_NAME']?> [ <?= $_SERVER['SERVER_ADDR']?> ]</td>
            </tr>
            </tbody>
        </table>

    </div>

@endsection
<?php
	$ws_server = new swoole_websocket_server('10.1.13.111',9507);
	//设置server运行时的参数
	$ws_server->set(array(
    'daemonize' => true, //是否作为守护进程
    'log_file' => __DIR__ .'/logs/web_socket.log'
	));
	//监听WebSocket连接打开事件
	$ws_server->on('open', function ($ws, $request) {
	//    $ws->push($request->fd, $request->fd.' : '."Hello\n");
	});

	//监听WebSocket消息事件
	$ws_server->on('message', function ($ws, $frame) {
    pushMessage($ws,$frame->data,$frame->fd);
	});

	//监听WebSocket连接关闭事件
	$ws_server->on('close', function ($ws, $fd) {
    echo date('Y-m-d H:i:s').' 游客ID-'.$fd.' 退出了聊天室'."\r\n";
	});

	$ws_server->start();

	//消息推送
	function pushMessage($ws,$data,$fd){
    echo date('Y-m-d H:i:s').' 游客ID-'.$fd.':'.$data."\r\n";
    foreach($ws->connections as $dd){
        $ws->push($dd, $fd.' : '.$data);
    }
	}
?>
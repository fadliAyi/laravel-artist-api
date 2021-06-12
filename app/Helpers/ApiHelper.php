<?php

if (!function_exists('diagnosticSuccess')) {
	function diagnosticSuccess($msg = '')
	{
		return [
            'diagnostics' => [
                'status' => true,
                'message' => $msg
            ]
		];
	}
}

if (!function_exists('diagnosticError')) {
    function diagnosticError($msg = '', $status = false)
    {
        return [
            'diagnostic' => [
                'status' => $status,
                'message' => $msg
            ]
        ];
    }
}

if (!function_exists('emptyRespon')) {
function emptyRespon($status = 'OK', $code = '200', $msg = '')
{
	return [
	'data' => [],
	'diagnostic' => [
		'status' => $status,
		'code' => $code,
		'message' => $msg
	]
	];
}
}
<?php
/**
 * Created by PhpStorm.
 * User: yaphper
 * Date: 2018/10/27
 * Time: 11:06 AM
 */

namespace App\Http\Controllers\Api\AccountManagerInterface;


use App\Http\Controllers\Api\AccountManager\AccountValidationResult;

interface AccountManagerInterface
{
    // 成功
    const STATUS_SUCCESS                    = 0;
    // 账户验证失败
    const STATUS_ACCOUNT_VERIFIED_FAILED    = -10001;
    // 访问频率过高
    const STATUS_TOO_FREQUENT_ACCESS        = -10002;
    // 账号过期
    const STATUS_ACCOUNT_EXPIRED            = -10003;


    public function validateAccount(): AccountValidationResult;
}
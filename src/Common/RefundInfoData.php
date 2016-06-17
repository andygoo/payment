<?php
/**
 * @author: helei
 * @createTime: 2016-06-17 18:33
 * @description:
 */

namespace Payment\Common;


use Payment\Contracts\DataStruct;

class RefundInfoData extends DataStruct
{
    // 第三方订单号
    public $transaction_id;

    // 商户唯一订单号
    public $order_no;

    // 商户退款单号
    public $refund_no;

    // 第三方退款单号
    public $transaction_refund_no;

    // 退库渠道
    public $refund_channel;

    // 退款金额
    public $refund_fee;

    // 订单总金额
    public $amount;

    // 退款笔数
    public $refund_count;

    // 退款状态
    public $refund_status;
}
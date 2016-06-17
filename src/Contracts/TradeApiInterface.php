<?php
/**
 * @author: helei
 * @createTime: 2016-06-08 11:21
 * @description: 对已经向第三方发起请求的交易，进行操作
 *  - 1. 提供查询接口
 *  - 2. 提供退款接口
 */

namespace Payment\Contracts;


interface TradeApiInterface
{
    /**
     * 查询一个订单的状态
     * @param string $value
     * @param string $key
     * @return mixed
     * @author helei
     */
    public function tradeQuery($value, $key);

    /**
     * 支付结果通知
     * @param PayNotifyInterface $notify
     *  - 异步通知的业务处理类 ，继承者，必须实现：notifyProcess方法
     *
     * @return mixed
     * @author helei
     */
    public function notify(PayNotifyInterface $notify);

    /**
     * 退款请求
     * @param array $data
     *  - $transaction_id 第三方的订单号
     *  - $order_no 商户订单号
     *  - $refund_no 商户退款单号
     *  - $amount 该笔订单总金额
     *  - $refund_fee 退款金额
     *  - $description 额外数据(退款理由)
     *
     * @return mixed
     * @author helei
     */
    public function refund(array $data);

    /**
     * 查询退款订单的状态
     * @param $value
     * @param $key
     * @return mixed
     * @author helei
     */
    public function refundQuery($value, $key);
}
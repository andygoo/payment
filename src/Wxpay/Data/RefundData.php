<?php
/**
 * @author: helei
 * @createTime: 2016-06-17 18:01
 * @description:
 */

namespace Payment\Wxpay\Data;


use Payment\Utils\StrUtil;

class RefundData extends WxBaseData
{
    public function __construct()
    {
        parent::__construct();
        $this->values = [
            'appid' => $this->config->getAppId(),
            'mch_id' => $this->config->getMchId(),
            'nonce_str' => StrUtil::getNonceStr(32),
            'refund_fee_type'   => 'CNY',
            'op_user_id'    => $this->config->getMchId()
        ];
    }

    /**
     * 设置支付宝的订单号，优先使用
     * @param string $value
     **/
    public function setTransactionId($value)
    {
        $this->values['transaction_id'] = $value;
    }
    /**
     * 获取支付宝的订单号，优先使用的值
     * @return string 值
     **/
    public function getTransactionId()
    {
        if (array_key_exists('transaction_id', $this->values)) {
            return $this->values['transaction_id'];
        }

        return null;
    }

    /**
     * 设置商户系统内部的订单号，当没提供transaction_id时需要传这个。
     * @param string $value
     **/
    public function setOutTradeNo($value)
    {
        $this->values['out_trade_no'] = $value;
    }
    /**
     * 获取商户系统内部的订单号，当没提供transaction_id时需要传这个。的值
     * @return string 值
     **/
    public function getOutTradeNo()
    {
        if (array_key_exists('out_trade_no', $this->values)) {
            return $this->values['out_trade_no'];
        }

        return null;
    }

    /**
     * 设置商户退款单号
     * @param string $value
     **/
    public function setOutRefundNo($value)
    {
        $this->values['out_refund_no'] = $value;
    }
    /**
     * 获取商户退款单号
     * @return string 值
     **/
    public function getOutRefundNo()
    {
        if (array_key_exists('out_refund_no', $this->values)) {
            return $this->values['out_refund_no'];
        }

        return null;
    }

    /**
     * 设置订单总金额，只能为整数，详见支付金额
     * @param string $value
     **/
    public function setTotalFee($value)
    {
        $this->values['total_fee'] = $value;
    }
    /**
     * 获取订单总金额，只能为整数，详见支付金额的值
     * @return string 值
     **/
    public function getTotalFee()
    {
        if (array_key_exists('total_fee', $this->values)) {
            return $this->values['total_fee'];
        }

        return null;
    }

    /**
     * 设置退款金额，只能为整数，详见支付金额
     * @param string $value
     **/
    public function setRefunFee($value)
    {
        $this->values['refund_fee'] = $value;
    }
    /**
     * 获取订单总金额，只能为整数，详见支付金额的值
     * @return string 值
     **/
    public function getRefunFee()
    {
        if (array_key_exists('refund_fee', $this->values)) {
            return $this->values['refund_fee'];
        }

        return null;
    }

    /**
     * 设置符合ISO 4217标准的三位字母代码，默认人民币：CNY，其他值列表详见货币类型
     * @param string $value
     **/
    public function setRefundFeeType($value)
    {
        $this->values['refund_fee_type'] = $value;
    }
    /**
     * 获取符合ISO 4217标准的三位字母代码，默认人民币：CNY，其他值列表详见货币类型的值
     * @return string 值
     **/
    public function getRefundFeeType()
    {
        if (array_key_exists('refund_fee_type', $this->values)) {
            return $this->values['refund_fee_type'];
        }

        return null;
    }

    /**
     * 操作员帐号, 默认为商户号
     * @param string $value
     **/
    public function setOpUserId($value)
    {
        $this->values['op_user_id'] = $value;
    }
    /**
     * 操作员帐号, 默认为商户号
     * @return string 值
     **/
    public function getOpUserId()
    {
        if (array_key_exists('op_user_id', $this->values)) {
            return $this->values['op_user_id'];
        }

        return null;
    }
}
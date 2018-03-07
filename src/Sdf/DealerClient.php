<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Shopex\Luban\Sdf;

/**
 */
class DealerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Shopex\Luban\Sdf\DealRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Deal(\Shopex\Luban\Sdf\DealRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Dealer/Deal',
        $argument,
        ['\Shopex\Luban\Sdf\Trade', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\TradeInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TradeInfo(\Shopex\Luban\Sdf\TradeInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Dealer/TradeInfo',
        $argument,
        ['\Shopex\Luban\Sdf\Trade', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\SearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TradeList(\Shopex\Luban\Sdf\SearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Dealer/TradeList',
        $argument,
        ['\Shopex\Luban\Sdf\TradeListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\TradePayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TradePay(\Shopex\Luban\Sdf\TradePayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Dealer/TradePay',
        $argument,
        ['\Shopex\Luban\Sdf\TradePayResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\TradeCancelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TradeCancel(\Shopex\Luban\Sdf\TradeCancelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Dealer/TradeCancel',
        $argument,
        ['\Shopex\Luban\Sdf\TradeCancelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\TradeAfterSaleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TradeAfterSale(\Shopex\Luban\Sdf\TradeAfterSaleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Dealer/TradeAfterSale',
        $argument,
        ['\Shopex\Luban\Sdf\TradeCancelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\TradeShipRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TradeShip(\Shopex\Luban\Sdf\TradeShipRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Dealer/TradeShip',
        $argument,
        ['\Shopex\Luban\Sdf\TradeCancelResponse', 'decode'],
        $metadata, $options);
    }

}

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
     * @param \Shopex\Luban\Sdf\Trade $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Deal(\Shopex\Luban\Sdf\Trade $argument,
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

}

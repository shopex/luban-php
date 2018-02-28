<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Shopex\Luban\Sdf;

/**
 */
class StockerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Shopex\Luban\Sdf\StockChangeResquest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Change(\Shopex\Luban\Sdf\StockChangeResquest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Stocker/Change',
        $argument,
        ['\Shopex\Luban\Sdf\StockChangeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\StockGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Shopex\Luban\Sdf\StockGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Stocker/Get',
        $argument,
        ['\Shopex\Luban\Sdf\StockGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\StockBatchGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchGet(\Shopex\Luban\Sdf\StockBatchGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Stocker/BatchGet',
        $argument,
        ['\Shopex\Luban\Sdf\StockBatchGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\StockSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Set(\Shopex\Luban\Sdf\StockSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.Stocker/Set',
        $argument,
        ['\Shopex\Luban\Sdf\StockSetResponse', 'decode'],
        $metadata, $options);
    }

}

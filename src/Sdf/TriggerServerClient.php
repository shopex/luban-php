<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Shopex\Luban\Sdf;

/**
 */
class TriggerServerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Shopex\Luban\Sdf\Trigger $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Create(\Shopex\Luban\Sdf\Trigger $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.TriggerServer/Create',
        $argument,
        ['\Shopex\Luban\Sdf\TriggerCreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\TriggerUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Update(\Shopex\Luban\Sdf\TriggerUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.TriggerServer/Update',
        $argument,
        ['\Shopex\Luban\Sdf\TriggerUpdateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\TriggerInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TriggerInfo(\Shopex\Luban\Sdf\TriggerInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.TriggerServer/TriggerInfo',
        $argument,
        ['\Shopex\Luban\Sdf\Trigger', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Shopex\Luban\Sdf\SearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TriggerList(\Shopex\Luban\Sdf\SearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/luban.TriggerServer/TriggerList',
        $argument,
        ['\Shopex\Luban\Sdf\TriggerListResponse', 'decode'],
        $metadata, $options);
    }

}

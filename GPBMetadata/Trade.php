<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: trade.proto

namespace GPBMetadata;

class Trade
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Support::initOnce();
        \GPBMetadata\Payment::initOnce();
        \GPBMetadata\Shipment::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abb0e0a0b74726164652e70726f746f12056c7562616e1a0d7061796d65" .
            "6e742e70726f746f1a0e736869706d656e742e70726f746f22c3050a0554" .
            "72616465120b0a03546964180120012809120f0a07427579657249641802" .
            "2001280912100a0853656c6c6572496418032001280912220a0653746174" .
            "757318042001280e32122e6c7562616e2e54726164655374617475731223" .
            "0a0950617953746174757318052001280e32102e6c7562616e2e50617953" .
            "7461747573122d0a0e5368697070696e6753746174757318062001280e32" .
            "152e6c7562616e2e5368697070696e67537461747573121c0a064f726465" .
            "727318072003280b320c2e6c7562616e2e4f7264657212100a0843757272" .
            "656e637918082001280912130a0b476f6f6473416d6f756e741809200128" .
            "0112120a0a50616964416d6f756e74180a2001280112130a0b46696e616c" .
            "416d6f756e74180b20012801120e0a06546178466565180c200128011213" .
            "0a0b5368697070696e67466565180d2001280112130a0b446973636f756e" .
            "74466565180e2001280112130a0b41646a7573745072696365180f200128" .
            "0112270a0f5368697070696e674164647265737318102001280b320e2e6c" .
            "7562616e2e4164647265737312150a0d446973636f756e74546f6b656e18" .
            "112001280912140a0c446973636f756e744d656d6f181220012809121f0a" .
            "07496e766f69636518132001280b320e2e6c7562616e2e496e766f696365" .
            "12110a0942757965724d656d6f18142001280912110a0954726164654d65" .
            "6d6f18152001280912120a0a43726561746554696d651816200128031214" .
            "0a0c4d6f64696669656454696d65181720012803120f0a07456e6454696d" .
            "6518182001280312200a085061796d656e7473181e2003280b320e2e6c75" .
            "62616e2e5061796d656e7412220a09536869706d656e7473181f2003280b" .
            "320f2e6c7562616e2e536869706d656e74121c0a0645766e657473182320" .
            "03280b320c2e6c7562616e2e4576656e7412190a044d6574611824200328" .
            "0b320b2e6c7562616e2e4d65746122670a054576656e7412110a09457665" .
            "6e7454696d65180120012803120d0a05506c61636518022001280912100a" .
            "084f70657261746f72180320012809120c0a04436f646518042001280912" .
            "0c0a0444617461180520012809120e0a0644657461696c18062001280922" .
            "9c020a054f72646572120a0a024964180120012803120b0a035469641802" .
            "20012809120d0a05536b754964180320012809120f0a07536b75436f6465" .
            "180420012809120f0a07536b754e616d65180520012809121e0a04547970" .
            "6518062001280e32102e6c7562616e2e4f726465725479706512100a0851" .
            "75616e7469747918072001280312170a0f536869707065645175616e7469" .
            "7479180820012803122d0a0e5368697070696e6753746174757318092001" .
            "280e32152e6c7562616e2e5368697070696e67537461747573120d0a0550" .
            "72696365180a20012801120e0a06416d6f756e74180b2001280112150a0d" .
            "437573746f6d697a6174696f6e180c2001280912190a044d657461180d20" .
            "03280b320b2e6c7562616e2e4d65746122b8020a07496e766f6963651225" .
            "0a044d6f646518012001280e32172e6c7562616e2e496e766f6963652e45" .
            "6e756d4d6f646512250a045479706518022001280e32172e6c7562616e2e" .
            "496e766f6963652e456e756d54797065120f0a07436f6e74656e74180420" .
            "01280912130a0b436f6d70616e794e616d6518052001280912160a0e436f" .
            "6d70616e7941646472657373180620012809121a0a125265676973747261" .
            "74696f6e4e756d62657218072001280912100a0842616e6b6e616d651808" .
            "2001280912130a0b42616e6b6163636f756e7418092001280912140a0c43" .
            "6f6d70616e7950686f6e65180a20012809221f0a08456e756d4d6f646512" .
            "0a0a064e4f524d414c100012070a03564154100122270a08456e756d5479" .
            "7065120e0a0a494e444956494455414c1000120b0a07434f4d50414e5910" .
            "012a690a09506179537461747573120a0a065041595f4e4f1000120e0a0a" .
            "5041595f46494e495348100112110a0d5041595f544f5f4d454449554d10" .
            "02120c0a085041595f504152541003120f0a0b524546554e445f50415254" .
            "1004120e0a0a524546554e445f414c4c10052a5a0a0b5472616465537461" .
            "74757312100a0c54524144455f414354495645100012120a0e5452414445" .
            "5f46494e4953484544100112100a0c54524144455f434c4f534544100212" .
            "130a0f54524144455f414654455253414c4510032a200a094f7264657254" .
            "79706512090a05474f4f4453100012080a044749465410012a660a0e5368" .
            "697070696e6753746174757312120a0e534849505f554e50524f43455353" .
            "100012130a0f534849505f414c4c4f434154494f4e100112140a10534849" .
            "505f414c4c5f53484950504544100212150a11534849505f504152545f53" .
            "484950504544100342240a0f636e2e73686f7065782e6c7562616eca0210" .
            "53686f7065785c4c7562616e5c536466620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}


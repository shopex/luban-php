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
            "0a8d100a0b74726164652e70726f746f12056c7562616e1a0d7061796d65" .
            "6e742e70726f746f1a0e736869706d656e742e70726f746f22db050a0554" .
            "72616465120b0a03546964180120012809120f0a07427579657249641802" .
            "2001280912100a0853656c6c6572496418032001280912220a0653746174" .
            "757318042001280e32122e6c7562616e2e54726164655374617475731223" .
            "0a0950617953746174757318052001280e32102e6c7562616e2e50617953" .
            "746174757312290a0a5368697053746174757318062001280e32152e6c75" .
            "62616e2e5368697070696e67537461747573121c0a064f72646572731807" .
            "2003280b320c2e6c7562616e2e4f72646572121a0a054769667473180820" .
            "03280b320b2e6c7562616e2e4769667412100a0843757272656e63791809" .
            "2001280912130a0b476f6f6473416d6f756e74180a2001280112120a0a50" .
            "616964416d6f756e74180b2001280112130a0b46696e616c416d6f756e74" .
            "180c20012801120e0a06546178466565180d2001280112130a0b53686970" .
            "70696e67466565180e2001280112130a0b446973636f756e74466565180f" .
            "2001280112130a0b41646a757374507269636518102001280112270a0f53" .
            "68697070696e674164647265737318112001280b320e2e6c7562616e2e41" .
            "64647265737312150a0d446973636f756e74546f6b656e18122001280912" .
            "140a0c446973636f756e744d656d6f181320012809121f0a07496e766f69" .
            "636518142001280b320e2e6c7562616e2e496e766f69636512110a094275" .
            "7965724d656d6f18152001280912110a0954726164654d656d6f18162001" .
            "280912120a0a43726561746554696d6518172001280312140a0c4d6f6469" .
            "6669656454696d65181820012803120f0a07456e6454696d651819200128" .
            "0312200a085061796d656e7473181e2003280b320e2e6c7562616e2e5061" .
            "796d656e7412220a09536869706d656e7473181f2003280b320f2e6c7562" .
            "616e2e536869706d656e74121c0a0645766e65747318232003280b320c2e" .
            "6c7562616e2e4576656e7412190a044d65746118242003280b320b2e6c75" .
            "62616e2e4d65746122670a054576656e7412110a094576656e7454696d65" .
            "180120012803120d0a05506c61636518022001280912100a084f70657261" .
            "746f72180320012809120c0a04436f6465180420012809120c0a04446174" .
            "61180520012809120e0a0644657461696c18062001280922ac020a054f72" .
            "646572120a0a024964180120012803120b0a03546964180220012809120d" .
            "0a05536b754964180320012809120f0a07536b75436f6465180420012809" .
            "120f0a07536b754e616d65180520012809121e0a04547970651806200128" .
            "0e32102e6c7562616e2e4f726465725479706512100a085175616e746974" .
            "7918072001280312170a0f536869707065645175616e7469747918082001" .
            "2803122d0a0e5368697070696e6753746174757318092001280e32152e6c" .
            "7562616e2e5368697070696e67537461747573120d0a055072696365180a" .
            "20012801120e0a06416d6f756e74180b2001280112150a0d437573746f6d" .
            "697a6174696f6e180c2001280912190a044d657461180d2003280b320b2e" .
            "6c7562616e2e4d657461120e0a064d61784e756d180e200128032298010a" .
            "0447696674120a0a02496418012001280312100a08436f75706f6e496418" .
            "022001280312100a08476966744e616d6518032001280912100a08476966" .
            "744c6f676f18042001280912110a0947696674546f6b656e180520012809" .
            "120e0a0647696674494418062001280912100a08476966744d656d6f1807" .
            "2001280912190a044d65746118082003280b320b2e6c7562616e2e4d6574" .
            "6122b8020a07496e766f69636512250a044d6f646518012001280e32172e" .
            "6c7562616e2e496e766f6963652e456e756d4d6f646512250a0454797065" .
            "18022001280e32172e6c7562616e2e496e766f6963652e456e756d547970" .
            "65120f0a07436f6e74656e7418042001280912130a0b436f6d70616e794e" .
            "616d6518052001280912160a0e436f6d70616e7941646472657373180620" .
            "012809121a0a12526567697374726174696f6e4e756d6265721807200128" .
            "0912100a0842616e6b6e616d6518082001280912130a0b42616e6b616363" .
            "6f756e7418092001280912140a0c436f6d70616e7950686f6e65180a2001" .
            "2809221f0a08456e756d4d6f6465120a0a064e4f524d414c100012070a03" .
            "564154100122270a08456e756d54797065120e0a0a494e44495649445541" .
            "4c1000120b0a07434f4d50414e5910012a690a0950617953746174757312" .
            "0a0a065041595f4e4f1000120e0a0a5041595f46494e495348100112110a" .
            "0d5041595f544f5f4d454449554d1002120c0a085041595f504152541003" .
            "120f0a0b524546554e445f504152541004120e0a0a524546554e445f414c" .
            "4c10052a690a0b547261646553746174757312100a0c54524144455f4143" .
            "54495645100012120a0e54524144455f46494e4953484544100112100a0c" .
            "54524144455f434c4f534544100212130a0f54524144455f414654455253" .
            "414c451003120d0a0954524144455f54424310042a200a094f7264657254" .
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


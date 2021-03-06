<?php

class HpsTransaction {
    public  $transactionHeader  = null,
            $transactionId      = null,
            $responseCode       = null,
            $responseText       = null,
            $referenceNumber    = null;

    public function __construct($transactionHeader=null){
        $this->transactionHeader = $transactionHeader;
    }

    static public function transactionTypeToServiceName($transactionType){
        switch ($transactionType){
            case HpsTransactionType::$AUTHORIZE :
                return HpsItemChoiceTypePosResponseVer10Transaction::$CreditAuth;
                break;

            case HpsTransactionType::$CAPTURE:
                return HpsItemChoiceTypePosResponseVer10Transaction::$CreditAddToBatch;
                break;

            case HpsTransactionType::$CHARGE:
                return HpsItemChoiceTypePosResponseVer10Transaction::$CreditSale;
                break;

            case HpsTransactionType::$REFUND:
                return HpsItemChoiceTypePosResponseVer10Transaction::$CreditReturn;
                break;

            case HpsTransactionType::$REVERSE:
                return HpsItemChoiceTypePosResponseVer10Transaction::$CreditReversal;
                break;

            case HpsTransactionType::$VERIFY:
                return HpsItemChoiceTypePosResponseVer10Transaction::$CreditAccountVerify;
                break;

            case HpsTransactionType::$LIST:
                return HpsItemChoiceTypePosResponseVer10Transaction::$ReportActivity;
                break;

            case HpsTransactionType::$GET:
                return HpsItemChoiceTypePosResponseVer10Transaction::$ReportTxnDetail;
                break;

            case HpsTransactionType::$VOID:
                return HpsItemChoiceTypePosResponseVer10Transaction::$CreditVoid;
                break;

            case HpsTransactionType::$BATCH_CLOSE:
                return HpsItemChoiceTypePosResponseVer10Transaction::$BatchClose;
                break;

            case HpsTransactionType::$SECURITY_ERROR:
                return "SecurityError";
                break;

            default:
                return "";
        }
    }

    static public function serviceNameToTransactionType($serviceName){
        switch ($serviceName){
            case HpsItemChoiceTypePosResponseVer10Transaction::$CreditAuth:
                return HpsTransactionType::$CAPTURE;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$CreditAddToBatch:
                return HpsTransactionType::$CAPTURE;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$CreditSale:
                return HpsTransactionType::$CHARGE;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$CreditReturn:
                return HpsTransactionType::$REFUND;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$CreditReversal:
                return HpsTransactionType::$REVERSE;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$CreditAccountVerify:
                return HpsTransactionType::$VERIFY;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$ReportActivity:
                return HpsTransactionType::$LIST;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$ReportTxnDetail:
                return HpsTransactionType::$GET;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$CreditVoid:
                return HpsTransactionType::$VOID;
                break;

            case HpsItemChoiceTypePosResponseVer10Transaction::$BatchClose:
                return HpsTransactionType::$BATCH_CLOSE;
                break;

            default:
                return null;
        }
    }
}
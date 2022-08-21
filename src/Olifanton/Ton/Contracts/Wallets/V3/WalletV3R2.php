<?php

namespace Olifanton\Ton\Contracts\Wallets\V3;

use Olifanton\Boc\Cell;

class WalletV3R2 extends WalletV3
{
    public static function getName(): string
    {
        return "v3r2";
    }

    /**
     * @throws \Olifanton\Boc\Exceptions\CellException
     */
    protected function createCode(): Cell
    {
        return Cell::oneFromBoc("B5EE9C724101010100710000DEFF0020DD2082014C97BA218201339CBAB19F71B0ED44D0D31FD31F31D70BFFE304E0A4F2608308D71820D31FD31FD31FF82313BBF263ED44D0D31FD31FD3FFD15132BAF2A15144BAF2A204F901541055F910F2A3F8009320D74A96D307D402FB00E8D101A4C8CB1FCB1FCBFFC9ED5410BD6DAD");
    }
}

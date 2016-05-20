<?php

/*
 *  This file is part of the Quantum Unit Solutions development package.
 *
 *  (c) Quantum Unit Solutions <http://github.com/dmeikle/>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

/**
 * DeckInterface
 *
 * @author Dave Meikle
 */
interface DeckInterface {

    public function newGame();

    public function dealCard();
}

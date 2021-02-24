<?php

namespace App\Behat;

use Behat\MinkExtension\Context\RawMinkContext;
use PHPUnit\Framework\Assert;

/**
 * Define application featues from the specific context.
 */
class FeatureContext extends RawMinkContext {

    /**
     * @param string $sum
     *
     * @Then /Sum should be equal (?P<sum>\d+)/
     */
    public function thenSumShouldBeEqual(string $sum) {
        $response = $this->getSession()->getPage()->getContent();
        $json = json_decode($response, true);
        Assert::assertEquals($sum, $json['sum']);
    }

}

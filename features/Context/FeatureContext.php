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
    public function thenSumShouldBeEqual(string $sum): void {
        $response = $this->getSession()->getPage()->getContent();
        $json = json_decode($response, true);
        Assert::assertEquals($sum, $json['sum']);
    }


    /**
     * @param string $body
     *
     * @Then /body should be equal (?P<position>.+)/
     */
    public function thenBodyShouldBeEqual(string $body): void {
        $response = $this->getSession()->getPage()->getContent();
        Assert::assertEquals($body, $response);
    }

}

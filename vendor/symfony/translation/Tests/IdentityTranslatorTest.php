<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Tests;

use Symfony\Component\Intl\Util\IntlTestHelper;
use Symfony\Component\Translation\IdentityTranslator;

class IdentityTranslatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider getTransTests
     */
    public function testTrans($expected, $id, $parameters)
    {
        $translator = new IdentityTranslator();

        $this->assertEquals($expected, $translator->trans($id, $parameters));
    }


    /**
     * @dataProvider getTransChoiceTests
     */
    public function testTransChoiceWithExplicitLocale($expected, $id, $number, $parameters)
    {
        $translator = new IdentityTranslator();
        $translator->setLocale('en');

        $this->assertEquals($expected, $translator->transChoice($id, $number, $parameters));
    }


    /**
     * @dataProvider getTransChoiceTests
     */
    public function testTransChoiceWithDefaultLocale($expected, $id, $number, $parameters)
    {
        \Locale::setDefault('en');

        $translator = new IdentityTranslator();

        $this->assertEquals($expected, $translator->transChoice($id, $number, $parameters));
    }


    public function testGetSetLocale()
    {
        $translator = new IdentityTranslator();
        $translator->setLocale('en');

        $this->assertEquals('en', $translator->getLocale());
    }


    public function testGetLocaleReturnsDefaultLocaleIfNotSet()
    {
        // in order to test with "pt_BR"
        IntlTestHelper::requireFullIntl($this);

        $translator = new IdentityTranslator();

        \Locale::setDefault('en');
        $this->assertEquals('en', $translator->getLocale());

        \Locale::setDefault('pt_BR');
        $this->assertEquals('pt_BR', $translator->getLocale());
    }


    public function getTransTests()
    {
        return [
            [ 'Symfony is great!', 'Symfony is great!', [ ] ],
            [ 'Symfony is awesome!', 'Symfony is %what%!', [ '%what%' => 'awesome' ] ],
        ];
    }


    public function getTransChoiceTests()
    {
        return [
            [
                'There are no apples',
                '{0} There are no apples|{1} There is one apple|]1,Inf] There are %count% apples',
                0,
                [ '%count%' => 0 ]
            ],
            [
                'There is one apple',
                '{0} There are no apples|{1} There is one apple|]1,Inf] There are %count% apples',
                1,
                [ '%count%' => 1 ]
            ],
            [
                'There are 10 apples',
                '{0} There are no apples|{1} There is one apple|]1,Inf] There are %count% apples',
                10,
                [ '%count%' => 10 ]
            ],
            [ 'There are 0 apples', 'There is 1 apple|There are %count% apples', 0, [ '%count%' => 0 ] ],
            [ 'There is 1 apple', 'There is 1 apple|There are %count% apples', 1, [ '%count%' => 1 ] ],
            [ 'There are 10 apples', 'There is 1 apple|There are %count% apples', 10, [ '%count%' => 10 ] ],
            // custom validation messages may be coded with a fixed value
            [ 'There are 2 apples', 'There are 2 apples', 2, [ '%count%' => 2 ] ],
        ];
    }
}

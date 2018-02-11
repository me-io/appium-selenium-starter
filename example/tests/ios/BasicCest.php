<?php

/**
 * Class BasicCest
 *
 * @group basic-cest
 */
class BasicCest
{
    public function applicationWorks(AndroidGuy $I)
    {
        $text = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]')->getText();
        $I->assertEquals('UICatalog', $text);
    }

    public function buttonsMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[1]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Buttons', $elm->getText());
    }

    public function controlsMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[2]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Controls', $elm->getText());
    }

    public function textFieldsMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[3]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('TextFields', $elm->getText());
    }

    public function searchBarMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[4]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('SearchBar', $elm->getText());
    }

    public function textViewMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[5]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('TextView', $elm->getText());
    }

    public function pickersMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[6]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Pickers', $elm->getText());
    }

    public function imagesMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[7]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Images', $elm->getText());
    }

    public function webMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[8]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Web', $elm->getText());
    }

    public function segmentsMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[9]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Segments', $elm->getText());
    }

    public function toolbarMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[10]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Toolbar', $elm->getText());
    }

    public function alertsMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[11]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Alerts', $elm->getText());
    }

    public function transitionsMenuItemWorks(AndroidGuy $I)
    {
        $menuItem = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeOther[1]/XCUIElementTypeTable[1]/XCUIElementTypeCell[12]/XCUIElementTypeStaticText[1]');
        $I->touchClick([
            'element' => $menuItem->getId(),
        ]);
        $elm = $I->byXPath('//XCUIElementTypeApplication[1]/XCUIElementTypeWindow[1]/XCUIElementTypeOther[1]/XCUIElementTypeNavigationBar[1]/XCUIElementTypeStaticText[1]');
        $I->assertEquals('Transitions', $elm->getText());
    }
}
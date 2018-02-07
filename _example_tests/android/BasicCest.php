<?php

/**
 * Class BasicCest
 * @group basic-cest
 */
class BasicCest
{
    public function applicationWorks(AndroidGuy $I)
    {
        $text = $I->byId('android:id/title')->getText();
        $I->assertEquals('selendroid-test-app', $text);
    }

    public function showProgressBarBtnShowsProgressBarOnTouch(AndroidGuy $I)
    {
        $I->byId('io.selendroid.testapp:id/waitingButtonTest')->click();
        $I->implicitWait(['ms' => 1200]);
        $loaderText = $I->byId('android:id/message')->getText();
        $I->assertEquals('Waiting Dialog', $loaderText);
    }

    public function throwUnhandledExceptionThrowsException(AndroidGuy $I)
    {
        $elm = $I->byId('io.selendroid.testapp:id/exceptionTestButton');
        $elm->click();
        $I->implicitWait(['ms' => 600]);
        $exceptionMessageText = $I->byId('android:id/message')->getText();
        $I->assertEquals('Unfortunately, selendroid-test-app has stopped.', $exceptionMessageText);
    }

    public function userCanEditMyTextField(AndroidGuy $I)
    {
        $elm = $I->byId('io.selendroid.testapp:id/my_text_field');
        $elm->click();
        $elm->value('Test value');
        $I->assertEquals('Test value', $elm->text());
    }

    public function displayTextViewShowTextOnTouch(AndroidGuy $I)
    {
        $elm = $I->byId('io.selendroid.testapp:id/my_text_field');
        $elm->click();
        $elm->value('Test value');
        $I->assertEquals('Test value', $elm->text());
    }

    public function applicationWillCloseOnChoosingTheIAgreeENButtonTouch(AndroidGuy $I)
    {
        $elm = $I->byId('io.selendroid.testapp:id/buttonTest');
        $elm->click();
        $promptBox = $I->byId('android:id/message')->getText();
        $I->assertEquals('This will end the activity', $promptBox);
        $I->byId('android:id/button1')->click();
        $I->assertEquals('.Launcher', $I->getCurrentActivity());
    }

    public function applicationWillNotCloseOnChoosingTheNonoAfterENButtonTouch(AndroidGuy $I)
    {
        $elm = $I->byId('io.selendroid.testapp:id/buttonTest');
        $elm->click();
        $promptBox = $I->byId('android:id/message')->getText();
        $I->assertEquals('This will end the activity', $promptBox);
        $I->byId('android:id/button2')->click();
        $I->assertEquals('.HomeScreenActivity', $I->getCurrentActivity());
    }
}

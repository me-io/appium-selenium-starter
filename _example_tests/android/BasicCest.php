<?php

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
        $I->byId('io.selendroid.testapp:id/exceptionTestButton')->click();
        $I->implicitWait(['ms' => 600]);
        $exceptionMessageText = $I->byId('android:id/message')->getText();
        $I->assertEquals('Unfortunately, selendroid-test-app has stopped.', $exceptionMessageText);
    }
}

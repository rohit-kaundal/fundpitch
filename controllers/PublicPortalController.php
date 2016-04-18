<?php

namespace app\controllers;

class PublicPortalController extends \yii\web\Controller
{
    public function actionAddproject()
    {
        $this->layout = 'public-portal-loggedin';
        return $this->render('addproject');
    }

    public function actionCompanyinfo()
    {
        $this->layout = 'public-portal-loggedin';
        return $this->render('companyinfo');
    }

    public function actionIndex()
    {
        $this->layout = 'public-portal';
        return $this->render('index');
    }

    public function actionMailbox()
    {
        $this->layout = 'public-portal-loggedin';
        return $this->render('mailbox');
    }

    public function actionMyprojects()
    {
        $this->layout = 'public-portal-loggedin';
        return $this->render('myprojects');
    }

    public function actionSearchproject()
    {
        $this->layout = 'public-portal-loggedin';
        return $this->render('searchproject');
    }

    public function actionUseraccount()
    {
        $this->layout = 'public-portal-loggedin';
        return $this->render('useraccount');
    }

}

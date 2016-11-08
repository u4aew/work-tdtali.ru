<?php
/**
 * Дефолтный контроллер сайта:
 *
 * @category YupeController
 * @package  yupe.controllers
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD http://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD
 * @version  0.5.3 (dev)
 * @link     http://yupe.ru
 *
 **/
namespace application\controllers;

use yupe\components\controllers\FrontController;

class SiteController extends FrontController
{
    /**
     * Отображение главной страницы
     *
     * @return void
     */
    public function actionIndex() 
    {
        $this->render('index');
    }
    
    public function actionLebedkiPrice()
    {
        $this->render("lebedkiPrice");
    }
    
     public function actionReductoriPrice()
    {
        $this->render("reductoriPrice");
    }

    /**
     * Отображение для ошибок:
     *
     * @return void
     */
    public function actionError()
    {
        $error = \Yii::app()->errorHandler->error;

        if (empty($error) || !isset($error['code']) || !(isset($error['message']) || isset($error['msg']))) {
            $this->redirect(['index']);
        }

        if (!\Yii::app()->getRequest()->getIsAjaxRequest()) {

            $this->render(
                'error',
                [
                    'error' => $error
                ]
            );
        }
    }
    
    
    public function actionMail()
    {
        error_reporting(E_ALL);       
        $ticket = new \application\models\MyTicket();
        $ticket->email = \Yii::app()->request->getParam("email");
        $ticket->id_product = \Yii::app()->request->getParam("id_product");
        $ticket->message = \Yii::app()->request->getParam("message");
        $ticket->date = date("Y-m-d");
        $ticket->id_category = 1;
        $ticket->save();
        
        $method = $_SERVER['REQUEST_METHOD'];

        //Script Foreach
        $c = true;
        if ( $method === 'POST' ) {

            $project_name = trim($_POST["project_name"]);
            $admin_email  = trim($_POST["admin_email"]);
            $form_subject = trim($_POST["form_subject"]);

            foreach ( $_POST as $key => $value ) {
                if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
                    $message .= "
                    " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
                </tr>
                ";
            }
        }
        } else if ( $method === 'GET' ) {

            $project_name = trim($_GET["project_name"]);
            $admin_email  = trim($_GET["admin_email"]);
            $form_subject = trim($_GET["form_subject"]);

            foreach ( $_GET as $key => $value ) {
                if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
                    $message .= "
                    " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
                </tr>
                ";
            }
        }
        }

        $message = "<table style='width: 100%;'>$message</table>";

        function adopt($text) {
            return '=?UTF-8?B?'.base64_encode($text).'?=';
        }

        $headers = "MIME-Version: 1.0" . PHP_EOL .
        "Content-Type: text/html; charset=utf-8" . PHP_EOL .
        'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
        'Reply-To: '.$admin_email.'' . PHP_EOL;

        mail($admin_email, adopt($form_subject), $message, $headers );
    }
}

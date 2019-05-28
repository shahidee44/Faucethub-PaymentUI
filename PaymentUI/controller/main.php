<?php
/**
 * Main page controller example
 */
class Main extends Controller {
    function __construct() {
        parent::__construct(array());
        Session::start();
    }

    function index() {
        $this -> viewLoader -> render('main');
    }

    function inputKey() {
        $api_key = $_POST['api_key'];
        Session::createSession('api_key', $api_key);
        header('Location: ../main');
    }

    function accessMethod() {
        $address = $_POST['wallet_address'];
        $currency = $_POST['currency'];
        $request_type = $_POST['request_type'];
        $amount = $_POST['amount'];
        $api_key = Session::getSession('api_key');

        if (!empty($currency)) {
            $faucethub = new FaucetHub($api_key, $currency);

            switch ($request_type) {
                case 'checkOwnBalance':
                    $result = $faucethub->getBalance();
                    break;
                case 'recentPayout':
                    $result = $faucethub->getPayouts(2);
                    break;
                case 'checkAddress':
                    if (!empty($address)) {
                        $result = $faucethub->checkAddress($address);
                    } else {
                        Session::createSession('error', 'Please input a valid address to check!');
                        header('Location: ../main');
                    }
                    break;
                case 'pay':
                    if (!empty($address) && !empty((int) $amount)) {
                        $result = $faucethub->send($address, $amount);
                    } else {
                        Session::createSession('error', 'Please input a valid amount/address to send!');
                        header('Location: ../main');
                    }
                    break;
                default:
                    Session::createSession('error', 'An error has occurred when trying to parse request types!');
                    header('Location: ../main');
            }

            Session::createSession('result', $result);
            header('Location: ../main');

        } else {
            Session::createSession('error', 'The Currency Ticker is a required field!');
            header('Location: ../main');
        }
    }

    function logout() {
        Session::destroy();
        header("Location: ../main");
    }
}

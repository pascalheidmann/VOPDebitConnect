<?php

use GuzzleHttp\Client;
use Swagger\Client\Api\AccountsApi;
use Swagger\Client\Api\AuthorizationApi;
use Swagger\Client\Api\BankConnectionsApi;
use Swagger\Client\Api\BanksApi;



class finAPI
{

    private $access_token;
    private $client_id;
    private $client_secret;
    private $config;

    private $client;
    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * @return \Swagger\Client\Configuration
     */
    public function getConfig()
    {
        return $this->config;

    }

    public function __construct(hbciProfile $profile)
    {

        include __DIR__ . "/../../../vendor/autoload.php";
        if(version_compare(\GuzzleHttp\ClientInterface::VERSION,"6.0.0","<=")){
            throw new \Exception("Loaded Wrong Guzzle Version ".\GuzzleHttp\ClientInterface::VERSION." > 6.x.x required");
        }

        $this->client_id = $profile->client_id;
        $this->client_secret = $profile->client_secret;
        $this->config =  Swagger\Client\Configuration::getDefaultConfiguration();
        $this->config->setHost($profile->url);
        $this->config->setDebug(false);
        $this->createToken();

    }

    public function getBankAccountInformation(){
        $this->createToken();

        $apiInstance = new Swagger\Client\Api\BankConnectionsApi(
            $this->client,
            $this->config
        );
        $res = $apiInstance->getAllBankConnections();

        return $res;
    }

    public function UpdateBankAccount(Swagger\Client\Model\BankConnection $bankConnection){

        try {
            $this->createToken();

            $apiInstance = new Swagger\Client\Api\BankConnectionsApi(
                $this->client,
                $this->config
            );

            $model = new \Swagger\Client\Model\UpdateBankConnectionParams();
            $model->setBankConnectionId($bankConnection->getId());
            $model->setInterface($bankConnection->getInterfaces()[0]->getInterface());
            $model->setLoginCredentials($bankConnection->getInterfaces()[0]->getLoginCredentials());
            $model->setImportNewAccounts(false);

            $result = $apiInstance->updateBankConnection($model);
            
        }catch(\Swagger\Client\ApiException $exception){

            $this->checkWebFormRequired($exception,__FUNCTION__);
        }
    }
    public function UpdateBankAccounts(hbciProfile $profile,$lastImport){


        $dtImport = new DateTime($lastImport);
        $dtNow = new DateTime();
        if(strlen($lastImport) == 0 || $dtImport<$dtNow->modify("-12 hours")) {
            /** @var \Swagger\Client\Model\BankConnectionList $bankAccounts */
            $bankAccounts = $this->getBankAccountInformation();
            foreach ($bankAccounts->getConnections() as $bankConnection) {
                $this->UpdateBankAccount($bankConnection);
            }
            return true;
        }

        return false;
    }

    /** @return \Swagger\Client\Model\TransactionList[] */
    public function getAllTransActionsByDate($kontoId,$startDate,$endDate){
        $retvalues = [];
        try {
            $this->createToken();
            $apiInstance = new Swagger\Client\Api\AccountsApi(
               $this->client,
                $this->config
            );
            $res = $apiInstance->getDailyBalances($kontoId, $startDate->format("Y-m-d"), $endDate->format("Y-m-d"));

            $retvalues = [];

            foreach ($res->getDailyBalances() as $balance) {
                $transActions = $balance->getTransactions();
                $transActionList = $this->getTransActions($transActions);
                $retvalues[] = $transActionList;
            }
        }catch(\Swagger\Client\ApiException $exception){
            $this->checkWebFormRequired($exception,__FUNCTION__);
        }

       return $retvalues;
    }

    public function getTransActions($transActionIds){

        if(count($transActionIds) == 0 ) return;


        $this->createToken();
        $apiInstance = new Swagger\Client\Api\TransactionsApi(

            $this->client,
            $this->config
        );


        $ids = implode(",",$transActionIds);
        if(count($transActionIds) == 1){
            $ids = $ids.",".$ids;
        }

       
        $res =  $apiInstance->getMultipleTransactions($ids);

        return $res;
    }

    public function createBankAccount($id,$name){
        $this->createToken();
         $apiInstance = new Swagger\Client\Api\BankConnectionsApi(

           $this->client,
            $this->config
        );

        try {

            $body = new \Swagger\Client\Model\ImportBankConnectionParams();
            $body->setName($name);
            $body->setBankId($id);
            $body->setStorePin(true);
            $body->setInterface("FINTS_SERVER");
            $res = $apiInstance->importBankConnection($body);
        }catch(\Swagger\Client\ApiException $exception){

            $this->checkWebFormRequired($exception,__FUNCTION__);

      //   file_put_contents($log,print_r($exception,true));
        }
    }

    public function checkWebFormRequired(\Swagger\Client\ApiException $exception,$function){
        $body = json_decode($exception->getResponseBody());
        $webFormRequired = false;
        foreach($body->errors as $error){
            if($error->code == "WEB_FORM_REQUIRED"){
              $webFormRequired = true;
              break;
            }
        }

        if($webFormRequired){
            $header = $exception->getResponseHeaders();
            $webForm = $header["Location"][0];
            $current_webforms =$this->getCurrentWebForms();
            $current_webforms[] = new webForms($webForm,$function);
            DC()->setConf("webFormAction",json_encode($current_webforms));
            DC()->setAlert('info',"PSD-2 Starke Kundenauthentifizierung greift. Bitte klicken Sie die Webforms");
        }
    }

    public function deleteAccount($accountId){
        $this->createToken();
        $apiInstance = new Swagger\Client\Api\BankConnectionsApi(

           $this->client,
            $this->config
        );

        $res = $apiInstance->deleteBankConnection($accountId);


    }

    public static function getCurrentWebForms(){
       $current_webForms =  json_decode(DC()->getConf('webFormAction',json_encode([])));
       return $current_webForms;
    }

    public function getAndSearchAllBanks($searchValue){
        $this->createToken();
        $apiInstance = new Swagger\Client\Api\BanksApi(
            $this->client,
           $this->config
        );


        $res =   $apiInstance->getAndSearchAllBanks(null, $searchValue);
        $banks = $res->getBanks();
        $bankData = null;
        foreach($banks as $bank){
            $arr = [
                "name" => $bank->getName(),
                "id" => $bank->getId(),
                "bic" => $bank->getBic(),
                "city" => $bank->getCity(),
                "login" => $bank->getLoginFieldUserId()
            ];
            $bankData[] = $arr;
        }
        return $bankData;
    }

    public function getAccountInformation($ids){
        $arr = null;
        if(count($ids)>0) {
            $this->createToken();
            $apiInstance = new Swagger\Client\Api\AccountsApi(
                $this->client,
                $this->config
            );

            if(count($ids) == 1){
                $ids[] = $ids[0];
            }

            $res = $apiInstance->getMultipleAccounts(implode(",",$ids));

            $arr = [];
            foreach ($res->getAccounts() as $account) {

                $item = [
                    "id" => $account->getId(),
                    "account_name" => $account->getAccountName(),
                    "iban" => $account->getIban(),
                    "update" => $account->getLastSuccessfulUpdate(),
                    "balance" => $account->getBalance(),

                ];
                $arr[] = $item;
            }
        }
        return $arr;
    }
    public function getCurrentBankConnections(){

        $arr = [];

        $res = $this->getBankAccountInformation();

        foreach($res->getConnections() as $account){

            $accounts = $this->getAccountInformation($account->getAccountIds());

            $item = [
                "name" => $account->getName(),
                "bic" => $account->getBank()->getBic(),
                "id" => $account->getId(),
                "accounts" => $this->getAccountInformation($account->getAccountIds())
            ];
            $arr[] = $item;
        }
        return $arr;
    }
    public function createToken()
    {

        $settings = DC()->settings->shopsArray[0];

        if($settings["activated"] != 1){
            throw  new \Exception("Bitte Firma Registrieren");
        }

            $soap = new SoapClient(DebitConnectCore::$SOAP, ['encoding' => 'UTF-8', 'cache_wsdl' => WSDL_CACHE_NONE, 'trace' => 1]);
            $token = $soap->getToken($settings["vopUser"],md5($settings["vopToken"]),$this->client_id,$this->client_secret);
            if(strpos($token,"error") !== true){
                $this->access_token = $token;
                $this->config->setAccessToken($this->access_token);

                $this->client = new GuzzleHttp\Client([
                    "headers" => [
                        "X-REQUEST-ID" => "vop-".$settings["vopUser"]."-".date("ymdhis")
                    ]
                ]);

            }else{
                throw new \Exception("Error Creating Token Reason : $token");
            }

    }
}
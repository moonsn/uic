<?php

namespace MOONSN1994\Uic;

class Uic {

    /**
     * UicSoapClient 返回客户端
     */
    public function UicSoapClient()
    {
        $soapheader = new \SoapHeader("http://schemas.xmlsoap.org/wsdl/soap/","appKey", config('uic.key'),false);
        $client = new \SoapClient(config('uic.server'));
        $client->__setSoapHeaders(array($soapheader)); 
        return $client;
    }

    /**
     * getAllUsersByBlurName 模糊搜索用户名
     * @param  string $blurName
     * @return mixed
     */
    public function getAllUsersByBlurName($blurName) {
        return $this->UicSoapClient()->getAllUsersByBlurName(array(
            'arg0'=>$blurName,
        ))->return;
    }

    /**
     * getUserByUsername 精确搜索用户名
     * @param  string $username
     * @return mixed
     */
    public function getUserByUsername($username) {
        return $this->UicSoapClient()->getUserByUsername(array(
            'arg0'=>$username,
        ))->return;
    }

    public function getAllUsersBySuperiorUsername($superiorUsername, $deep) {
        return $this->UicSoapClient()->getAllUsersBySuperiorUsername(array(
            'arg0'=>$superiorUsername,
            'arg1'=>$deep,
        ))->return;
    }

    public function getUserByIdCardNumber($idCardNumber) {
        return $this->UicSoapClient()->getUserByIdCardNumber(array(
            'arg0'=>$idCardNumber,
        ))->return;
    }

    public function getUserByEmployeeId($employeeId) {
        return $this->UicSoapClient()->getUserByEmployeeId(array(
            'arg0'=>$employeeId,
        ))->return;
    }

    public function getUserById($userId) {
        return $this->UicSoapClient()->getUserById(array(
            'arg0'=>$userId,
        ))->return;
    }

    public function getSuperiorByUsername($username, $deep) {
        return $this->UicSoapClient()->getSuperiorByUsername(array(
            'arg0'=>$username,
            'arg1'=>$deep,
        ))->return;
    }

    public function getAllUsersBySuperiorId($superiorId, $deep) {
        return $this->UicSoapClient()->getAllUsersBySuperiorId(array(
            'arg0'=>$superiorId,
            'arg1'=>$deep,
        ))->return;
    }

    public function getUserByEmail($email) {
        return $this->UicSoapClient()->getUserByEmail(array(
            'email'=>$email,
        ))->return;
    }

    public function getAllUsersByBlurEmail($blurEmail) {
        return $this->UicSoapClient()->getAllUsersByBlurEmail(array(
            'arg0'=>$blurEmail,
        ))->return;
    }

    public function getAllUsersByContactWithPage($contact, $first, $size) {
        return $this->UicSoapClient()->getAllUsersByContactWithPage(array(
            'arg0'=>$contact,
            'arg1'=>$first,
            'arg2'=>$size,
        ))->return;
    }

    public function getSuperiorById($userId, $deep) {
        return $this->UicSoapClient()->getSuperiorById(array(
            'arg0'=>$userId,
            'arg1'=>$deep,
        ))->return;
    }

    public function getAllUsersByContact($contact) {
        return $this->UicSoapClient()->getAllUsersByContact(array(
            'arg0'=>$contact,
        ))->return;
    }

    public function getAllSuperiorsById($userId, $deep) {
        return $this->UicSoapClient()->getAllSuperiorsById(array(
            'arg0'=>$userId,
            'arg1'=>$deep,
        ))->return;
    }
}


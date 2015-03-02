<?php
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/02/2015
 */

class SmsLinkModel {
    /**
     * The identifier of the sms link
     * @param int $smsLinkId public property
     */
    protected $smsLinkId;

    /**
     * The identifier of the sms link's group
     * @param int $groupId public property
     */
    protected $groupId;

    /**
     * The name of the sms link
     * @param string $name public property
     */
    protected $name;

    /**
     * The protocol of the sms link
     * @param string $type public property
     */
    protected $type;

    /**
     * The user login. Required for SMPP and Parlay-X delivery.
     * @param string $login public property
     */
    protected $login;

    /**
     * The user password. Required for SMPP and Parlay-X delivery.
     * @param string $password public property
     */
    protected $password;

    /**
     * The actual url where the sms is delivered.
     * @param string $url public property
     */
    protected $url;

    /**
     * The priority of the sms link in the link group.
     * @param string $weight public property
     */
    protected $weight;

    /**
     * The direction of the sms link.
     * @param string $direction public property
     */
    protected $direction;

    /**
     * The system type of the sms link.
     * @param string $systemType public property
     */
    protected $systemType;

    /**
     * A flag indicating if SSL should be used.
     * @param bool $useSSL public property
     */
    protected $useSSL;

    /**
     * The monitor interval for the sms link.
     * @param string $monitorInterval public property
     */
    protected $monitorInterval;

    /**
     * The transaction timeout for the sms link.
     * @param int $transactionTimeout public property
     */
    protected $transactionTimeout;

    /**
	 * Constructor to set initial or default values of member properties
	 * @param   int $smsLinkId    Initialization value for the property $this->smsLinkId
	 * @param   int $groupId    Initialization value for the property $this->groupId
	 * @param   string $name    Initialization value for the property $this->name
	 * @param   string $type    Initialization value for the property $this->type
	 * @param   string $login    Initialization value for the property $this->login
	 * @param   string $password    Initialization value for the property $this->password
	 * @param   string $url    Initialization value for the property $this->url
	 * @param   string $weight    Initialization value for the property $this->weight
	 * @param   string $direction    Initialization value for the property $this->direction
	 * @param   string $systemType    Initialization value for the property $this->systemType
	 * @param   bool $useSSL    Initialization value for the property $this->useSSL
	 * @param   string $monitorInterval    Initialization value for the property $this->monitorInterval
	 * @param   int $transactionTimeout    Initialization value for the property $this->transactionTimeout
	 */
    public function __construct()
    {
        if(13 == func_num_args())
        {
            $this->smsLinkId = func_get_arg(0);
            $this->groupId = func_get_arg(1);
            $this->name = func_get_arg(2);
            $this->type = func_get_arg(3);
            $this->login = func_get_arg(4);
            $this->password = func_get_arg(5);
            $this->url = func_get_arg(6);
            $this->weight = func_get_arg(7);
            $this->direction = func_get_arg(8);
            $this->systemType = func_get_arg(9);
            $this->useSSL = func_get_arg(10);
            $this->monitorInterval = func_get_arg(11);
            $this->transactionTimeout = func_get_arg(12);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function to_json()
    {
        $json = array();
        foreach($this as $key => $value) {
            $json[$key] = $value;
        }
        return $json;
    }
}
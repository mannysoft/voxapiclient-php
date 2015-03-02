<?php
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/02/2015
 */

class ProductCheckoutModel {
    /**
     * The product type (DID / CAPACITY / CREDIT_PACKAGE)
     * @param string $productType public property
     */
    protected $productType;

    /**
     * The status of the checkout
     * @param string $status public property
     */
    protected $status;

    /**
     * The reference of the newly created order
     * @param string $orderReference public property
     */
    protected $orderReference;

    /**
	 * Constructor to set initial or default values of member properties
	 * @param   string $productType    Initialization value for the property $this->productType
	 * @param   string $status    Initialization value for the property $this->status
	 * @param   string $orderReference    Initialization value for the property $this->orderReference
	 */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->productType = func_get_arg(0);
            $this->status = func_get_arg(1);
            $this->orderReference = func_get_arg(2);
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
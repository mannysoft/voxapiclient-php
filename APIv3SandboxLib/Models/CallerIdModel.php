<?php
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/02/2015
 */

class CallerIdModel {
    /**
     * The CLI format
     * @param string $cliFormat public property
     */
    protected $cliFormat;

    /**
     * The CLI prefix
     * @param string|null $cliValue public property
     */
    protected $cliValue;

    /**
	 * Constructor to set initial or default values of member properties
	 * @param   string $cliFormat    Initialization value for the property $this->cliFormat
	 * @param   string|null $cliValue    Initialization value for the property $this->cliValue
	 */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->cliFormat = func_get_arg(0);
            $this->cliValue = func_get_arg(1);
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
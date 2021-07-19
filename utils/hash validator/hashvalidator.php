<?php

/**
 * Validates an hash
 * Usage @validator("hash")
 *
 * @author ahsen tekdemir
 * @version 1.0.0
 */

class HashValidator{
    const FLAGS = [
        Hash::MD5 => FILTER_FLAG_MD5,
        Hash::SHA1 => FILTER_FLAG_SHA1,
        Hash::SHA256 => FILTER_FLAG_SHA256,
        Hash::SHA512 => FILTER_FLAG_SHA512
    ];

    public function __construct(){
        $this->message = "{value} is not valid hash of  type {ref}";
        $this->ref(array(
            "/^[a-f0-9]{32}$/i", // MD5
            "/\b([a-f0-9]{40})\b/", //SHA1
            "\b[A-Fa-f0-9]{64}\b", //SHA256
            "\b[A-Fa-f0-9]{128}\b", //SHA512
        ));
    }

    public function validate($value){
        parent::validate($value);
        $value = (string) $value;
        $flag = null;
        
        if($this->notNull !== false){
            if (isset(self::FLAGS[$this->ref])){
                $flag = self::FLAGS[$this-ref];
            }
            return filter_var($value, FILTER_VALIDATE_HASH, $flag);
        }
        return true;
    }

    public function getParameters(): array{
        return ["value", "ref"];
    }
}
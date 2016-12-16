<?php

class Hash
{

    /**
     * 
     * @param string $algo
     * @param string $data
     * @param string $salt
     * @return string
     */
    
    public static function create($algo, $data, $salt) 
    {
        $context = hash_init($algo, HASH_HMAC, $salt);
        hash_update($context, $data);
        
        return hash_final($context);
    }
}
<?php

namespace Demo;

class Demo
{
    public function testMe($a, $b)
    {
        if (function_exists('sodium_crypto_sign_seed_keypair')) {
            sodium_crypto_sign_seed_keypair(str_repeat("\x0", 32));
        }
        
        return $a + $b;
    }
}

<?php
class password_hashing
{
    private static $formula = '$2a';
    private static $value = '$10';
    public static function unique_salt()
    {
        return substr(sha1(mt_rand()), 0, 22);
    }
    // Hashing password generate 
    public static function hash($user_password)
    {
        return crypt($user_password, self::$formula . self::$value . '$' . self::unique_salt());
    }
    // Compare a password upon hashing
    public static function compare_password($hash, $user_password)
    {
        $full_salt = substr($hash, 0, 29);
        $new_hash  = crypt($user_password, $full_salt);
        return ($hash == $new_hash);
    }
}
?>
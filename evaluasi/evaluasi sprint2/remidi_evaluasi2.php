<?php
class Register
{
   static $santri=[];
    
    public function __construct()
    {
        print_r(self::$santri);
    }
    
    public static function insertStudent($nama,$nik)
    {
        self::$santri=[
            'nama'=>$nama,
            'nik'=>$nik
        ];
    }
}

Register::insertStudent('FITRI','kjdjdh');
new Register;
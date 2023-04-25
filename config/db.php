<?

    class db {
        public static $host = 'localhost';
        public static $user = 'root';
        public static $pass = '';
        public static $name = 'kurorts';
        public static $connect = null;

        // public static $host = 'srv-pleskdb23.ps.kz:3306';
        // public static $user = 'psxkz_admin';
        // public static $pass = 'Adikakon9gh__';
        // public static $name = 'psxkz_osanatori';
        // public static $connect = null;

        public function __construct() {
            self::$connect = mysqli_connect(self::$host, self::$user, self::$pass, self::$name);
            if(!self::$connect) exit("Настройте конфигурацию базы данных!");
        }

        public static function query($sql){return mysqli_query(self::$connect, $sql);}
    }
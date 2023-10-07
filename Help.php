

isset() - позволяет проверить существование переменной 
gettype() - определяет тип переменной
is_string(int,float, numeric)() - является ли строкой
is_numeric() - хранит ли строка число 
unset() - удаляет переменную

$b =& $a; - жесткая ссылка
Символическая ссылка 
    $a = 2;
    $b = 'a';
    echo $$b;
 
define('название', 'значение');
defined - существует ли константа
Встроенные константы(_FILE_, PHP_VERSION, DIRECTION_SEPARATOR)

Математические операции: (+, -, /, *, %, **(степень))
Строковые операции: (.(конкатенация), ``(выполнение команды))
iconv('CP866', 'UTF-8', $x)
Операции сравнения: <, >, ==, !=, <=>(если 1 больше 1, второй -1, равны 0), ===;
Логические операторы: || - or, && - and, xor(исключающее или)
if() ifelse() else

for (инициализация; условие; дополнение) 
    continue;
    break;
while(){}, do{}while ()   
    
switch ($a) {case '1': break;    (==)
            default: } 
match($a){'1' =>                (===)
        default => }
foreach ($arr as $key => $value)

static - переменная функция
global($GLOBALS - массив всех) - переменные вне функции 
$_SERVER - массив с инфой
phpinfo(); - инфа

$a = function(){}; - анонимная функция
$a = function() use(){}; - замыкание
$a = fn() => ; - стрелочная функция

function generator(){ yield;} - генератор 

include '../func/function.php'; - предупреждение
include_once '';
require ''; - фатальная ошибка
require_once '';

Математические функции: 
M_PI, M_E - константы
rad2deg()
deg2rad()
sin(), cos(), tan(), asin(), acos(), atan()
abs() - модуль
round(,) - округление
floor() - округление наименьшего целого числа 
ceil() - округление набольшего целого числа
mt_rand($a, $b); 
min(), max();
base_convert("111", 2, 10); 

Строковые функции:
mb_strlen() - библиотека mb для кирилицы
strpos(); 
str_contains() - bool
str_starts_with()
str_ends_with()
mb_substr($str, 3, 2);
str_replace('a','b',$str, $count);
strtoupper();
strtolower();
trim() - обрезает пробелы спереди и сзади
urlencode() - раскодирует ссылку
urldecode();
htmlspecialchars() - заменяет тэги
strip_tags($str, '<p><img>') - вырезает все тэги
md5() - хеш строки
uniqid() - уникальная строка
wordwrap($str, 30, '<br/>')
n12br()
sprintf() - для чисел в строках(почитать в мануале) 

Функции для работы с массивами:
array_unique($arr); - удаляет все повторы
shuffle(); - перемешивает массив
array_reverse();
array_flip(); - $value => $key
array_values();
array_keys();
array_merge()
range(1, 10) - создает массив чисел от и до
array_slice($arr, 5(от куда), 5(сколько)) - режет массив
sort();
rsort();
asort(); - сохраняет все ключи
arsort(); 
ksort();
krsort();
uasort($arr, 'function');

Дата и время:
time() - 01.01.1970 00:00:00
date('d.m.Y H:i:s');
mktime()
chekdate($m, $d, $y)
microtime(true)

Работа с файлами:
$handler = fopen('путь', 'режим')
fclose($handler)
feof($handler)
fread($handler, $count)
filesize('')
fwrite($handler, "\nNew string")
fseek($handler,0);
file_get_contents('')
file_put_contents('', )
copy('','')
rename('', '')
unlink('')
$handler = tmpfile();
FAIL.ini
parse_ini_file('',true, INI_SCANNER_TYPED)

Работа с каталогами:
file_exists() - существует ли директория 
mkdir - создаём директорию
rmdir - удаялет ТОЛЬКО пустую директорию
glob('*.php') -
scandir()
explode("/n", $str);

Работа с файлами:
exec('', $arr)

Регулярные выражения:
$reg1 = '/a b/'
$reg2 = '#a /d b#'
preg_match($reg, $str,$match) - bool
preg_match_all()
preg_replace($str, '$2.$1.$3', $date)
\d - цифра
\D - всё кроме цифры 
\w - алфовитно-цифровой символ
\W 
\s - пробельный символ
. - любой кроме \n
^ - начало
$ - завершение 
[a-z][^0-3]
() - $matches
* - повтор 
+ - повтор один и более
? - либо 0 либо 1
{3,5} - количество повторений
i - regist 
x - пробел
m - multi 
\ - экранирование

Работа с пользователем:
$_GET
$_REQUEST
$_POST
$_FILES
<form enctype="multipart/form-data"></form>
move_uploaded_file(,'');
getimagesize()
UPLOAD_ERR_OK

ООП:
class User{
        public $name = 'User';    

        public function __construct(){}
        public function getName(){$this->name}
        public function __destruct(){}
    }
    $user_1 = new User();
    echo $user_1->name = 'Alex'.'<br/>';
public - везде
protected - только в классе и в дочерних 
private - только внутри класса
private static $counter = 0
self::$counter
public const 

__construct
__destruct
__get($a)
__set($a,$b)
__toString - при вызове объекта как строки
__isset
__unset
__call($method, $args)
__callStatic()
__sleep() - serialize() - преобразование в строку
__wakeup() - unserialize()
__clone

class Circle extends Point()
$data = parent::getData();
instanceof - принадлежит ли классу

abstract class Point implements Draw{}
interface Draw{
    public function data();
}
trait 

namespace ;
use   as; 

set_include_path(get_include_path().PATH_SEPARATOR.'');
spl_autoload_register();

Ошибки:
E_ERROR 1 - критическая ошибка
E_WARNING 2 - предупреждение 
E_PARSE 4 - ошибки по типу ;
E_NOTICE 8 - прежупреждения 
E_CORE_ERROR 16 - ошибка запуска скрипта
E_CORE_WARNING 32
E_COMPILE_ERROR 64 
E_COMPILE_ERROR 128 
E_USER_ERROR 256
E_USER_WARNING 512
E_USER_NOTICE 1024
E_STRICT 2048 - предупреждение о том как сделать код лучше
E_ROCOVERABLE_EROOR 4096 - можно перехватить
E_DEPRECATED 8912 - ошибка со след версиями
E_USER_DEPRECATED 16384
E_ALL 32767

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 0);
@ - глушит все ошибки 

try{->throw new Exception} ->catch (Exception, $e){} finally 
class Exception{
    getMessage
    getCode
    getFile
    getLine
    $e->getTrace
    $e->getTraceAsString
}
class Error

Сетевые функции:
header('Location: /a.php');
exit;
header('HTTP/1.1 404 Not Found');
header('Content-Type: image/jpg');
header('Content-Disposition: attachment; filename="1.jpg"');
readfile('files/images.jpg');
print_r(getallheaders()); - данные $_SERVER;

$_COOKIE;
setcookie('counter', $counter, time()+365*86400);

$_SESSION;
session_start();

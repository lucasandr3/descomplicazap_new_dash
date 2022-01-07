<?php
namespace Utils;

class Utils {

    public static function url($param)
    {
        return BASE_URL.$param;
    }

    public static function setUser($user)
    {
        $_SESSION['userLogged'] = $user;
    }

    public static function getUser()
    {
//    echo "<pre>";
//    print_r($_SESSION['userLogged']);
//    exit;
        $object = new stdClass();
        foreach ($_SESSION['userLogged'] as $key => $value) {
            $object->$key = $value;
        }
        return $object;
    }

    public static function arrayToObj($array) {
        $object = new stdClass();
        foreach ($array as $key => $value) {
            $object->$key = $value;
        }
        return $object;
    }

    public static function redirect($route)
    {
        return header("Location: ".BASE_URL.$route);
    }


    public static function real($number)
    {
        return 'R$ ' . number_format($number, 2, ',', '.');
    }

    public static function realNo($number)
    {
        return number_format($number, 2, ',', '.');
    }

    public static function setStore($store)
    {
        $_SESSION['storeFocus'] = $store;
    }

    public static function getStore()
    {
        $object = new stdClass();
        foreach ($_SESSION['storeFocus'] as $key => $value) {
            $object->$key = $value;
        }
        return $object;
    }

    public static function slug($string = NULL)
    {
        // $string = remove_acentos($string);
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    }

    public static function remove_acentos($string = NULL)
    {
        $procurar = array('À', 'Á', 'Ã', 'Â', 'É', 'Ê', 'Í', 'Ó', 'Õ', 'Ô', 'Ú', 'Ü', 'Ç', 'à', 'á', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'õ', 'ô', 'ú', 'ü', 'ç');
        $substituir = array('a', 'a', 'a', 'a', 'e', 'r', 'i', 'o', 'o', 'o', 'u', 'u', 'c', 'a', 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'u', 'c');
        return str_replace($procurar, $substituir, $string);
    }

    public static function url_title($title)
    {
        return $title;
    }

    public static function slugify($text)
    {

        $replace = [
            '&lt;' => '', '&gt;' => '', '&#039;' => '', '&amp;' => '',
            '&quot;' => '', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'Ae',
            '&Auml;' => 'A', 'Å' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Ă' => 'A', 'Æ' => 'Ae',
            'Ç' => 'C', 'Ć' => 'C', 'Č' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Ď' => 'D', 'Đ' => 'D',
            'Ð' => 'D', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ē' => 'E',
            'Ę' => 'E', 'Ě' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G',
            'Ġ' => 'G', 'Ģ' => 'G', 'Ĥ' => 'H', 'Ħ' => 'H', 'Ì' => 'I', 'Í' => 'I',
            'Î' => 'I', 'Ï' => 'I', 'Ī' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
            'İ' => 'I', 'Ĳ' => 'IJ', 'Ĵ' => 'J', 'Ķ' => 'K', 'Ł' => 'K', 'Ľ' => 'K',
            'Ĺ' => 'K', 'Ļ' => 'K', 'Ŀ' => 'K', 'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N',
            'Ņ' => 'N', 'Ŋ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O',
            'Ö' => 'Oe', '&Ouml;' => 'Oe', 'Ø' => 'O', 'Ō' => 'O', 'Ő' => 'O', 'Ŏ' => 'O',
            'Œ' => 'OE', 'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R', 'Ś' => 'S', 'Š' => 'S',
            'Ş' => 'S', 'Ŝ' => 'S', 'Ș' => 'S', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T',
            'Ț' => 'T', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'Ue', 'Ū' => 'U',
            '&Uuml;' => 'Ue', 'Ů' => 'U', 'Ű' => 'U', 'Ŭ' => 'U', 'Ũ' => 'U', 'Ų' => 'U',
            'Ŵ' => 'W', 'Ý' => 'Y', 'Ŷ' => 'Y', 'Ÿ' => 'Y', 'Ź' => 'Z', 'Ž' => 'Z',
            'Ż' => 'Z', 'Þ' => 'T', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a',
            'ä' => 'ae', '&auml;' => 'ae', 'å' => 'a', 'ā' => 'a', 'ą' => 'a', 'ă' => 'a',
            'æ' => 'ae', 'ç' => 'c', 'ć' => 'c', 'č' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
            'ď' => 'd', 'đ' => 'd', 'ð' => 'd', 'è' => 'e', 'é' => 'e', 'ê' => 'e',
            'ë' => 'e', 'ē' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĕ' => 'e', 'ė' => 'e',
            'ƒ' => 'f', 'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h',
            'ħ' => 'h', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i',
            'ĩ' => 'i', 'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĳ' => 'ij', 'ĵ' => 'j',
            'ķ' => 'k', 'ĸ' => 'k', 'ł' => 'l', 'ľ' => 'l', 'ĺ' => 'l', 'ļ' => 'l',
            'ŀ' => 'l', 'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŉ' => 'n',
            'ŋ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'oe',
            '&ouml;' => 'oe', 'ø' => 'o', 'ō' => 'o', 'ő' => 'o', 'ŏ' => 'o', 'œ' => 'oe',
            'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r', 'š' => 's', 'ù' => 'u', 'ú' => 'u',
            'û' => 'u', 'ü' => 'ue', 'ū' => 'u', '&uuml;' => 'ue', 'ů' => 'u', 'ű' => 'u',
            'ŭ' => 'u', 'ũ' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ý' => 'y', 'ÿ' => 'y',
            'ŷ' => 'y', 'ž' => 'z', 'ż' => 'z', 'ź' => 'z', 'þ' => 't', 'ß' => 'ss',
            'ſ' => 'ss', 'ый' => 'iy', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',
            'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I',
            'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
            'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F',
            'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '',
            'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', 'а' => 'a',
            'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
            'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l',
            'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's',
            'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e',
            'ю' => 'yu', 'я' => 'ya'
        ];

        // make a human readable string
        $text = strtr($text, $replace);

        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d.]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // remove unwanted characters
        $text = preg_replace('~[^-\w.]+~', '', $text);

        $text = strtolower($text);

        return $text;
    }

    public static function dd ($var) {
        echo "<pre style='padding: 10px;background-color: #212121;color: #ffffff;border: 1px solid #fff;border-radius: 10px;'>";
        print_r($var);
        exit;
    }

    public static function strToDate($data)
    {
        $d1 = explode('às', $data);
        $dd1 = explode('/', $d1[0]);
        $dd2 = explode(':', $d1[1]);
        $dd3 = trim($dd1[2]).'-'.trim($dd1[1]).'-'.trim($dd1[0]).' '.trim($dd2[0]).':'.trim($dd2[1]).':'.trim($dd2[2]);
        return $dd3;
    }

    public static function ftrTime($time)
    {
        $h = explode(':', $time);
        $hh = ($h[0] < 10) ? '0'.$h[0] : $h[0];
        $mm = ($h[1] < 10) ? '0'.$h[1] : $h[1];
        $ss = ($h[2] < 10) ? '0'.$h[2] : $h[2];
        return $hour_formated = $hh.':'.$mm.':'.$ss;
    }

    public static function ftrDate($date, $separator)
    {
        $d = explode($separator, $date);
        $dd = $d[2];
        $mm = $d[1];
        $aa = $d[0];
        return $date_formated = $dd.'/'.$mm.'/'.$aa;
    }

    public static function calcDifTime($data_one, $data_two, $seconds=null)
    {
        $dateStart =  new DateTime($data_one);
        $dateEnd =  new DateTime($data_two);
        $dateNow = $dateStart->diff($dateEnd);
        if($seconds) {
            return $dateDiff = $dateNow->days .' dias '. $dateNow->h .' hs e '. $dateNow->i .' min e '. $dateNow->s .' Seg';
        } else {
            return $dateDiff = $dateNow->days .' dias '. $dateNow->h .' hs e '. $dateNow->i .' min';
        }
    }

    public static function arrayGroupBy($key, $data, $column = null)
    {
        $result = array();

        foreach ($data as $val) {
            $newArray = !empty($column) ? $val[$column] : $val;

            if (array_key_exists($key, $val)) {
                $result[$val[$key]][] = $newArray;
            } else {
                $result[""][] = $newArray;
            }
        }

        return $result;
    }

    public static function valorCalculado($totalVenda, $dados = null)
    {
        if($dados) {

            $valor = explode(',' , $dados);

            $totalPago = (float)$totalVenda;
            $taxa = (float)$valor[1];
            $valorTaxa = ($taxa/100)*$totalPago;
            return $totalFormatado = $totalPago - $valorTaxa;

        } else {
            return null;
        }
    }

    public static function taxaVenda($dados = null)
    {
        if($dados) {

            $valor = explode(',' , $dados);
            return (float)$valor[1];

        } else {
            return null;
        }
    }

    public static function qtdeParcelaVenda($dados = null)
    {
        if ($dados) {
            $valor = explode(',' , $dados);
            return (int)$valor[0];
        } else {
            return null;
        }
    }

    public static function bandeiraVenda($dados = null)
    {
        if($dados) {
            $valor = explode(',' , $dados);
            return $valor[2];
        } else {
            return null;
        }
    }

    public static function verificaDataRelatorioDia($data)
    {
        return isset($data->dataInicial) ? $data->dataInicial : date('Y-m-d');
    }

    public static function verificaDataRelatorioDataInicial($data)
    {
        return isset($data->dataInicial) ? $data->dataInicial : date('Y-m-01');
    }

    public static function verificaDataRelatorioDataFinal($data)
    {
        return isset($data->dataFinal) ? $data->dataFinal : date('Y-m-t');
    }

    public static function formataPreco($number)
    {
        $n = ($number) ? $number : 0.00;

        return "R$ ". number_format($n, 2 , ",", ".");
    }

    public static function calculaTotal($v1, $v2): string
    {
        $vFinal = ($v1 + $v2);
        return self::formataPreco($vFinal);
    }

    public static function calculaTotalTaxaPago($v1, $v2, $v3, $v4): string
    {
        $vSemTaxa = ($v1 + $v2);
        $vComTaxa = ($v3 + $v4);
        $vFinal = ($vSemTaxa - $vComTaxa);
        return self::formataPreco($vFinal);
    }

    public static function calculaTotalTaxaPagoTwo($v1, $v2): string
    {
        $vFinal = ($v1 - $v2);
        return self::formataPreco($vFinal);
    }

    public static function calculaTotalDescontoTaxa($values): string
    {
        $vFinal = 0;
        for ($i = 0; $i < sizeof($values); $i++) {
            $vFinal+= $values[$i];
        }
        return self::formataPreco($vFinal);
    }

    public static function calculaTotalSemDescontoTaxa($values): string
    {
        $vFinal = 0;
        for ($i = 0; $i < sizeof($values); $i++) {
            $vFinal+= $values[$i];
        }
        return self::formataPreco($vFinal);
    }

    public static function calculaTotalParceiroCredito($v1, $v2): string
    {
        $vFinal = ($v1 + $v2);
        return self::formataPreco($vFinal);
    }

    public static function calculaTotalParceiroDebito($v1, $v2): string
    {
        $vFinal = ($v1 + $v2);
        return self::formataPreco($vFinal);
    }

    public static function contaSimplesArray($values): string
    {
        $vFinal = 0;
        for ($i = 0; $i < sizeof($values); $i++) {
            $v1 = substr($values[$i],3);
            $v1 = (float)str_replace(',', '.', $v1);
            $vFinal+= $v1;
        }
        return self::formataPreco($vFinal);
    }

    public static function contaSimples($v1, $v2): string
    {
        $v1f = substr($v1,3);
        $v1f = (float)str_replace(',', '.', $v1f);
        $v1f = round($v1f, 2);
        $v2f = substr($v2,3);
        $v2f = (float)str_replace(',', '.', $v2f);
        $v2f = round($v2f, 2);

        $vFinal = ($v2f - $v1f);
        return $vFinal = "R$ " . number_format($vFinal, 2, ',', '.');
    }

    public static function formatCnpjCpf(string $value): string
    {
        $cnpj_cpf = preg_replace("/\D/", '', $value);
        $result = $value;

        if (strlen($cnpj_cpf) === 11) {
            $result = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        } elseif (strlen($cnpj_cpf) === 14) {
            $result = preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
        }

        return $result;
    }

    public static function formataTelefone(string $telefone): string
    {
        $size = strlen($telefone);
        $string = preg_replace("[^0-9]", "", $telefone);

        if ($size === 10) {
            $string = '(' . substr($string, 0, 2) . ') ' . substr($string, 2, 4) . '-' . substr($string, 6);
        } else if ($size === 11) {
            $string = '(' . substr($string, 0, 2) . ') ' . substr($string, 2, 5) . '-' . substr($string, 7);
        }
        return $string;
    }

    //Faz adicao do nono digito
    public static function numeroAjuste($numero)
    {
        //Se numero tem 11 digitos nao faz nada
        if(strlen($numero) == 11)
            return $numero;

        //se numero tem 10 digitos verifica
        if(strlen($numero) == 10){

            //Pega ddd e numero
            $ddd = substr($numero, 0, 2);
            $num = str_replace($ddd, '', $numero);

            //Verifica se é celular, se nao for retorno o proprio numero
            if($num[0] == 2 || $num[0] == 3){
                return $numero;
            }

            //se for celular, so tem 8 numeros, adiciona o 9
            if(strlen($num) == 8){
                $num = "9{$num}";
            }

            return "{$ddd}{$num}";
        }
    }

    public static function formataData(string $data, string $hora = null): string
    {
        if($hora) {
            $d = date('d/m/Y', strtotime($data));
            $h = date('H:i', strtotime($data));
            return $d." às ".$h;
        } else {
           return $d = date('d/m/Y', strtotime($data));
        }
    }
}
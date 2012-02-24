<?
        function random_str($len, $type = 0)
        {
                switch ($type)
                {
                case 0: $sym = 'abcdefghijklmnopqrstuvwxyz'; break;
                case 1: $sym = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; break;
                case 2: $sym = 'abcdefghijklmnopqrstuvwxyz0123456789'; break;
                case 3: $sym = '123456789'; break;
                }

                $max = strlen($sym) - 1;

                for ($i=0; $i<$len; $i++)
                        $r .= $sym[ rand(0, $max) ];

                return $r;
        }
?>

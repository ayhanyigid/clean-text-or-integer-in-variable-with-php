public function clean_textint_in_variable($text,$is_int_or_text = 'int')
    {
        $tmp = null;
        if (!empty($text))
        {
            if ($is_int_or_text == 'int')
            {
                $tmp  = filter_var($text, FILTER_SANITIZE_NUMBER_INT);
                $tmp  = preg_replace('/[A-Z-a-z]+/', '', $tmp);
            }
            elseif ($is_int_or_text == 'text')
            {
                $tmp  = preg_replace('/\s+/', '', $text);
                $tmp  = filter_var($tmp, FILTER_SANITIZE_STRING);
                $tmp  = preg_replace('/[0-9]+/', '', $tmp);
            }
        }

        return $tmp;
    }

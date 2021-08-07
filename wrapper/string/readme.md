
//bool-none

mb_ereg_search_setpos(int $offset): bool

mb_ereg_search(?string $pattern = null, ?string $options = null): bool




//bool-none-related

mb_ereg(string $pattern, string $string, array &$matches = null): bool





//bool-first


mb_check_encoding(array|string|null $value = null, ?string $encoding =
   null): bool


mb_send_mail(
       string $to,
       string $subject,
       string $message,
       array|string $additional_headers = [],
       ?string $additional_params = null
   ): bool


mb_ereg_search_init(string $string, ?string $pattern = null, ?string
   $options = null): bool



//bool-first-related

mb_parse_str(string $string, array &$result): bool











//bool-second-related

mb_eregi(string $pattern, string $string, array &$matches = null): bool

mb_ereg(string $pattern, string $string, array &$matches = null): bool







//bool|array-first

mb_detect_order(array|string|null $encoding = null): array|bool







//bool|string-first

mb_http_output(?string $encoding = null): string|bool

mb_internal_encoding(?string $encoding = null): string|bool

mb_language(?string $language = null): string|bool

mb_regex_encoding(?string $encoding = null): string|bool





//string-first

mb_convert_case(string $string, int $mode, ?string $encoding = null):
   string

mb_convert_kana(string $string, string $mode = "KV", ?string $encoding
   = null): string

mb_decode_mimeheader(string $string): string

mb_decode_numericentity(string $string, array $map, ?string $encoding =
   null): string

mb_encode_mimeheader(
       string $string,
       ?string $charset = null,
       ?string $transfer_encoding = null,
       string $newline = "\r\n",
       int $indent = 0
   ): string

mb_encode_numericentity(
       string $string,
       array $map,
       ?string $encoding = null,
       bool $hex = false
   ): string

mb_output_handler(string $string, int $status): string

mb_regex_set_options(?string $options = null): string

mb_strcut(
       string $string,
       int $start,
       ?int $length = null,
       ?string $encoding = null
   ): string

mb_strimwidth(
       string $string,
       int $start,
       int $width,
       string $trim_marker = "",
       ?string $encoding = null
   ): string

mb_strtolower(string $string, ?string $encoding = null): string

mb_strtoupper(string $string, ?string $encoding = null): string

mb_substr(
       string $string,
       int $start,
       ?int $length = null,
       ?string $encoding = null
   ): string






//string|false-first

mb_convert_encoding(array|string $string, string $to_encoding,
   array|string|null $from_encoding = null): array|string|false

mb_preferred_mime_name(string $encoding): string|false

mb_scrub(string $string, ?string $encoding = null): string

mb_stristr(
       string $haystack,
       string $needle,
       bool $before_needle = false,
       ?string $encoding = null
   ): string|false

mb_strrchr(
       string $haystack,
       string $needle,
       bool $before_needle = false,
       ?string $encoding = null
   ): string|false

mb_strrichr(
       string $haystack,
       string $needle,
       bool $before_needle = false,
       ?string $encoding = null
   ): string|false

mb_strstr(
       string $haystack,
       string $needle,
       bool $before_needle = false,
       ?string $encoding = null
   ): string|false








//string|false-second

mb_chr(int $codepoint, ?string $encoding = null): string|false

mb_detect_encoding(string $string, array|string|null $encodings = null,
   bool $strict = false): string|false









//string|false-therd&

mb_convert_variables(
       string $to_encoding,
       array|string $from_encoding,
       mixed &$var,
       mixed &...$vars
   ): string|false





//string|false|null-therd

mb_ereg_replace_callback(
       string $pattern,
       callable $callback,
       string $string,
       ?string $options = null
   ): string|false|null

mb_ereg_replace(
       string $pattern,
       string $replacement,
       string $string,
       ?string $options = null
   ): string|false|null

mb_eregi_replace(
       string $pattern,
       string $replacement,
       string $string,
       ?string $options = null
   ): string|false|null





//string|int|bool

mb_substitute_character(string|int|null $substitute_character = null):
   string|int|bool





//int-none

mb_ereg_search_getpos(): int





//int-first

mb_strlen(string $string, ?string $encoding = null): int

mb_strwidth(string $string, ?string $encoding = null): int







//int|false-first

mb_ord(string $string, ?string $encoding = null): int|false

mb_stripos(
       string $haystack,
       string $needle,
       int $offset = 0,
       ?string $encoding = null
   ): int|false

mb_strpos(
       string $haystack,
       string $needle,
       int $offset = 0,
       ?string $encoding = null
   ): int|false

mb_strripos(
       string $haystack,
       string $needle,
       int $offset = 0,
       ?string $encoding = null
   ): int|false

mb_strrpos(
       string $haystack,
       string $needle,
       int $offset = 0,
、     ?string $encoding = null
   ): int|false

mb_substr_count(string $haystack, string $needle, ?string $encoding =
   null): int















//array|false-none

mb_ereg_search_getregs(): array|false

 mb_ereg_search_pos(?string $pattern = null, ?string $options = null):
   array|false

mb_ereg_search_regs(?string $pattern = null, ?string $options = null):
   array|false







//array-first

mb_encoding_aliases(string $encoding): array

mb_list_encodings(): array

mb_str_split(string $string, int $length = 1, ?string $encoding =
   null): array







//array|false-second

mb_split(string $pattern, string $string, int $limit = -1): array|false






//array|string|int|false-first

mb_get_info(string $type = "all"): array|string|int|false























mb_check_encoding — 文字列が、指定したエンコーディングで有効なものかどうか  
mb_chr — Unicode のコードポイントに対応する文字を返す

mb_convert_case — 文字列に対してケースフォールディングを行う
mb_convert_encoding — 文字エンコーディングを変換する
mb_convert_kana — カナを("全角かな"、"半角かな"等に)変換する
mb_convert_variables — 変数の文字コードを変換する



mb_decode_mimeheader — MIME ヘッダフィールドの文字列をデコードする

mb_decode_numericentity — HTML 数値エンティティを文字にデコードする

mb_detect_encoding — 文字エンコーディングを検出する

mb_detect_order — 文字エンコーディング検出順序を設定あるいは取得する

mb_encode_mimeheader — MIMEヘッダの文字列をエンコードする

mb_encode_numericentity — 文字を HTML 数値エンティティにエンコードする

mb_encoding_aliases — 既知のエンコーディング・タイプのエイリアスを取得

mb_ereg_match — マルチバイト文字列が正規表現に一致するか調べる

mb_ereg_replace_callback — マルチバイト文字列にコールバック関数を用いた正規表現による置換を行う

mb_ereg_replace — マルチバイト文字列に正規表現による置換を行う

mb_ereg_search_getpos — 次の正規表現検索を開始する位置を取得する

mb_ereg_search_getregs — マルチバイト文字列が正規表現に一致する部分があるか調べる

mb_ereg_search_init — マルチバイト正規表現検索用の文字列と正規表現を設定する

mb_ereg_search_pos — 指定したマルチバイト文字列が正規表現に一致する部分の位置と長さを返す

mb_ereg_search_regs — 指定したマルチバイト文字列が正規表現に一致する部分を取得する

mb_ereg_search_setpos — 次の正規表現検索を開始する位置を設定する

mb_ereg_search — 指定したマルチバイト文字列が正規表現に一致するか調べる

mb_ereg — マルチバイト対応の正規表現マッチ

mb_eregi_replace — マルチバイト文字列に大文字小文字を区別せずに正規表現による置換を行う

mb_eregi — マルチバイトをサポートし、大文字小文字を無視した正規表現マッチ

mb_get_info — mbstring の内部設定値を取得する

mb_http_input — HTTP 入力文字エンコーディングを検出する

mb_http_output — HTTP 出力文字エンコーディングを設定あるいは取得する

mb_internal_encoding — 内部文字エンコーディングを設定あるいは取得する

mb_language — 現在の言語を設定あるいは取得する

mb_list_encodings — サポートするすべてのエンコーディングの配列を返す

mb_ord — 文字の Unicode コードポイントを取得する

mb_output_handler — 出力バッファ内で文字エンコーディングを変換するコールバック関数

mb_parse_str — GET/POST/COOKIE データをパースし、グローバル変数を設定する

mb_preferred_mime_name — MIME 文字設定を文字列で得る

mb_regex_encoding — 現在のマルチバイト正規表現用のエンコーディングを取得または設定する

mb_regex_set_options — マルチバイト正規表現関数のデフォルトオプションを取得または設定する

mb_scrub — 文字列に含まれる不正なバイト列を代替文字に置き換える

mb_send_mail — エンコード変換を行ってメールを送信する

mb_split — マルチバイト文字列を正規表現により分割する

mb_str_split — マルチバイト文字列を受取り、文字の配列を返す

mb_strcut — 文字列の一部を得る

mb_strimwidth — 指定した幅で文字列を丸める

mb_stripos — 大文字小文字を区別せず、 文字列の中で指定した文字列が最初に現れる位置を探す

mb_stristr — 大文字小文字を区別せず、 文字列の中で指定した文字列が最初に現れる位置を探す

mb_strlen — 文字列の長さを得る

mb_strpos — 文字列の中に指定した文字列が最初に現れる位置を見つける

mb_strrchr — 別の文字列の中で、ある文字が最後に現れる場所を見つける

mb_strrichr — 大文字小文字を区別せず、 別の文字列の中である文字が最後に現れる場所を探す

mb_strripos — 大文字小文字を区別せず、 文字列の中で指定した文字列が最後に現れる位置を探す

mb_strrpos — 文字列の中に指定した文字列が最後に現れる位置を見つける

mb_strstr — 文字列の中で、指定した文字列が最初に現れる位置を見つける

mb_strtolower — 文字列を小文字にする

mb_strtoupper — 文字列を大文字にする

mb_strwidth — 文字列の幅を返す

mb_substitute_character — 置換文字を設定あるいは取得する

mb_substr_count — 部分文字列の出現回数を数える

mb_substr — 文字列の一部を得る





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







//bool|array-none

mb_detect_order(array|string|null $encoding = null): array|bool








//bool|string-none

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






addcslashes — C 言語と同様にスラッシュで文字列をクォートする
addslashes — 文字列をスラッシュでクォートする
bin2hex — バイナリのデータを16進表現に変換する
chop — rtrim のエイリアス
chr — 数値から、1バイトの文字列を生成する
chunk_split — 文字列をより小さな部分に分割する
convert_cyr_string — キリル文字セットを他のものに変換する
convert_uudecode — uuencode された文字列をデコードする
convert_uuencode — 文字列を uuencode する
count_chars — 文字列で使用されている文字に関する情報を返す
crc32 — 文字列の crc32 多項式計算を行う
crypt — 文字列の一方向のハッシュ化を行う
echo — 1 つ以上の文字列を出力する
explode — 文字列を文字列により分割する
fprintf — フォーマットされた文字列をストリームに書き込む
get_html_translation_table — htmlspecialchars および htmlentities
 される変換テーブルを返す
hebrev — 論理表記のヘブライ語を物理表記に変換する
hebrevc — 論理表記のヘブライ語を、改行の変換も含めて物理表記に変換する
hex2bin — 16進エンコードされたバイナリ文字列をデコードする
html_entity_decode — HTML エンティティを対応する文字に変換する
htmlentities — 適用可能な文字を全て HTML エンティティに変換する
htmlspecialchars_decode — 特殊な HTML エンティティを文字に戻す
htmlspecialchars — 特殊文字を HTML エンティティに変換する
implode — 配列要素を文字列により連結する
join — implode のエイリアス
lcfirst — 文字列の最初の文字を小文字にする
levenshtein — 二つの文字列のレーベンシュタイン距離を計算する
localeconv — 数値に関するフォーマット情報を得る
ltrim — 文字列の最初から空白 (もしくはその他の文字) を取り除く
md5_file — 指定したファイルのMD5ハッシュ値を計算する
md5 — 文字列のmd5ハッシュ値を計算する
metaphone — 文字列の metaphone キーを計算する
money_format — 数値を金額文字列にフォーマットする
nl_langinfo — 言語およびロケール情報を検索する
nl2br — 改行文字の前に HTML の改行タグを挿入する
number_format — 数字を千の位毎にグループ化してフォーマットする
ord — 文字列の先頭バイトを、0 から 255 までの値に変換する
parse_str — 文字列を処理し、変数に代入する
print — 文字列を出力する
printf — フォーマット済みの文字列を出力する
quoted_printable_decode — quoted-printable 文字列を 8 ビット文字列に変換する
quoted_printable_encode — 8 ビット文字列を quoted-printable 文字列に変換する
quotemeta — メタ文字をクォートする
rtrim — 文字列の最後から空白 (もしくはその他の文字) を取り除く
setlocale — ロケール情報を設定する
sha1_file — ファイルの sha1 ハッシュを計算する
sha1 — 文字列の sha1 ハッシュを計算する
similar_text — 二つの文字列の間の類似性を計算する
soundex — 文字列の soundex キーを計算する
sprintf — フォーマットされた文字列を返す
sscanf — フォーマット文字列に基づき入力を処理する
str_contains — 指定された部分文字列が、文字列に含まれるかを調べる
str_ends_with — 文字列が、指定された文字列で終わるかを調べる。
str_getcsv — CSV 文字列をパースして配列に格納する
str_ireplace — 大文字小文字を区別しない str_replace
str_pad — 文字列を固定長の他の文字列で埋める
str_repeat — 文字列を反復する
str_replace — 検索文字列に一致したすべての文字列を置換する
str_rot13 — 文字列に rot13 変換を行う
str_shuffle — 文字列をランダムにシャッフルする
str_split — 文字列を配列に変換する
str_starts_with — 文字列が指定された部分文字列で始まるかを調べる
str_word_count — 文字列に使用されている単語についての情報を返す
strcasecmp — 大文字小文字を区別しないバイナリセーフな文字列比較を行う
strchr — strstr のエイリアス
strcmp — バイナリセーフな文字列比較
strcoll — ロケールに基づく文字列比較
strcspn — マスクにマッチしない最初のセグメントの長さを返す
strip_tags — 文字列から HTML および PHP タグを取り除く
stripcslashes — addcslashes でクォートされた文字列をアンクォートする
stripos — 大文字小文字を区別せずに文字列が最初に現れる位置を探す
stripslashes — クォートされた文字列のクォート部分を取り除く
stristr — 大文字小文字を区別しない strstr
strlen — 文字列の長さを得る
strnatcasecmp — "自然順"アルゴリズムにより大文字小文字を区別しない文字列比較を行う
strnatcmp — "自然順"アルゴリズムにより文字列比較を行う
strncasecmp — バイナリセーフで大文字小文字を区別しない文字列比較を、最初の n 文字について行う
strncmp — 最初の n 文字についてバイナリセーフな文字列比較を行う
strpbrk — 文字列の中から任意の文字を探す
strpos — 文字列内の部分文字列が最初に現れる場所を見つける
strrchr — 文字列中に文字が最後に現れる場所を取得する
strrev — 文字列を逆順にする
strripos — 文字列中で、特定の(大文字小文字を区別しない)文字列が最後に現れた位置を探す
strrpos — 文字列中に、ある部分文字列が最後に現れる場所を探す
strspn — 指定したマスク内に含まれる文字からなる文字列の最初のセグメントの長さを探す
strstr — 文字列が最初に現れる位置を見つける
strtok — 文字列をトークンに分割する
strtolower — 文字列を小文字にする
strtoupper — 文字列を大文字にする
strtr — 文字の変換あるいは部分文字列の置換を行う
substr_compare — 指定した位置から指定した長さの 2 つの文字列について、バイナリ対応で比較する
substr_count — 副文字列の出現回数を数える
substr_replace — 文字列の一部を置換する
substr — 文字列の一部分を返す
trim — 文字列の先頭および末尾にあるホワイトスペースを取り除く
ucfirst — 文字列の最初の文字を大文字にする
ucwords — 文字列の各単語の最初の文字を大文字にする
vfprintf — フォーマットされた文字列をストリームに書き込む
vprintf — フォーマットされた文字列を出力する
vsprintf — フォーマットされた文字列を返す
wordwrap — 指定した文字数で文字列を分割する

















   #[1]String [2]字串 [3]String [4]String [5]String [6]String [7]String
   [8]String [9]String — Cadena de caracteres [10]String [11]String

     * [12]Skip to main content
     * [13]Skip to search
     * [14]Skip to select language

   (BUTTON)

     * (BUTTON) Technologies
          + [15]Technologies Overview
          + [16]HTML
          + [17]CSS
          + [18]JavaScript
          + [19]Graphics
          + [20]HTTP
          + [21]APIs
          + [22]Browser Extensions
          + [23]MathML
     * (BUTTON) References & Guides
          + [24]Learn web development
          + [25]Tutorials
          + [26]References
          + [27]Developer Guides
          + [28]Accessibility
          + [29]Game development
          + [30]...more docs
     * (BUTTON) Feedback
          + [31]Send Feedback
          + [32]Contribute to MDN
          + [33]Report a content issue 🌐
          + [34]Report a platform issue 🌐

   Search MDN ____________________ Submit

    1. [35]開発者向けのウェブ技術

     [36]JavaScript

     [37]JavaScript リファレンス

     [38]標準組込みオブジェクト

     [39]String
     * [40]Change language
     * [41]View in English

   [42]This page was translated from English by the community. Learn more
   and join the MDN Web Docs community.

Table of contents

   (BUTTON) Table of contents
     * [43]解説
     * [44]コンストラクター
     * [45]静的メソッド
     * [46]インスタンスプロパティ
     * [47]インスタンスメソッド
     * [48]HTML ラッパーメソッド
     * [49]例
     * [50]仕様書
     * [51]ブラウザーの互換性
     * [52]関連情報

                                     String

   String オブジェクトは文字の並びを表したり操作したりするために使用されます。

[53]解説

   文字列は、テキスト形式で表現可能なデータを保持するのに便利です。最もよく使われる操作として、文字列の長さをチェックする [54]length
   プロパティ、 [55]文字列に対する + および += 演算子を用いた文字列の連結、文字列の中の部分文字列の存在や位置をチェックする
   [56]indexOf() メソッド、部分文字列を取り出す [57]substring() メソッドが挙げられます。

  [58]文字列の生成

   文字列は文字列リテラルからプリミティブとして、または [59]String() コンストラクターを使用して文字列として生成することができます。
const string1 = "文字列プリミティブ";
const string2 = 'これも文字列プリミティブ';
const string3 = `別な文字列プリミティブ`;
const string4 = new String("文字列オブジェクト");

   文字列プリミティブと文字列オブジェクトは、ほとんどの場合は交換して使用することができます。下記の「[60]文字列プリミティブと String
   オブジェクト」を参照してください。

   文字列リテラルは単一引用符または二重引用符を使用して指定することができ、どちらでも同様に扱われますが、逆引用符文字 `
   を使用することもできます。最後の形は[61]テンプレートリテラルを指定し、この形式では式を補完することができます。

  [62]文字へのアクセス

   文字列内の個々の文字へのアクセス方法には、二通りの方法があります。そのひとつは [63]charAt() メソッドです。
return 'ねこ'.charAt(1)  // "こ" が返される

   そしてもうひとつは、文字列を配列のようなオブジェクトとして扱い、数値の添字を用いる方法です。 (ECMAScript 5 で導入)
return 'ねこ'[1]  // "こ" が返される。

   ブラケット記法を使用した文字アクセスでは、これらのプロパティに値を設定したり削除したりすることはできません。関連したプロパティを書き込んだり設
   定したりすることもできません。 (より詳細な情報は [64]Object.defineProperty() を参照してください。)

  [65]文字列の比較

   C 言語では 文字列の比較の為に strcmp() 関数を用います。 JavaScript では単純に [66]小なり /
   大なり演算子を用います。
let a = 'a'
let b = 'b'
if (a < b) { // true
  console.log(a + ' は ' + b + ' より小さい')
} else if (a > b) {
  console.log(a + ' は ' + b + ' より大きい')
} else {
  console.log(a + ' と ' + b + ' は等しい')
}

   String インスタンスから継承される [67]localeCompare() メソッドを使用して同等の結果を得ることもできます。

   なお、 a == b は a と b
   の文字列が等しいかどうかを、通常の大文字小文字を区別して比較します。大文字小文字に関係なく比較したい場合は、次のように関数を使用してください。
function isEqual(str1, str2)
{
    return str1.toUpperCase() === str2.toUpperCase()
} // isEqual

   この関数では、特定の UTF-8 文字の変換に問題があるため、小文字の代わりに大文字を使用します。

  [68]文字列プリミティブと String オブジェクト

   JavaScript では、 String オブジェクトと[69]プリミティブ文字列は区別されることに注意してください。
   ([70]Boolean や [71]Number にも同じことが言えます。)

   文字列リテラル (二重引用符または単一引用符で示されます)、および String 関数をコンストラクター以外の場面で (すなわち
   [72]new キーワードを使わずに) 呼び出した場合はプリミティブの文字列になります。 JavaScript
   では、必要に応じてプリミティブの文字列が自動的に String オブジェクトに変換されるので、プリミティブの文字列に対して String
   オブジェクトのメソッドを使用することができます。プリミティブの文字列に対して、メソッドの呼び出しやプロパティの参照が行われようとした場合、
   JavaScript は自動的にプリミティブの文字列をオブジェクトでラップし、メソッドを呼び出したりプロパティの参照を行ったりします。
let s_prim = 'foo'
let s_obj = new String(s_prim)

console.log(typeof s_prim) // Logs "string"
console.log(typeof s_obj)  // Logs "object"

   プリミティブの文字列と String オブジェクトは [73]eval() を使用すると異なる結果となります。 eval
   に渡されたプリミティブは、ソースコードとして扱われます。 String
   オブジェクトは他のオブジェクトと同様に、オブジェクトとしてそのままの文字列を返します。
let s1 = '2 + 2'              // 文字列プリミティブを生成
var s2 = new String('2 + 2')  // String オブジェクトを生成
console.log(eval(s1))         // 数値の 4 を返す
console.log(eval(s2))         // 文字列の "2 + 2" を返す

   こういった理由から、プリミティブの文字列を期待して実装されたコードは String
   オブジェクトでうまく動作しないことがあります。しかし、一般的にはこれらの違いを考慮しなければならないことはあまりありません。

   なお、 String オブジェクトは [74]valueOf() メソッドを用いることで、プリミティブの文字列に変換することができます。
console.log(eval(s2.valueOf()))  // 数値の 4 を返す

  [75]エスケープ表記

   通常の文字列とは異なる特殊な文字を表示するためには、エスケープ表記を使用します。
   コード 出力
   \XXX
   (XXX = 1～3桁の8進数、 0～377 の範囲) ISO-8859-1 の文字または U+0000 から U+00FF の間の
   Unicode コードポイントです。
   \' 単一引用符
   \" 二重引用符
   \\ バックスラッシュ (\文字)
   \n 改行
   \r 復帰
   \v 垂直タブ
   \t 水平タブ
   \b バックスペース
   \f ページ送り
   \uXXXX (XXXX = 4桁の16進数、 0x0000～0xFFFF の範囲) UTF-16 のコード単位 / U+0000 から
   U+FFFF の間の Unicode コードポイント
   \u{X} ... \u{XXXXXX}
   (X…XXXXXX = 1～6桁の16進数、 0x0–0x10FFFF の範囲) UTF-32 のコード単位 / U+0000 から
   U+10FFFF の間の Unicode コードポイント
   \xXX
   (XX = 2桁の16進数、 0x00～0xFF の範囲) ISO-8859-1 の文字 / U+0000 から U+00FF の間の
   Unicode コードポイント

  [76]長い文字列リテラル

   時には、コードに非常に長い文字列が含まれる場合があります。行を延々と長くしたり、エディターに任せて折り返したりするよりも、実際の文字列の内容に
   影響を与えずに文字列をソースコード内で複数行に分割したいことがあります。これを行うには2つの方法があります。

方法 1

   [77]+ 演算子を使用して、次のように複数の文字列を追加することができます。
let longString = "This is a very long string which needs " +
                 "to wrap across multiple lines because " +
                 "otherwise my code is unreadable."

方法 2

   各行の末尾にバックスラッシュ文字 (\) を使用して、文字列が次の行に続くことを示すことができます。バックスラッシュの後に、 (改行を除いて)
   空白やその他の文字を置いたり、インデントを置いたりしていないか確認してください。さもないと動作しません。

   この形式は以下のようになります。
let longString = "This is a very long string which needs \
to wrap across multiple lines because \
otherwise my code is unreadable."

   これらの結果はともに同じ文字列が生成されます。

[78]コンストラクター

   [79]String()
          新しい String
          オブジェクトを生成するために使用します。コンストラクターではなく関数として呼び出されたときは型変換を行うので、普通はより有用です
          。

[80]静的メソッド

   [81]String.fromCharCode(num1 [, ...[, numN]])
          指定された Unicode 値の列から生成した文字列を返します。

   [82]String.fromCodePoint(num1 [, ...[, numN)
          指定された Unicode コードポイントの列から生成した文字列を返します。

   [83]String.raw()
          生のテンプレート文字列から生成した文字列を返します。

[84]インスタンスプロパティ

   [85]String.prototype.length
          文字列の length を反映します。読み取り専用です。

[86]インスタンスメソッド

   [87]String.prototype.charAt(index)
          index で指定された位置の文字 (UTF-16 コード 1 つから成ります) を返します。

   [88]String.prototype.charCodeAt(index)
          index で与えられた位置の文字の UTF-16 の値を示す数を返します。

   [89]String.prototype.codePointAt(pos)
          pos で指定された位置から始まる UTF-16
          エンコードされた際のコードポイントの、コードポイントの値である正の整数を返します。

   [90]String.prototype.concat(str [, ...strN ])
          2 つ (以上) の文字列を連結し、新しい文字列を返します。

   [91]String.prototype.includes(searchString [, position])
          文字列中に searchString が含まれているかを返します。

   [92]String.prototype.endsWith(searchString [, length])
          文字列の末尾に指定された文字列 searchString が含まれているかを返します。

   [93]String.prototype.indexOf(searchValue [, fromIndex])
          呼び出す [94]String オブジェクト中で、 searchValue が最初に現れる位置を返します。見つからなかった場合は
          -1 を返します。

   [95]String.prototype.lastIndexOf(searchValue [, fromIndex])
          呼び出す [96]String オブジェクト中で、 searchValue が最後に現れる位置を返します。見つからない場合は
          -1 を返します。

   [97]String.prototype.localeCompare(compareString [, locales [,
          options]])
          参照文字列 compareString
          が、並べ替え順において、与えられた文字列の前になるか後になるか、あるいは、同じかどうかを示す数値を返します。

   [98]String.prototype.match(regexp)
          文字列に対して正規表現 regexp を一致させるために使用されます。

   [99]String.prototype.matchAll(regexp)
          regexp が一致するものすべてのイテレーターを返します。

   [100]String.prototype.normalize([form])
          呼び出された文字列の値の Unicode 正規化形式を返します。

   [101]String.prototype.padEnd(targetLength [, padString])
          現在の文字列の末尾から指定された文字列で埋めた、長さ targetLength 文字の新たな文字列を返します。

   [102]String.prototype.padStart(targetLength [, padString])
          現在の文字列の先頭から指定した文字列で埋めた、長さ targetLength 文字の新たな文字列を作成します。

   [103]String.prototype.repeat(count)
          オブジェクトの要素を count 回繰り返した文字列を返します。

   [104]String.prototype.replace(searchFor, replaceWith)
          searchFor が現れたところを replaceWith で置換するために使用します。 searchFor
          は文字列または正規表現であり、 replaceWith は文字列または関数です。

   [105]String.prototype.replaceAll(searchFor, replaceWith)
          searchFor が現れたところすべてを replaceWith で置換するために使用します。 searchFor
          は文字列または正規表現であり、 replaceWith は文字列または関数です。

   [106]String.prototype.search(regexp)
          正規表現 regexp と呼び出された文字列が一致するところを検索します。

   [107]String.prototype.slice(beginIndex[, endIndex])
          文字列の一区間を取り出し、新しい文字列を返します。

   [108]String.prototype.split([sep [, limit] ])
          呼び出した文字列を、部分文字列 sep が現れるところで分割し、文字列の配列を生成して返します。

   [109]String.prototype.startsWith(searchString [, length])
          呼び出した文字列が文字列 searchString で開始されているかを判断します。

   [110]String.prototype.substr()
          文字列において、指定された位置から指定された文字数の文字を返します。

   [111]String.prototype.substring(indexStart [, indexEnd])
          呼び出した文字列の指定された位置以降 (または区間) にある文字が入った新しい文字列を返します。

   [112]String.prototype.toLocaleLowerCase( [locale, ...locales])
          文字列内の文字が、現在のロケールに沿って小文字に変換されます。

          ほとんどの言語では、これは [113]toLowerCase() と同じものを返します。

   [114]String.prototype.toLocaleUpperCase( [locale, ...locales])
          文字列内の文字が、現在のロケールに沿って大文字に変換されます。

          ほとんどの言語では、これは [115]toUpperCase() と同じものを返します。

   [116]String.prototype.toLowerCase()
          小文字に変換された文字列の値を呼び出して返します。

   [117]String.prototype.toString()
          指定されたオブジェクトの文字列を返します。[118]Object.prototype.toString()
          メソッドを上書きします。

   [119]String.prototype.toUpperCase()
          大文字に変換された文字列の値を呼び出して返します。

   [120]String.prototype.trim()
          文字列の先頭と末尾にある空白を削除します。 ECMAScript 5 標準の一部です。

   [121]String.prototype.trimStart()
          文字列の先頭にある空白を削除します。

   [122]String.prototype.trimEnd()
          文字列の末尾にある空白を削除します。

   [123]String.prototype.valueOf()
          指定されたオブジェクトのプリミティブ値を返します。 [124]Object.prototype.valueOf()
          メソッドを上書きします。

   [125]String.prototype.@@iterator()
          文字列値のコードポイントを反復処理し、文字列値として各コードポイントを返す、新しい Iterator オブジェクトを返します。

[126]HTML ラッパーメソッド

   非推奨です。これらのメソッドは避けてください。

   以下のメソッドは、それぞれ、特定の HTML タグでラップされた文字列のコピーを返します。

   [127]String.prototype.anchor()
          [128]<a name="name"> (ハイパーテキストのターゲット)

   [129]String.prototype.big()
          [130]<big>

   [131]String.prototype.blink()
          [132]<blink>

   [133]String.prototype.bold()
          [134]<b>

   [135]String.prototype.fixed()
          [136]<tt>

   [137]String.prototype.fontcolor()
          [138]<font color="color">

   [139]String.prototype.fontsize()
          [140]<font size="size">

   [141]String.prototype.italics()
          [142]<i>

   [143]String.prototype.link()
          [144]<a href="url"> (URL へのリンク)

   [145]String.prototype.small()
          [146]<small>

   [147]String.prototype.strike()
          [148]<strike>

   [149]String.prototype.sub()
          [150]<sub>

   [151]String.prototype.sup()
          [152]<sup>

[153]例

  [154]文字列変換

   String を使用すると、 [155]toString() よりも信頼性の高い代替手段となり、 [156]null,
   [157]undefined, [158]symbols に対して使用することもできます。
let outputStrings = []
for (let i = 0, n = inputValues.length; i < n; ++i) {
  outputStrings.push(String(inputValues[i]));
}

[159]仕様書

              仕様書
   [160]ECMAScript (ECMA-262)
   String の定義

[161]ブラウザーの互換性

   BCD tables only load in the browser

[162]関連情報

     * [163]JavaScript ガイドのテキスト処理
     * [164]RegExp
     * [165]DOMString
     * [166]StringView — 型付き配列に基づいた C 風の文字列の表現
     * [167]バイナリ文字列

Found a problem with this page?

     * [168]Edit on GitHub
     * [169]Source on GitHub
     * [170]Report a problem with this content on GitHub
     * Want to fix the problem yourself? See [171]our Contribution guide.

   Last modified: Aug 5, 2021, [172]by MDN contributors

   Change your language

   Select your preferred language [日本語_____________......] (BUTTON) Change
   language

    Related Topics

    1. [173]Standard built-in objects
    2. [174]String
    3. [175]プロパティ
         1. [176]String length
    4. [177]メソッド
         1. [178]String.prototype[@@iterator]()
         2. [179]String.prototype.anchor()
         3. [180]String.prototype.at()
         4. [181]String.prototype.big()
         5. [182]String.prototype.blink()
         6. [183]String.prototype.bold()
         7. [184]String.prototype.charAt()
         8. [185]String.prototype.charCodeAt()
         9. [186]String.prototype.codePointAt()
        10. [187]String.prototype.concat()
        11. [188]String.prototype.endsWith()
        12. [189]String.prototype.fixed()
        13. [190]String.prototype.fontcolor()
        14. [191]String.prototype.fontsize()
        15. [192]String.fromCharCode()
        16. [193]String.fromCodePoint()
        17. [194]String.prototype.includes()
        18. [195]String.prototype.indexOf()
        19. [196]String.prototype.italics()
        20. [197]String.prototype.lastIndexOf()
        21. [198]String.prototype.link()
        22. [199]String.prototype.localeCompare()
        23. [200]String.prototype.match()
        24. [201]String.prototype.matchAll()
        25. [202]String.prototype.normalize()
        26. [203]String.prototype.padEnd()
        27. [204]String.prototype.padStart()
        28. [205]String.raw()
        29. [206]String.prototype.repeat()
        30. [207]String.prototype.replace()
        31. [208]String.prototype.replaceAll()
        32. [209]String.prototype.search()
        33. [210]String.prototype.slice()
        34. [211]String.prototype.small()
        35. [212]String.prototype.split()
        36. [213]String.prototype.startsWith()
        37. [214]String.prototype.strike()
        38. [215]String.prototype.sub()
        39. [216]String.prototype.substr()
        40. [217]String.prototype.substring()
        41. [218]String.prototype.sup()
        42. [219]String.prototype.toLocaleLowerCase()
        43. [220]String.prototype.toLocaleUpperCase()
        44. [221]String.prototype.toLowerCase()
        45. [222]String.prototype.toSource()
        46. [223]String.prototype.toString()
        47. [224]String.prototype.toUpperCase()
        48. [225]String.prototype.trim()
        49. [226]String.prototype.trimEnd()
        50. [227]String.prototype.trimStart()
        51. [228]String.prototype.valueOf()
    5. 継承
    6. [229]Function
    7. [230]プロパティ
         1. [231]Function.arguments
         2. [232]Function.caller
         3. [233]Function.displayName
         4. [234]Function.length
         5. [235]Function.name
    8. [236]メソッド
         1. [237]Function.prototype.apply()
         2. [238]Function.prototype.bind()
         3. [239]Function.prototype.call()
         4. [240]Function.prototype.toSource()
         5. [241]Function.prototype.toString()
    9. [242]Object
   10. [243]プロパティ
         1. [244]Object.prototype.constructor
         2. [245]Object.prototype.__proto__
   11. [246]メソッド
         1. [247]Object.prototype.__defineGetter__()
         2. [248]Object.prototype.__defineSetter__()
         3. [249]Object.prototype.__lookupGetter__()
         4. [250]Object.prototype.__lookupSetter__()
         5. [251]Object.prototype.hasOwnProperty()
         6. [252]Object.prototype.isPrototypeOf()
         7. [253]Object.prototype.propertyIsEnumerable()
         8. [254]Object.setPrototypeOf()
         9. [255]Object.prototype.toLocaleString()
        10. [256]Object.prototype.toSource()
        11. [257]Object.prototype.toString()
        12. [258]Object.prototype.valueOf()

     * [259]Web Technologies
     * [260]Learn Web Development
     * [261]About MDN
     * [262]Feedback

     * [263]About
     * [264]MDN Web Docs Store
     * [265]Contact Us
     * [266]Firefox

MDN

     * [267]MDN on Twitter
     * [268]MDN on Github

Mozilla

     * [269]Mozilla on Twitter
     * [270]Mozilla on Instagram

   © 2005-2021 Mozilla and individual contributors. Content is available
   under [271]these licenses.
     * [272]Terms
     * [273]Privacy
     * [274]Cookies

参照

   見えるリンク:
   1. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
   2. https://developer.mozilla.org/zh-TW/docs/Web/JavaScript/Reference/Global_Objects/String
   3. https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String
   4. https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/String
   5. https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/String
   6. https://developer.mozilla.org/pl/docs/Web/JavaScript/Reference/Global_Objects/String
   7. https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/String
   8. https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/String
   9. https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/String
  10. https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String
  11. https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Global_Objects/String
  12. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#content
  13. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#main-q
  14. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#select-language
  15. https://developer.mozilla.org/ja/docs/Web
  16. https://developer.mozilla.org/ja/docs/Web/HTML
  17. https://developer.mozilla.org/ja/docs/Web/CSS
  18. https://developer.mozilla.org/ja/docs/Web/JavaScript
  19. https://developer.mozilla.org/ja/docs/Web/Guide/Graphics
  20. https://developer.mozilla.org/ja/docs/Web/HTTP
  21. https://developer.mozilla.org/ja/docs/Web/API
  22. https://developer.mozilla.org/ja/docs/Mozilla/Add-ons/WebExtensions
  23. https://developer.mozilla.org/ja/docs/Web/MathML
  24. https://developer.mozilla.org/ja/docs/Learn
  25. https://developer.mozilla.org/ja/docs/Web/Tutorials
  26. https://developer.mozilla.org/ja/docs/Web/Reference
  27. https://developer.mozilla.org/ja/docs/Web/Guide
  28. https://developer.mozilla.org/ja/docs/Web/Accessibility
  29. https://developer.mozilla.org/ja/docs/Games
  30. https://developer.mozilla.org/ja/docs/Web
  31. https://developer.mozilla.org/ja/docs/MDN/Contribute/Feedback
  32. https://developer.mozilla.org/ja/docs/MDN/Contribute
  33. https://github.com/mdn/content/issues/new
  34. https://github.com/mdn/yari/issues/new
  35. https://developer.mozilla.org/ja/docs/Web
  36. https://developer.mozilla.org/ja/docs/Web/JavaScript
  37. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference
  38. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects
  39. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
  40. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#select-language
  41. https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String
  42. https://developer.mozilla.org/en-US/docs/MDN/Contribute/Localize#active_locales
  43. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#description
  44. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#constructor
  45. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#static_methods
  46. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#instance_properties
  47. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#instance_methods
  48. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#html_wrapper_methods
  49. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#examples
  50. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#specifications
  51. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#browser_compatibility
  52. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#see_also
  53. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#description
  54. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/length
  55. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Operators/String_Operators
  56. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/indexOf
  57. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/substring
  58. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#creating_strings
  59. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/String
  60. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#string_primitives_and_string_objects
  61. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Template_literals
  62. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#character_access
  63. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/charAt
  64. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/defineProperty
  65. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#comparing_strings
  66. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Operators
  67. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/localeCompare
  68. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#string_primitives_and_string_objects
  69. https://developer.mozilla.org/ja/docs/Glossary/Primitive
  70. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Boolean
  71. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Number
  72. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Operators/new
  73. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/eval
  74. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/valueOf
  75. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#escape_notation
  76. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#long_literal_strings
  77. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Operators/Addition
  78. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#constructor
  79. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/String
  80. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#static_methods
  81. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fromCharCode
  82. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fromCodePoint
  83. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/raw
  84. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#instance_properties
  85. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/length
  86. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#instance_methods
  87. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/charAt
  88. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/charCodeAt
  89. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/codePointAt
  90. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/concat
  91. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/includes
  92. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/endsWith
  93. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/indexOf
  94. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
  95. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/lastIndexOf
  96. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
  97. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/localeCompare
  98. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/match
  99. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/matchAll
 100. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/normalize
 101. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/padEnd
 102. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/padStart
 103. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/repeat
 104. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/replace
 105. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/replaceAll
 106. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/search
 107. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/slice
 108. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/split
 109. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/startsWith
 110. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/substr
 111. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/substring
 112. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toLocaleLowerCase
 113. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toLowerCase
 114. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toLocaleUpperCase
 115. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toUpperCase
 116. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toLowerCase
 117. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toString
 118. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/toString
 119. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toUpperCase
 120. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/trim
 121. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/trimStart
 122. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/trimEnd
 123. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/valueOf
 124. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/valueOf
 125. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/@@iterator
 126. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#html_wrapper_methods
 127. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/anchor
 128. https://developer.mozilla.org/ja/docs/Web/HTML/Element/a#attr-name
 129. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/big
 130. https://developer.mozilla.org/ja/docs/Web/HTML/Element/big
 131. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/blink
 132. https://developer.mozilla.org/ja/docs/Web/HTML/Element/blink
 133. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/bold
 134. https://developer.mozilla.org/ja/docs/Web/HTML/Element/b
 135. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fixed
 136. https://developer.mozilla.org/ja/docs/Web/HTML/Element/tt
 137. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fontcolor
 138. https://developer.mozilla.org/ja/docs/Web/HTML/Element/font#attr-color
 139. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fontsize
 140. https://developer.mozilla.org/ja/docs/Web/HTML/Element/font#attr-size
 141. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/italics
 142. https://developer.mozilla.org/ja/docs/Web/HTML/Element/i
 143. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/link
 144. https://developer.mozilla.org/ja/docs/Web/HTML/Element/a#attr-href
 145. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/small
 146. https://developer.mozilla.org/ja/docs/Web/HTML/Element/small
 147. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/strike
 148. https://developer.mozilla.org/ja/docs/Web/HTML/Element/strike
 149. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/sub
 150. https://developer.mozilla.org/ja/docs/Web/HTML/Element/sub
 151. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/sup
 152. https://developer.mozilla.org/ja/docs/Web/HTML/Element/sup
 153. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#examples
 154. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#string_conversion
 155. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toString
 156. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/null
 157. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/undefined
 158. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Symbol
 159. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#specifications
 160. https://tc39.es/ecma262/#sec-string-objects
 161. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#browser_compatibility
 162. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String#see_also
 163. https://developer.mozilla.org/ja/docs/Web/JavaScript/Guide/Text_formatting
 164. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/RegExp
 165. https://developer.mozilla.org/ja/docs/Web/API/DOMString
 166. https://developer.mozilla.org/ja/docs/Mozilla/Add-ons/Code_snippets/StringView
 167. https://developer.mozilla.org/ja/docs/Web/API/DOMString/Binary
 168. https://github.com/mdn/translated-content/edit/main/files/ja/web/javascript/reference/global_objects/string/index.html
 169. https://github.com/mdn/translated-content/blob/main/files/ja/web/javascript/reference/global_objects/string/index.html
 170. https://github.com/mdn/translated-content/issues/new?body=MDN+URL:+https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String

####+What+information+was+incorrect,+unhelpful,+or+incomplete?


####+Specific+section+or+headline?


####+What+did+you+expect+to+see?


####+Did+you+test+this?+If+so,+how?


<!--+Do+not+make+changes+below+this+line+-->
<details>
<summary>MDN+Content+page+report+details</summary>

*+Folder:+`ja/web/javascript/reference/global_objects/string`
*+MDN+URL:+https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
*+GitHub+URL:+https://github.com/mdn/translated-content/blob/main/files/ja/web/javascript/reference/global_objects/string/index.html
*+Last+commit:+https://github.com/mdn/translated-content/commit/1946e9cbf0c6fd2ff9274283f0deecd135056d89
*+Document+last+modified:+2021-08-05T18:30:30.000Z

</details>&title=Issue+with+"String":+(short+summary+here+please)&labels=needs-triage,l10n-ja
 171. https://github.com/mdn/content/blob/main/README.md
 172. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/contributors.txt
 173. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects
 174. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
 175. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
 176. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/length
 177. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
 178. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/@@iterator
 179. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/anchor
 180. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/at
 181. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/big
 182. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/blink
 183. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/bold
 184. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/charAt
 185. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/charCodeAt
 186. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/codePointAt
 187. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/concat
 188. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/endsWith
 189. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fixed
 190. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fontcolor
 191. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fontsize
 192. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fromCharCode
 193. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/fromCodePoint
 194. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/includes
 195. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/indexOf
 196. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/italics
 197. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/lastIndexOf
 198. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/link
 199. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/localeCompare
 200. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/match
 201. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/matchAll
 202. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/normalize
 203. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/padEnd
 204. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/padStart
 205. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/raw
 206. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/repeat
 207. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/replace
 208. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/replaceAll
 209. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/search
 210. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/slice
 211. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/small
 212. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/split
 213. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/startsWith
 214. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/strike
 215. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/sub
 216. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/substr
 217. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/substring
 218. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/sup
 219. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toLocaleLowerCase
 220. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toLocaleUpperCase
 221. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toLowerCase
 222. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toSource
 223. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toString
 224. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/toUpperCase
 225. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
 226. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/trimEnd
 227. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/trimStart
 228. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/valueOf
 229. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function
 230. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
 231. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/arguments
 232. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/caller
 233. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/displayName
 234. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/length
 235. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/name
 236. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
 237. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/apply
 238. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/bind
 239. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/call
 240. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/toSource
 241. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Function/toString
 242. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object
 243. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
 244. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/constructor
 245. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/proto
 246. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String
 247. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/__defineGetter__
 248. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/__defineSetter__
 249. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/__lookupGetter__
 250. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/__lookupSetter__
 251. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/hasOwnProperty
 252. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/isPrototypeOf
 253. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/propertyIsEnumerable
 254. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/setPrototypeOf
 255. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/toLocaleString
 256. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/toSource
 257. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/toString
 258. https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Object/valueOf
 259. https://developer.mozilla.org/ja/docs/Web
 260. https://developer.mozilla.org/ja/docs/Learn
 261. https://developer.mozilla.org/ja/docs/MDN/About
 262. https://developer.mozilla.org/ja/docs/MDN/Feedback
 263. https://www.mozilla.org/about/
 264. https://shop.spreadshirt.com/mdn-store/
 265. https://www.mozilla.org/contact/
 266. https://www.mozilla.org/firefox/?utm_source=developer.mozilla.org&utm_campaign=footer&utm_medium=referral
 267. https://twitter.com/mozdevnet
 268. https://github.com/mdn/
 269. https://twitter.com/mozilla
 270. https://www.instagram.com/mozillagram/
 271. https://developer.mozilla.org/docs/MDN/About#Copyrights_and_licenses
 272. https://www.mozilla.org/about/legal/terms/mozilla
 273. https://www.mozilla.org/privacy/websites/
 274. https://www.mozilla.org/privacy/websites/#cookies

   隠されたリンク:
 276. https://developer.mozilla.org/ja/
 277. https://developer.mozilla.org/ja/

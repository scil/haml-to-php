<?php
/* author & copyright: Marc Weber
 * copyright 2011
 * license: GPL (contact me if you have other requirements )
 * See Haml.php for an overv
 */

class HamlMayContain
{

    static public function mayContain($doctype, $isxhtml, $parentTag, $childTag)
    {
        return;
        static $a;
        $parentTag = strtolower($parentTag);
        $childTag = strtolower($childTag);
        if (is_null($a)) {
            $a = array(
                'var' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'ul' => explode(' ', 'li'),
                'tt' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'tr' => explode(' ', 'th td'),
                'title' => explode(' ', 'pcdata'),
                'title' => explode(' ', 'pcdata'),
                'thead' => explode(' ', 'tr'),
                'th' => explode(' ', 'pcdata p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'tfoot' => explode(' ', 'tr'),
                'textarea' => explode(' ', 'pcdata'),
                'textarea' => explode(' ', 'pcdata'),
                'td' => explode(' ', 'pcdata p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'tbody' => explode(' ', 'tr'),
                'table' => explode(' ', 'caption col colgroup thead tfoot tbody tr'),
                'sup' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'sub' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'style' => explode(' ', 'pcdata'),
                'style' => explode(' ', 'pcdata'),
                'strong' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'span' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'small' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'select' => explode(' ', 'optgroup option'),
                'script' => explode(' ', 'pcdata'),
                'script' => explode(' ', 'pcdata'),
                'samp' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'q' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'pre' => explode(' ', 'pcdata a tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup br span bdo map ins del script input select textarea label button'),
                'param' => explode(' ', 'empty'),
                'param' => explode(' ', 'empty'),
                'p' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'option' => explode(' ', 'pcdata'),
                'option' => explode(' ', 'pcdata'),
                'optgroup' => explode(' ', 'option'),
                'ol' => explode(' ', 'li'),
                'object' => explode(' ', 'pcdata param p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'noscript' => explode(' ', 'p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form noscript ins del script'),
                'meta' => explode(' ', 'empty'),
                'meta' => explode(' ', 'empty'),
                'map' => explode(' ', 'p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form noscript ins del script area'),
                'link' => explode(' ', 'empty'),
                'link' => explode(' ', 'empty'),
                'li' => explode(' ', 'pcdata p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'legend' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'label' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'kbd' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'ins' => explode(' ', 'pcdata p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'input' => explode(' ', 'empty'),
                'input' => explode(' ', 'empty'),
                'img' => explode(' ', 'empty'),
                'img' => explode(' ', 'empty'),
                'i' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'hr' => explode(' ', 'empty'),
                'hr' => explode(' ', 'empty'),
                'head' => explode(' ', 'script style meta link object title base'),
                'h6' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'h5' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'h4' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'h3' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'h2' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'h1' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'form' => explode(' ', 'p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table noscript ins del script'),
                'fieldset' => explode(' ', 'pcdata legend p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'em' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'dt' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'dl' => explode(' ', 'dt dd'),
                'div' => explode(' ', 'pcdata p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'dfn' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'del' => explode(' ', 'pcdata p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'dd' => explode(' ', 'pcdata p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button noscript ins del script'),
                'colgroup' => explode(' ', 'col'),
                'col' => explode(' ', 'empty'),
                'col' => explode(' ', 'empty'),
                'code' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'cite' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'caption' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'button' => explode(' ', 'pcdata p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address table br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup noscript ins del script'),
                'br' => explode(' ', 'empty'),
                'br' => explode(' ', 'empty'),
                'body' => explode(' ', 'p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form noscript ins del script'),
                'blockquote' => explode(' ', 'p h1 h2 h3 h4 h5 h6 div ul ol dl pre hr blockquote address fieldset table form noscript ins del script'),
                'big' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'bdo' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'base' => explode(' ', 'empty'),
                'base' => explode(' ', 'empty'),
                'b' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'area' => explode(' ', 'empty'),
                'area' => explode(' ', 'empty'),
                'address' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'acronym' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'abbr' => explode(' ', 'pcdata a br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'a' => explode(' ', 'pcdata br span bdo map object img tt i b big small em strong dfn code q samp kbd var cite abbr acronym sub sup input select textarea label button ins del script'),
                'html' => explode(' ', 'head body'),
            );
        }
        if ($isxhtml && isset($a[$parentTag]) && !(in_array($childTag, $a[$parentTag])))
            throw new HamlParseException("tag $parentTag should contain only these tags: " . implode(",", $a[$parentTag]) . ' but ' . $childTag . ' requested!');
    }

}

/*
* high level overview:
* 1) HAML is parsed to a tree (represented as arrays). instantiating HamlTree does this
* 2) tree is converted to items: (funcs: flatten*)
*   - text (always quoted)
*   - verbatim (never quoted)
*   - php (add php. used by blocks)
*   - phpecho (echo php result)
* 3) create PHP code out of items (func toPHP)
*   two options:
*    - code which can be required
*    - code which defines a function you can call
* 1),2),3) are all called for you by hamlToPHPStr
 */
class HamlParser
{
    public $s; // the haml file contents as string
    public $o; // file offset

    // returns array($line, $col, $chars_after)
    public function pos($o = null)
    {
        if (is_null($o)) $o = $this->o;
        $lines = explode("\n", substr($this->s, 0, $o));
        $len = count($lines);
        return array($len, strlen($lines[$len - 1]), substr($this->s, $o, 50));
    }

    protected function error($msg)
    {
        if (is_string($msg))
            $msg = array('o' => $this->o, 'msg' => $msg);
        throw new HamlParseException($this->formatErr($msg));
    }

    // increases offset on if str matches at offset
    protected function str($s)
    {
        if (substr($this->s, $this->o, $l = strlen($s)) == $s) {
            $this->o += $l;
            return true;
        }
        return false;
    }

    // increases offset on if reg matches at offset
    protected function reg($reg, &$m)
    {
        $reg = str_replace('\s', ' \t', $reg);
        if (preg_match('/(?m)' . $reg . '/', $this->s, $m, 0, $this->o)) {
            return $this->str($m[0]); // force matching at ^
        }
        return false;
    }

    protected function formatErr($x, $ind = '', $ind2 = '', $prefix = "\n")
    {
        // ind2: first line
        // ind:  remaining lines
        if (is_array($x)) {
            if (isset($x['err']))
                return $prefix . $this->formatErr($x['err'], $ind, $ind2, '');
            elseif (isset($x['msg'])) {
                list($l, $c, $follow) = $this->pos($x['o']);
                return $prefix . $ind2 . $this->filename . ":$l:$c: " . $x['msg'] . "\n" . $ind . "following chars: " . $follow;
            } elseif (isset($x['choice'])) {
                $r = array();
                foreach ($x['choice'] as $e) {
                    $r[] = $this->formatErr($e, $ind . '  ', $ind . ' *', '');
                }
                return $prefix . implode("\n", $r);
            }
        } elseif (is_string($x)) {
            return $x;
        } else {
            assert(false);
        }
    }

    // combinators {{{2
    // a parser is a method name and a list of arguments
    // eg array('sequence'[, .. the args]);
    // all p* parser reset offset ->o pointer if they fail

    // create bad result
    protected function pFail($msg)
    {
        if (is_string($msg))
            return array('msg' => $msg, 'o' => $this->o);
        else
            return $msg;
    }

    // cerate ok result
    protected function pOk($r)
    {
        return array('r' => $r);
    }

    // is result ok?
    protected function rOk($r)
    {
        return is_array($r) && array_key_exists('r', $r);
    }

    //
    protected function p2(&$r)
    {
        $args = func_get_args();
        array_shift($args);
        $r = $this->p($args);
        return ($this->rOk($r));
    }

    protected function p($p)
    {
        $name = array_shift($p);
        return call_user_func_array(array(&$this, $name), $p);
    }

    // if parser succeds apply function to result
    protected function pApply($eval_, $p)
    {
        $r = $this->p($p);
        if ($this->rOk($r)) {
            $R = $r['r'];
            eval($eval_);
            $r['r'] = $R;
        }
        return $r;
    }

    // if parser fails cause error
    protected function pError($msg, $p)
    {
        $r = $this->p($p);
        if ($this->rOk($r))
            return $r['r'];
        else throw new HamlParseException($msg . "\n" . $this->formatErr($r));
    }

    // first arg map, following args parsers
    // if map is numeric that index is returned
    // if its a string its evaled
    protected function pSequence()
    {
        $o = $this->o;
        $args = func_get_args();
        $R = array();
        $map = array_shift($args);
        foreach ($args as $p) {
            $r = $this->p($p);
            if ($this->rOk($r))
                $R[] = $r['r'];
            else {
                $this->o = $o;
                return $r;
            }
        }
        if (is_string($map)) {
            eval($map);
        } elseif (is_numeric($map))
            $R = $R[$map];
        return $this->pOk($R);
    }

    protected function pChoice()
    {
        $o = $this->o;
        $args = func_get_args();
        $bad = array();
        foreach ($args as $p) {
            $r = $this->p($p);
            if ($this->rOk($r))
                return $r;
            else {
                $this->o = $o;
                $bad[] = $r;
            }
        }
        return array('choice' => $bad);
    }

    protected function pStr($s)
    {
        $o = $this->o;
        if ($this->str($s))
            return $this->pOk($s);
        else {
            $this->o = $o;
            return $this->pFail("expected : $s");
        }
    }

    protected function pReg($reg)
    {
        $o = $this->o;
        if ($this->reg($reg, $m))
            return $this->pOk(isset($m[1]) ? $m[1] : true);
        else {
            $this->o = $o;
            return $this->pFail("expected regex : $reg");
        }
    }

    // 0 or more
    protected function pMany($extra, $p)
    {
        $R = array();
        while (true) {
            $r = $this->p($p);
            if ($this->rOk($r))
                $R[] = $r['r'];
            else {
                if (is_string($extra)) {
                    eval($extra);
                }
                return $this->pOk($R);
            }
        }
    }

    // 1 or more
    protected function pMany1($extra, $p)
    {
        $R = array();
        $r = $this->p($p);
        if ($this->rOk($r))
            $R[] = $r['r'];
        else
            return $r;

        while (true) {
            $r = $this->p($p);
            if ($this->rOk($r)) {
                $R[] = $r['r'];
            } else {
                if (is_string($extra)) {
                    eval($extra);
                }
                return $this->pOk($R);
            }
        }
    }

    protected function pSepBy($sep, $item)
    {
        $o = $this->o;
        $items = array();
        $i = $this->p($item);
        if ($this->rOk($i)) {
            $items[] = $i['r'];
            while (true) {
                $i = $this->p($sep);
                if (!$this->rOk($i))
                    return $this->pOk($items);
                else {
                    $i = $this->p($item);
                    if ($this->rOk($i))
                        $items[] = $i['r'];
                    else
                        return $i;
                }
            }
        } else return $i;
    }

    public function selfTest()
    {
        $this->s = "12  \t\tABC\n";
        $this->len = strlen($this->s);
        $this->o = 0;

        // test text matches first char
        assert($this->str('1'));
        // test that offset works:
        assert($this->str('2'));

        // test spaces
        assert($this->reg('[\s]', $m));
        // test capturing
        assert($this->reg('([\s])', $m));
        assert($m[1] == ' ');
        // test spaces tab
        assert($this->reg('([\s]*)', $m));
        assert($m[1] == "\t\t");

        // test match at beginning only
        // ABC would match, BC should not
        assert(!$this->reg("BC", $m));
        assert($this->reg("([^\n]*)\n", $m));
        assert($m[1] == "ABC");

        // p* tools:
        $this->s = "12[1,2]";
        $this->o = 0;
        $this->len = strlen($this->s);
        $pChoice = array('pChoice', array('pStr', '1'), array('pStr', '2'));
        assert(array('r' => '1') === $this->p($pChoice));

        $this->o = 0;
        $r = $this->pSequence(null, array('pStr', '1'), array('pStr', '2'));
        assert(array('r' => array('1', '2')) === $r);
        $r2 = $this->pSequence(null, array('pStr', '['), array('pSepBy', array('pStr', ','), $pChoice), array('pStr', ']'));
        assert(array('r' => array('[', array('1', '2'), ']')) === $r2);
    }

}

// HamlTree parses a string to a tree. Using "typed" arrays because they are /*{{{*/
// faster than classes (and objects?).
// tags have the keys: type = 'tag', ind, id, classes, attributes, childs
// attributes arre a list of array(key => value) where value is a list of
// arrays denoting PHP code or text
// text have the keys: text = the content
// minimal testing code for text and regex matching in hamlInternalTest
//
// Because we match only against non utf-8 chars this should be almost utf-8 compatible
// (except that it does only match latin spaces..)
//
// Parser was not written for speed. Eg the indentation may be evaluated
// multiple times. All the function calls take time as well. In the end you'll
// be using file or sqlite caches or such anyway ..
// Minimizing code to maintain is more important to me.
//
// \s has been introduced to reduce duplication. Its replaced by ' \t' before
// running a regex/*}}}*/
//
// This class contains all the code which generates the final PHP code
class HamlTree extends HamlParser
{
    public $ind = null; // indentation string used in haml file
    public $last_ind = 0; // indentation last line
    public $name; // name of source

    public $doctype = null;
    public $tree = null;
    public $list = array(); // filled by step 3)
    public $options;

    public $childs; // the parsed representation.

    function __construct($s, $options, $filename, $parse = true)
    {
        assert(is_string($s));
        // replace non linux eols by \n only before processing starts
        $s = str_replace("\r\n", "\n", $s);
        $s = str_replace("\r", "\n", $s);
        // {{{2
        $this->options =& $options;
        $this->filename = $filename;

        $this->idItem = serialize(self::toNameItem('id'));
        $this->classItem = serialize(self::toNameItem('class'));

        $this->options = $options;
        $this->s = $s . "\n"; // \n so that it gets parsed
        $this->len = strlen($this->s);
        $this->o = 0;
        if (preg_match('/(?m)\n([ \t]+)/', $s, $m))
            $this->ind = $m[1];
        else
            $this->ind = '  '; // prevent childs from being parsed

        // any number of spaces, returns \n
        $this->pEmptyLine = array('pApply', '$R = array(array("text" => "\n"));', array('pReg', '[\s]*\n'));
        // parses rest of line (after indentation) and \n
        $this->pTextContentLine = array('pSequence', '$R = $R[0];', $this->interpolatedString("\n"), array('pStr', "\n"));

        if ($parse)
            $this->parseHAML();

    }

    static public function array_merge($list)
    {
        if (count($list) == 0)
            return array();
        elseif (count($list) == 1)
            return $list[0];
        $r = call_user_func_array('array_merge', $list);
        return $r;
    }

    static public function toNameItem($s)
    {
        return array(array("text" => $s));
    }

    // render items {{{2
    protected function rText($s, $quoted)
    {
        if ($quoted)
            $s = htmlentities($s, ENT_QUOTES, $this->options['encoding']);
        if (strpos($s, '<?') === false)
            $this->list[] = array('text' => $s);
        else
            // <? breaks PHP so quote it by <? echo "...
            $this->rEchoPHP(var_export($s, true), false);
    }

    protected function rEchoPHP($php, $quoted)
    {
        if ($quoted)
            $php = "htmlentities(" . $php . ", ENT_QUOTES, " . var_export($this->options['encoding'], true) . ")";
        $this->list[] = array('phpecho' => $php);
    }

    protected function rPHP($php, $hasChilds = false)
    {
        if ($hasChilds)
            $php .= '{';
        $this->list[] = array('php' => $php);
    }

    // preparing rendering {{{2
    // Also see toPHP

    public function isHtml()
    {
        return substr($this->options['format'], 0, 4) == 'html';
    }

    public function flatten()
    {
        if (!is_null($this->doctype)) {
            switch ($this->doctype) {
                case 'XML':
                    if (!$this->isHtml())
                        $header = "<?xmlversion='1.0'encoding='utf-8'?>";
                    break;
                case '':
                    if (strtolower($this->options['format']) == 'html4')
                        $header = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
                    else
                        $header =
                            $this->isHtml()
                                ? '<!DOCTYPE html>'
                                : '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
                    break;
                case '1.1':
                    $header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
                    break;
                case 'basic':
                    $header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">';
                    break;
                case 'mobile':
                    $header = '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">';
                    break;
                case 'frameset':
                    $header =
                        $this->isHtml()
                            ? '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">'
                            : '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">';
                    break;
                case 'strict':
                    $header = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
                    break;
                case '5':
                    $header = '<!DOCTYPE html>';
                    break;
                default:
                    throw new Exception('unimplemented doctype: ' . $this->doctype);
            }
        }

        if (isset($header))
            $this->rText($header, false);
        $this->flattenChilds($this->childs);
    }

    protected function flattenChilds($childs)
    {
        foreach ($childs as $c) {
            $this->flattenThing($c);
        }
    }

    protected function d($ar, $key, $default)
    {
        return isset($ar[$key]) ? $ar[$key] : $default;
    }

    protected function rItems($l, $quote)
    {
        foreach ($l as $v) {
            if (isset($v['text']))
                $this->rText($v['text'], $quote);
            elseif (isset($v['phpvalue']))
                $this->rEchoPHP($v['phpvalue'], $quote); else throw new Exception('bad item ' . var_export($v, true));
        }
    }

    protected function flattenThing(array $thing, $parent_tag = '')
    {
        $html = substr($this->options['format'], 0, 4) == 'html';
        $q = $this->options['attr_wrapper'];
        if (isset($thing['type'])) {
            switch ($thing['type']) {
                case 'text':
                    $this->rItems($thing['items'], true);
                    break;
                case 'conditional-comment':
                    $this->rText('<!--[' . $thing['condition'] . ']>', false);
                    if (isset($thing['childs']))
                        foreach ($thing['childs'] as $v) {
                            $this->flattenThing($v);
                        }
                    $this->rText('<![endif]-->', false);
                    break;
                case 'php-code-multiline':
                    $this->rPHP($thing['php']);
                    break;
                case 'filter':
                    if (!isset($this->options['filters'][$thing['filter']]))
                        $this->error('bad filter: ' . var_export($thing['filter'], true)); // TODO location?
                    $text = array();
                    foreach ($thing['items'] as $i) {
                        if (isset($i['phpvalue']))
                            $text[] = $i['phpvalue'];
                        elseif (isset($i['text']))
                            $text[] = var_export($i['text'], true); else assert(false);
                    }
                    /// var_export($thing['text'], true)
                    $this->rEchoPHP($this->options['filters'][$thing['filter']] . '(' . var_export($this->options['encoding'], true) . ',' . implode('.', $text) . ')', false);
                    break;
                case 'inline-comment':
                    $this->rText('<!--', false);
                    $this->rItems($thing['items'], false);
                    $this->rText('-->', false);
                    break;
                case 'silent-comment':
                    break;
                case 'tag':
                    // TODO optimize
                    $this->rText("\n", false);

                    if (isset($thing['assign_to']))
                        $this->rPHP('ob_start();', false);

                    $tag_name = $thing['name'];
                    if ($parent_tag != '' && $this->options['check_tag_order'])
                        HamlMayContain::mayContain($this->doctype, !$this->isHtml(), $parent_tag, $tag_name);

                    $autoclose = in_array($tag_name, $this->options['autoclose']);
                    $childs = $this->d($thing, 'childs', array());
                    if ($autoclose && count($childs) > 0 && ($childs !== array(array('type' => 'text', 'items' => array(array('text' => "\n"))))))
                        $this->error('tag "' . $tag_name . '" found which should autoclose but has children !' . var_export($childs, true));

                    // tag open and name
                    // TODO: add indentation here for pretty rendering?
                    if (!$this->options['ugly']) {
                        $this->rText("\n" . $thing['ind'], false);
                    }
                    $this->rText("<$tag_name", false);
                    // attributes
                    # classes are sorted. dups are removed.
                    $classes = $this->d($thing, 'classes', array());
                    $class = array();
                    foreach ($classes as $c) {
                        $class[] = self::toNameItem($c);
                    }
                    $id = isset($thing['id'])
                        ? array(self::toNameItem($thing['id']))
                        : array();

                    $collect = array(
                        $this->idItem => 'id',
                        $this->classItem => 'class'
                    );
                    $attrs = array();
                    foreach ($this->d($thing, 'attrs', array()) as $a) {
                        foreach ($a as $attr => $value) {
                            if (isset($collect[$attr])) {
                                ${$collect[$attr]} = array_merge(${$collect[$attr]}, $value);
                            } else {
                                $attrs[$attr] = $value;
                            }
                        }
                    }
                    // render classes (dynamic because haml removes duplicates. The duplicates are known at runtime)
                    array_unique($class);
                    if (count($class) > 0) {
                        $this->rText(" class=$q", false);
                        $class_items = array();
                        $items = array();
                        foreach ($class as $class_item) {
                            $item_builder = array();
                            foreach ($class_item as $cii) {
                                if (isset($cii['text']))
                                    $item_builder[] = var_export($cii['text'], true);
                                elseif (isset($cii['phpvalue'])) {
                                    $item_builder[] = $cii['phpvalue'];
                                }
                            }
                            $items[] = implode('.', $item_builder);
                        }
                        $this->rEchoPHP('HamlUtilities::renderClassItems(array(' . implode(',', $items) . '))', true);
                        $this->rText("$q", false);
                    }
                    // render id
                    if (count($id) > 0) {
                        $this->rText(" id=$q", false);
                        $sep = '';
                        foreach ($id as $id_item) {
                            if ($sep != '') $this->rText($sep, true);
                            $this->rItems($id_item, true);
                            $sep = "_";
                        }
                        $this->rText("$q", false);
                    }

                    // render remaining attrs
                    foreach ($attrs as $key => $v) {
                        $this->rText(" ", false);
                        $key_a = unserialize($key);
                        $end = $q;

                        // TODO if phpvalue is an expression a function must be called!
                        // same appliet to key_a
                        if (
                            (count($v) == 1 && isset($v[0]['phpvalue']) && is_bool($v[0]['phpvalue']))
                            && (count($key_a) == 1 && isset($key_a[0]['text']))
                        ) {
                            if ($v[0]['phpvalue']) {
                                // true is rendered as name='name'
                                if ($html) {
                                    $this->rItems($key_a, false);
                                    // only name without = is rendered. So nothing to be done
                                    $end = "";
                                } else {
                                    $this->rItems($key_a, false);
                                    $this->rText("=$q", false);
                                    $this->rItems(array(array('phpvalue' => var_export($key_a[0]['text'], true))), true);
                                }
                            } else {
                                // false is not rendered
                                $end = "";
                            }
                        } elseif (count($v) == 1 && isset($v[0]['text'])) {
                            // string constant, render it
                            $this->rItems($key_a, false);
                            $this->rText("=$q", false);
                            $this->rItems($v, true);
                        } else {
                            // complex PHP expression, if it evaluates to true / false key=value must not be rendered at all
                            // thus call function
                            $attr_builder = array();
                            foreach ($key_a as $value_item) {
                                if (array_key_exists('text', $value_item)) {
                                    $attr_builder[] = var_export($value_item['text'], true);
                                } elseif (array_key_exists('phpvalue', $value_item)) {
                                    $attr_builder[] = '(' . $value_item['phpvalue'] . ')';
                                } else assert(false);
                            }

                            $value_builder = array();
                            foreach ($v as $value_item) {
                                if (array_key_exists('text', $value_item)) {
                                    $value_builder[] = var_export($value_item['text'], true);
                                } elseif (array_key_exists('phpvalue', $value_item)) {
                                    $value_builder[] = '(' . $value_item['phpvalue'] . ')';
                                } else assert(false);
                            }

                            $this->rEchoPHP('HamlUtilities::renderAttribute(' . implode('.', $attr_builder) . ','
                                . implode('.', $value_builder) . ','
                                . var_export($q, true) . ','
                                . var_export($this->options['encoding'], true) . ','
                                . var_export($html, true)
                                . ')', false);
                            $end = "";
                        }
                        $this->rText($end, false);
                    }

                    if ($autoclose) {
                        $this->rText("" . ($html ? '' : ' /') . ">", false);
                    } else {
                        $this->rText('>', false);
                        foreach ($childs as $v) {
                            $this->flattenThing($v, $tag_name);
                        }
                        if (!$this->options['ugly']) {
                            $this->rText("\n" . $thing['ind'], false);
                        }
                        $this->rText("</$tag_name>", false);
                    }
                    $this->rText("\n", false);

                    if (isset($thing['assign_to']))
                        $this->rPHP('$' . $thing['assign_to'] . '=ob_get_clean();', false);

                    break;

                case 'block':
                    $hasC = count($thing['childs']) > 0;
                    $this->rPHP($thing['php'], $hasC);
                    foreach ($thing['childs'] as $c) {
                        $this->flattenThing($c, $parent_tag);
                    }
                    if ($hasC)
                        $this->rPHP('}');
                    break;
                default:
                    if ($err=$this->flattenOtherType($thing, $parent_tag))
                        throw new Exception($err);
            }
        } elseif (isset($thing['phpecho'])) {
            $this->rEchoPHP($thing['phpecho'], $thing['escape_html']);
            if ($this->d($thing, 'add_space', false))
                $this->rText(' ', false);
        } elseif (isset($thing['text'])) {
            $this->rText($thing['text'], true);
        } else
            throw new Exception('implement: ' . var_export($thing, true));
    }

    // }}}
    protected function flattenOtherType(array $thing,  $parent_tag)
    {
        if(method_exists($this,'flatten_'.$thing['type']))
            return call_user_func(array($this,'flatten_'.$thing['type']),$thing,$parent_tag);
        else
            return 'missing implementation';
;
    }

    // parsing: {{{2

    protected function parseHAML()
    {
        // parse optional !!! doctype
        if ($this->p2($r, 'pReg', '!!![\s]*([^\n]*)\n')) {
            $this->doctype = $r['r'];
        } else
            $this->doctype = null;

        $this->childs = $this->pError('failed parsing haml', array('pChilds', 0, ''));
        if ($this->o < $this->len - 1)
            $this->error('parsing stopped');
    }

    protected function eof()
    {
        return $this->o >= $this->len;
    }

    // always returns array of children which may be empty
    // if no children are found. No children are found if indentation decreases
    protected function pChilds($expected_ind, $ind_str)
    {
        return $this->pMany(
            '
			$R = array_filter($R, create_function("\$x","return \$x !== \"NOP\";"));
		'
            , array('pChoice'
            , array('pApply', '$R = "NOP";', array('pReg', '[ \t]*\n')) # /[IE] ..
            , array('pConditionalComment', $expected_ind, $ind_str) # /[IE] ..
            , array('pInlineComment', $expected_ind, $ind_str) # /
            , array('pSilentComment', $expected_ind, $ind_str) # -#
            , array('pPHPCodeMultiline', $expected_ind, $ind_str)
            , array('pFilter', $expected_ind, $ind_str) # :
            , array('pPHP', $expected_ind, $ind_str)
            , array('pTag', $expected_ind, $ind_str)
            , array('pBlock', $expected_ind, $ind_str)
            , array('pText', $expected_ind, $ind_str)
            )
        );
    }

    // rest of line starting by = != &=
    protected function pPHPAssignment()
    {
        return $this->p(array('pSequence'
        , '
        $R = array( "phpecho" => $R[1],
                    "escape_html" => ($this->options["escape_html"] && $R[0] != "!=")
                                    || ($R[0] == "&="),
                    "add_space" => true
                  );
        '
        , array('pReg', '(=|!=|[&]=)')
        , array('pArbitraryPHPCode', true)
        , array('pStr', "\n")
        ));
    }

    protected function pPHPCodeMultiline($expected_ind, $ind_str)
    {
        return $this->p(array('pSequence'
        , '
        $R = array( "type" => "php-code-multiline",
                    "php" => $R[1]
                  );
        '
        , array('pStr', ':php' . "\n")
        , array('pMany1', '$R = implode("", $R);', array('pReg', $ind_str . $this->ind . '(.*\n)'))
        ));
    }

    protected function pPHP($expected_ind, $ind_str)
    {
        return $this->p(array('pSequence', 1
        , array('pStr', $ind_str)
        , array('pPHPAssignment')));
    }

    protected function pStringNoInterpolation($stopat)
    {
        $o = $this->o;
        $s = '';
        while ($this->o < $this->len) {
            $c = $this->s[$this->o];
            if (strpos($stopat, $c) !== false) {
                break;
            } elseif ($c == '\\') {
                $c2 = $this->s[$this->o + 1];
                if ($c2 == '#' || $c2 == '\\') {
                    $s .= $c2;
                    $this->o++;
                }
            } elseif ($c == '#' && $this->s[$this->o + 1] == '{') {
                break;
            } else {
                $s .= $c;
            }
            $this->o++;
        }
        if ($s !== '')
            return $this->pOk(array('text' => $s));
        else {
            $this->o = $o;
            return $this->pFail('str expected');
        }
    }

    // parser #{...}
    protected function pInterpolation()
    {
        $o = $this->o;
        if ($this->str('#{')) {
            if (!$this->p2($code, 'pArbitraryPHPCode', true)) {
                $this->o = $o;
                return $code;
            }
            if (!$this->p2($r, 'pStr', '}')) {
                $this->o = $o;
                return $r;
            }
            return $this->pOk(array('phpvalue' => '(' . $code['r'] . ')'));
        } else return $this->pFail('#{ expected');
    }

    # parse text maybe containing #{} till $stopA
    protected function interpolatedString($stopAt)
    {
        return array('pMany1', null
        , array('pChoice'
            , array('pInterpolation')
            , array('pStringNoInterpolation', $stopAt)));
    }


    protected function pPercentOk($percent_ok)
    {
        if (!$percent_ok && !$this->eof() && strpos("%=!/-: \t", $this->s[$this->o]) !== false)
            return $this->pFail('unexpected %=!/-');
        return $this->pOk(null);
    }

    protected function textLine($ind_str, $percent_ok = false)
    {
        return array('pChoice'
        , $this->pEmptyLine
        , array('pSequence', '$R = $R[2]; $R[] = array("text" => "\n");', array('pStr', $ind_str), array('pPercentOk', $percent_ok), $this->pTextContentLine), array('pStr', "\n"));
    }

    protected function pFilter($expectedIndent, $ind_str)
    {
        return $this->pSequence(
            '$R = array("type" => "filter", "filter" => $R[0], "items" => $R[1]);'
            // name
            , array('pReg', $ind_str . ':([^\n\s]+)\n') /* name */
            // text
            , array('pMany', '$R = HamlTree::array_merge($R);', $this->textLine($ind_str . $this->ind, true))
        );
    }


    protected function pConditionalComment($expectedIndent, $ind_str)
    {
        return $this->pSequence(
            '$R = array("type" => "conditional-comment", "condition" => $R[0], "childs" => $R[1]);'
            , array('pReg', $ind_str . '\/\[([^\]]+)\][\s]*\n')
            , array('pChilds', $expectedIndent + 1, $ind_str . $this->ind));
    }

    protected function pInlineComment($expectedIndent, $ind_str)
    {
        return $this->pApply(
            '$R = array("type" => "inline-comment", "items" => $R);'
            , array('pChoice'
                // one line
            , array('pSequence', 1, array('pStr', $ind_str . '/'), $this->pTextContentLine)
                // multiple lines
            , array('pSequence'
                , 1
                , array('pReg', $ind_str . '\/[\s]*' . "\n")
                , array('pMany', '$R = HamlTree::array_merge($R);'
                    , $this->textLine($ind_str . $this->ind, true)))
            ));
    }

    protected function pSilentComment($expectedIndent, $ind_str)
    {
        return $this->pApply(
            '$R = array("type" => "silent-comment");'
            , array('pSequence'
            , null
            , array('pReg', $ind_str . '-#[^\n]*\n')
            , array('pMany', null,
                    array('pChoice', array('pReg', $ind_str . $this->ind . '[^\n]*\n')
                    , array('pReg', '[\s]*\n')
                    )
                )
            ));
    }

    protected function pBlock($expectedIndent, $ind_str)
    {
        return $this->pSequence(
            '$R = array("type" => "block", "php" => $R[0], "childs" => $R[1]);'
            , array('pReg', $ind_str . '-([^\n]*)\n')
            , array('pChilds', $expectedIndent + 1, $ind_str . $this->ind)
        );
    }

    // returns tag array('type' => tag, 'name' => tag, 'attributes' => array, childs => array) or null
    protected function pTag($expectedIndent, $ind_str)
    {
        if (!$this->str($ind_str) || $this->eof())
            return $this->pFail('other indentation expected');
        // HAML has wired properties "haml" : "%p#id(id='1')" -> "html" : "<p id='id_1'></p>"
        // thus store css values separately and merge them the HAML way when PHP is generated

        $o = $this->o;
        # optional tag name defaulting to div (eg #table)
        $tag = array('type' => 'tag', 'classes' => array(), 'ind' => $ind_str);

        # HAML-TO-PHP specific feature: $foo = .. assign to var)
        #   $a=%div
        #   $a['foo']=%div
        if ($this->reg('\$([^\s=\[]+(\[[^\]]*\])?)[\s]*=', $m))
            $tag['assign_to'] = $m[1];

        if ($this->reg('%([^!&\s.=#\n({]+)', $m)) {
            $tag['name'] = $m[1];
        } else $tag['name'] = 'div';

        # parse .foo and #bar CSS properties
        while ($this->reg('([#.])([^\s.#({\n]+)', $m)) {
            if ($m[1] === '#') {
                # last overrides previous:
                $tag['id'] = $m[2];
            } elseif ($m[1] === '.') {
                // classes are all stored and will be separated by spaces
                $tag['classes'][] = $m[2];
            } else {
                throw new Exception('unexpected');
            }
        }
        if ($this->o == $o) { // nothing consumed
            // neither CSS style and default div. This is not a tag line
            $this->o = $o;
            return $this->pFail('tag expected');
        }
        unset($in_loop);

        $tag['attrs'] = array();
        # parse properties
        $max = 2;
        while ($max-- > 0 && $this->reg('([({])', $m)) {
            $attrParsers = array(
                '(' => array('pAttrs', "html"),
                '{' => array('pAttrs', "ruby")
            );
            $tag['attrs'][] = $this->pError('error parsing attrs', $attrParsers[$m[1]]);
        }

        $endl = array('pReg', "[\\s]*\n");
        if ($this->p2($r, 'pChoice'
            // &= != =
            , array('pApply', '$R = array($R);', array('pPHPAssignment'))
            // childs
            , array('pSequence', 1, $endl, array('pChilds', $expectedIndent + 1, $ind_str . $this->ind))
            // html text
            , array('pApply', '
            $R=array(array("type" => "text", "items" => $R));
          ', $this->pTextContentLine
            )
        )
        ) {
            $tag['childs'] = $r['r'];
            return $this->pOk($tag);
        } else {
            $this->o = $o;
            return $r;
        }
    }

    protected function pAttrs($type)
    {
        $o = $this->o;
        $sepsByType = array(
            'ruby' => array('pReg', '[\s]*,[\s\n]*'),
            'html' => array('pReg', '[\s\n]+')
        );
        $endByType = array(
            'ruby' => '[\s]*}',
            'html' => '[\s]*\)'
        );
        if (!$this->p2($r, 'pSepBy', $sepsByType[$type], array('pAttr', $type))) {
            return $r;
        }
        $attributes = $r['r'];
        if (!$this->p2($r, 'pReg', $endByType[$type])) {
            $this->o = $o;
            return $r;
        }
        // merge key = value pairs keeping the last occurrence only
        $r = array();
        foreach ($attributes as $key_value_pair) {
            foreach ($key_value_pair as $key => $value) {
                $r[$key] = $value;
            }
        }
        return $this->pOk($r);
    }

    protected function pAttr($type)
    {
        $nameByType = array(
            'html' => array('pApply', '$R = HamlTree::toNameItem($R);', array('pReg', '[\s]*([^=\n]+)')),
            'ruby' => array('pChoice'
            , array('pApply', '$R = HamlTree::toNameItem($R);', array('pReg', '[\s]*\:([\w]+)'))
            , array('pAttrValueQuot')
            )
        );
        $sepByType = array(
            'html' => array('pStr', '='),
            'ruby' => array('pReg', '[\s]*=>[\s]*')
        );
        $r = $this->p($nameByType[$type]);
        if (!$this->rOk($r))
            return $r;
        $name = serialize($r['r']); // serialize info as string
        $this->pError('= or => expected depending on attr type', $sepByType[$type]);
        return $this->pOk(array($name => $this->pError('value maybe list', array('pAttrValue', $type, $name))));
    }

    protected function pAttrValue($type, $name)
    {
        $spaceOkByType = array(
            'html' => false,
            'ruby' => true,
        );

        # parse php code or "..#{}.."
        $pAttrValue = array('pChoice'
        , array('pAttrValueQuot')
        , array('pApply', '
         if ($R === "true") $R = true;
         if ($R === "false") $R = false;
         $R =  array(array("phpvalue" => $R));
    ', array('pArbitraryPHPCode'))
        );

        if (in_array($name, array($this->idItem, $this->classItem))) {
            # may be a list.

            $r = $this->pChoice(
                array('pSequence'
                , 1
                , array('pReg', '\[[\s]*')
                , array('pSepBy'
                , array('pReg', ',[\s\n]*')
                , $pAttrValue)
                , array('pReg', '[\s]*\]'),
                )
                , array('pApply', '$R = array($R);', $pAttrValue)
            );

        } else {
            $r = $this->p($pAttrValue);
        }
        return $r;
    }

    //  "...#{} .. #{}.."
    //  returns list of array('text' => ..) array('phpecho' =>  .. )
    protected function pAttrValueQuot()
    {
        $o = $this->o;
        $items = array();
        $s = '';
        if (!$this->p2($r, 'pReg', '(["\'])')) {
            $this->o = $o;
            return $r;
        }
        $quotStyle = $r['r'];

        while (true) {
            if ($this->eof()) {
                $this->o = $o;
                return $this->pFail('no eof expected');
            }
            if ($this->str('#{')) {
                if ($s !== '')
                    $items[] = array('text' => $s);
                $s = '';
                if (!$this->p2($code, 'pArbitraryPHPCode', true)) {
                    $this->o = $o;
                    return $r;
                }
                if (!$this->p2($r, 'pStr', '}')) {
                    $this->o = $o;
                    return $r;
                }
                $items[] = array('phpvalue' => $code['r']);
            } elseif ($this->s[$this->o] == '\\') {
                $this->o++;
                $s .= $this->s[$this->o++];
            } elseif ($this->s[$this->o] == $quotStyle) {
                $this->o++;
                break;
            } else {
                $s .= $this->s[$this->o++];
            }
        }
        if ($s !== '')
            $items[] = array('text' => $s);

        return $this->pOk($items);
    }

    protected function pArbitraryPHPCode($spacesOk = true)
    {
        $s = $spacesOk ? '' : '\s';
        $o = $this->o;
        static $regex;
        if (is_null($regex)) {
            // (?R) matches to most outer regexp recursively
            // That's something Ruby can't do (yet?)
            // You can't just parse until you hit a ","
            // because contents can be  %tag = substr(2,4,8)
            // so the substr will be matched by "anything else", the (...) will be matched by the ", separated func args"

            // keys are documentation only
            $items = array(
                '" str' => '"([^"\\\\]+|[\\\\].)*"',
                "' str" => '\'([^\'\\\\]+|[\\\\].)*\'',
                ', separated func args' => '\(((?R)(,(?R))*)\)',
                'recursion in ()' => '\((?R)\)', // this catches nested ( 2 + (4 + ) ) ..
                // '{(?R)}
                ' anything else but terminal' => "[^'\"(){},\n$s]+"
            );
            $regex = '(' . implode('|', $items) . ')+';
        }
        $this->reg($regex, $m);
        $s = substr($this->s, $o, $this->o - $o);
        if (strlen($s) > 0)
            return $this->pOk($s);
        else {
            $this->o = $o;
            return $this->pFail("no arbitrary code");
        }
    }

    protected function pText($expectedIndent, $ind_str)
    {
        return $this->pMany1(
            '$R = array("type" => "text", "items" => HamlTree::array_merge($R));'
            , $this->textLine($ind_str, false));
    }


    // }}}

    static public function funcRenderer($list, $func_name)
    {

        $code = self::phpRenderer($list);

        return "
      function $func_name(){
        ob_start();
        ob_implicit_flush(false);
        try{
        \$args = func_get_args();
        /* put vars in scope:*/
        foreach (\$args as \$arr) { extract(\$arr); }
        ?>
        $code
        <?php
        return ob_get_clean();
        }catch(Exception \$e){
          // Missing try .. finally which can be found in many other languages
          ob_end_clean();
        }
      }
    ";
    }

    static public function phpRenderer($list)
    {
        // fuse if {.. } else { .. }
        for ($i = count($list); $i > 1; $i--) {
            if (isset($list[$i]['php'])
                && in_array($list[$i]['php'], array("else{", " else{"), true)
                && isset($list[$i - 1]['php'])
            ) {
                $list[$i - 1]['php'] .= ' else{';
                unset($list[$i]);
            }
        }

        // its your task to put stuff in scope before evaluating this code..
        $code = '';
        // this can be optimized probably
        foreach ($list as $l) {
            if (isset($l['phpecho'])) {
                $code .= "<?php\n echo " . $l['phpecho'] . "?>";
            } elseif (isset($l['php'])) {
                $code .= "<?php\n " . $l['php'] . "?>";
            } elseif (isset($l['text'])) {
                $code .= $l['text'];
            } elseif (isset($l['verbatim'])) {
                $code .= $l['text'];
            } else assert(false);
        }
        return $code;
    }

    // $hamlTree: parsed haml representation
    // $as_func: pass a function name to return
    // function $func_name(...){
    //   return 'the htmlp code';
    // }
    //
    // Why a function? if there is an exceptoin for any reason your nice
    // ob_start(); ... nesting will get out of sync?
    // functions prevent this issue.
    public function toPHP($func_name = null)
    {
        // list of items which will make up the code. An item is one of
        // array('text' => 'HTML code')
        // array('php' => 'php code'[, 'escape_html' => true /false] )
        $this->flatten();
        if (is_null($func_name))
            return self::phpRenderer($this->list);
        else
            return self::funcRenderer($this->list, $func_name);
    }

    // minimal test of the parser
    static public function hamlInternalTest()
    {
        $p = new HamlTree("", array(), "", false);
        $p->selfTest();
    }

}

class HamlTreeWithSnip extends HamlTree
{
    //whether render snip seperately
    protected $renderSnipSeperate;

    //for renderring snip seperately
    protected $tree_id;
    //keep php file generated by snip rendered seperately
    protected $keepSnipCache;

    //for no renderring snip seperately
    protected $placeholder_contents=array();
    // a litttle more nice indent
    protected $snipIndent='';


    function __construct($s, $options, $filename, $parse = true)
    {

        $this->renderSnipSeperate= isset($options['snipsep'])?$options['snipsep']:'auto';
        $this->keepSnipCache= defined('HAML_SNIP_CACHE') && isset($options['snipcache'])?$options['snipcache']:false;

        //for no renderring snip to php file
        do{
            $id=uniqid();
        } while(isset(HamlUtilitiesSnip::$placeholder_contents[$id])); //necessary?
        $this->tree_id=$id;
        // save data ; clean data ? see flatten
        HamlUtilitiesSnip::$placeholder_contents[$id]=array();
        HamlUtilitiesSnip::$treeopts[$id]=$options;

        parent::__construct($s,$options,$filename,$parse);
    }

    protected function pChilds($expected_ind, $ind_str)
    {
        return $this->pMany(
            '
			$R = array_filter($R, create_function("\$x","return \$x !== \"NOP\";"));
		'
            , array('pChoice'
            , array('pApply', '$R = "NOP";', array('pReg', '[ \t]*\n')) # /[IE] ..
            , array('pConditionalComment', $expected_ind, $ind_str) # /[IE] ..
            , array('pInlineComment', $expected_ind, $ind_str) # /
            , array('pSilentComment', $expected_ind, $ind_str) # -#
            , array('pPHPCodeMultiline', $expected_ind, $ind_str)
            , array('pFilter', $expected_ind, $ind_str) # :
            , array('pPHP', $expected_ind, $ind_str)
            , array('pTag', $expected_ind, $ind_str)
            , array('pSnippet', $expected_ind, $ind_str)
            , array('pPlaceholder', $expected_ind, $ind_str)
            , array('pBlock', $expected_ind, $ind_str)
            , array('pText', $expected_ind, $ind_str)
            )
        );
    }

    protected function pSnippet($expectedIndent, $ind_str)
    {
        //  necessary, when as child of previous line
        if (!$this->str($ind_str) || $this->eof())
            return $this->pFail('other indentation expected');
        $snip = array('type' => 'snippet','ind' => $ind_str,'attrs'=>array() ,'snips_id' => $this->tree_id, 'snip_index' => null);

        if ($this->reg('@(!{0,2})(\w+)', $m)) {
            $snip['name'] = $m[2];
        } else return $this->pFail('not snip');

        # parse properties
        $max = 2;
        $attrParsers = array(
            '(' => array('pAttrs', "html"),
            '{' => array('pAttrs', "ruby")
        );
        while ($max-- > 0 && $this->reg('([({])', $mm)) {
            // max lenth is 2  : one is html style attrs , one is ruby
            $snip['attrs'][] = $this->pError('error parsing attrs', $attrParsers[$mm[1]]);
        }

        if($m[1]==='!')
            $seperate=true;
        elseif($m[1]==='!!')
        	$seperate=false;
        else{
            $seperate=$this->renderSnipSeperate;
            if($seperate==='auto'){
                $seperate=false;
                foreach($snip['attrs'] as $oneteam){
                    foreach($oneteam as $attrkey => $attrvalue){
                        if(strpos($attrkey,'"phpvalue"')!==false){
                            $seperate=true;
                            break 2;
                        }
                        foreach($attrvalue as $attrvaluepart){
                            if(isset($attrvaluepart['phpvalue'])){
                                $seperate=true;
                                break 3;
                            }
                        }
                    }

                }
            }
        }


        //place holders content
        $endl = array('pReg', "[\\s]*\n");
        if ($this->p2($r, 'pChoice'
            // placeholder
            , array('pSequence', '$R= $R[1];', $endl,
                array('pMany1'
                ,'$n=array();foreach($R as $r){if(isset($r["name"])) $n[$r["name"]]=$r["content"];	else $n[]=$r["content"];};$R=$n;'
                ,array( 'pPlaceholderContent', $expectedIndent + 1, $ind_str . $this->ind)
                )
            )
            // childs as the only placeholder, index is 0
            , array('pSequence', '$R= array($R[1]);', $endl, array('pChilds', $expectedIndent + 1, $ind_str . $this->ind))
            // html text as the only placeholder, index is 0
            , array('pApply','$R=array(array(array("type" => "text", "items" => $R)));',$this->pTextContentLine)
            //TODO 2nd arg need modify
            // &= != =
            //, array('pApply', '$R = array($R);', array('pPHPAssignment'))
        )){
            //when a snip without plceholder like 'div\n  @hello\n  div', p2 above passed, and $this->o from '\n  div' to '  div' ,
            //I don't know why
            //check again? necessary?
            //if($r['r']!=array(array()) ){

                //sort, so numeric keys are front of string keys, useful for flatten
                // array(0=> .., 1=>.., name1=>.., name2=>...)
                $r=$r['r'];
                ksort($r, SORT_STRING);
                if( $seperate ) {
                    $len=array_push(HamlUtilitiesSnip::$placeholder_contents[$this->tree_id],$r);
                    $snip['snip_index']=$len-1;
                    $snip['render_seperate']=true;
                }
                else {
                    $snip['placeholder_content'] = $r;
                }
            //}
        }
//        else {
//            $this->o = $o;
//            return $r;
//        }
        //place holders content end

        return $this->pOk($snip);
    }

    protected function pPlaceholderContent($expectedIndent, $ind_str)
    {
        //  necessary, when as child of previous line
        if (!$this->str($ind_str) || $this->eof())
            return $this->pFail('other indentation expected');
        $o = $this->o;
        $pl= array('type' => 'placeholder_content', 'classes' => array(), 'ind' => $ind_str);

        //mark and name
        if ($this->reg('_(\w+)?', $m)) {
            if(isset($m[1]))
                $pl['name'] = $m[1];
        } else return $this->pFail('not place holder content');

        //content
        $endl = array('pReg', "[\\s]*\n");
        //TODO: if only childs, no need use pChoice, only pSequence
        if ($this->p2($r, 'pChoice'
            // childs
            , array('pSequence', 1, $endl, array('pChilds', $expectedIndent + 1, $ind_str . $this->ind))
            // html text
            , array('pApply','$R=array(array("type" => "text", "items" => $R));',$this->pTextContentLine)
            // TODO
            // &= != =
            , array('pApply', '$R = array($R);', array('pPHPAssignment'))
        )){
            $pl['content'] = $r['r'];

        } else {
            $this->o = $o;
            return $r;
        }

        return $this->pOk($pl);

    }

    protected function pPlaceholder($expectedIndent, $ind_str)
    {
        //  necessary, when as child of previous line
        if (!$this->str($ind_str) || $this->eof())
            return $this->pFail('other indentation expected');
        $pl= array('type' => 'placeholder', 'classes' => array(), 'ind' => $ind_str);

        //mark and name
        if ($this->reg("@@@(\\w+)?[\\s]*\n", $m)) {
            if(isset($m[1]))
                $pl['name'] = $m[1];
        } else return $this->pFail('not place holder');

        return $this->pOk($pl);
    }

    // add '@' to check snip or placeholder
    protected function pPercentOk($percent_ok)
    {
        if (!$percent_ok && !$this->eof() && strpos("%=!/-:@ \t", $this->s[$this->o]) !== false)
            return $this->pFail('unexpected %=!/-');
        return $this->pOk(null);
    }

    protected function flatten_snippet(array $thing, $parent_tag){

        if(isset($thing['render_seperate'])){
                $parsedAttrs='';
                foreach ($thing['attrs'] as $attr){
                    foreach ($attr as $key => $v) {
                        $key_a = unserialize($key);

                        // TODO if phpvalue is an expression a function must be called!
                        // same appliet to key_a
                        /*                    if (
                                                (count($v) == 1 && isset($v[0]['phpvalue']) && is_bool($v[0]['phpvalue']))
                                                && (count($key_a) == 1 && isset($key_a[0]['text']))
                                            ) {
                                                if ($v[0]['phpvalue']) {
                                                    // true is rendered as name='name'
                                                    if ($html) {
                                                        $this->rItems($key_a, false);
                                                        // only name without = is rendered. So nothing to be done
                                                        $end = "";
                                                    } else {
                                                        $this->rItems($key_a, false);
                                                        $this->rText("=$q", false);
                                                        $this->rItems(array(array('phpvalue' => var_export($key_a[0]['text'], true))), true);
                                                    }
                                                } else {
                                                    // false is not rendered
                                                    $end = "";
                                                }
                                            } elseif (count($v) == 1 && isset($v[0]['text'])) {*/
                        if (count($v) == 1 && isset($v[0]['text'])){
                            $parsedAttrs.=','.var_export($key_a[0]['text'],true).','.var_export($v[0]['text'],true);
                        } else {
                            // complex PHP expression, if it evaluates to true / false key=value must not be rendered at all
                            // thus call function
                            $attr_builder = array();
                            foreach ($key_a as $value_item) {
                                if (array_key_exists('text', $value_item)) {
                                    $attr_builder[] = var_export($value_item['text'], true);
                                } elseif (array_key_exists('phpvalue', $value_item)) {
                                    $attr_builder[] = '(' . $value_item['phpvalue'] . ')';
                                } else assert(false);
                            }

                            $value_builder = array();
                            foreach ($v as $value_item) {
                                if (array_key_exists('text', $value_item)) {
                                    $value_builder[] = var_export($value_item['text'], true);
                                } elseif (array_key_exists('phpvalue', $value_item)) {
                                    $value_builder[] = '(' . $value_item['phpvalue'] . ')';
                                } else assert(false);
                            }

                            //$parsedAttrs[implode('.', $attr_builder) ]=  implode('.', $value_builder) ;
                            $parsedAttrs.=','.implode('.', $attr_builder) .','.  implode('.', $value_builder) ;
                        }
                    }
                }

                $this->rPHP(implode('',array(
                    'ob_start();ob_implicit_flush(false);',
                    'try{',
                        'require HamlUtilitiesSnip::parseSnipToFile(',
                            var_export($thing['name'],true) , ',',
                            var_export($thing['snips_id'],true) , ',',
                            var_export($thing['snip_index'],true),
                            $this->keepSnipCache?',true':',false',
                            ($parsedAttrs) , '); ',
                        'echo ob_get_clean();',
                    '} catch (Exception $e) {ob_get_clean();throw $e;}'
                    ))
                    ,false);
        }else{
            //indent str
            $this->snipIndent.=$thing['ind'];
            //place holder content
            array_unshift($this->placeholder_contents, $thing['placeholder_content']);


            $parsedAttrs=array();
            if(isset($thing['attrs'])){
                //parse attrs, borrowed from HamlTree::flattenThing tag
                foreach ($thing['attrs'] as $attr) {
                    foreach ($attr as $key => $v) {
                        $key_a = unserialize($key);
                        if (count($v) == 1 && isset($v[0]['text'])) {
                            $parsedAttrs[$key_a[0]['text']]=$v[0]['text'];
                        }
                        else{
                            $attr_builder = array();
                            foreach ($key_a as $value_item) {
                                if (array_key_exists('text', $value_item)) {
                                    //$attr_builder[] = var_export($value_item['text'], true);
                                    $attr_builder[] = $value_item['text'];
                                } elseif (array_key_exists('phpvalue', $value_item)) {
                                    $attr_builder[] = eval('return (' . $value_item['phpvalue'] . ');');
                                } else assert(false);
                            }

                            $value_builder = array();
                            foreach ($v as $value_item) {
                                if (array_key_exists('text', $value_item)) {
                                    //$value_builder[] = var_export($value_item['text'], true);
                                    $value_builder[] = $value_item['text'] ;
                                } elseif (array_key_exists('phpvalue', $value_item)) {
                                    $value_builder[] = eval('return (' . $value_item['phpvalue'] . ');');
                                } else assert(false);
                            }

                            $parsedAttrs[implode('',$attr_builder)]=implode('',$value_builder);

                        }



                    }
                }
            }

            try{
                $hamlTree = new HamlTreeWithSnip(Snip::getSnip($thing['name'],$parsedAttrs), $this->options, 'sniperr');
                $snipcontent = $hamlTree->childs;
            }
            catch (Exception $e){
                //TODO
                //return $this->pFail('parse snip wrong');
            }
            if(isset($snipcontent)){
                foreach ($snipcontent as $v) {
                    $this->flattenThing($v, $parent_tag);
                }
            }

            array_shift($this->placeholder_contents);
            $this->snipIndent = substr($this->snipIndent,0,-strlen($thing['ind']));
        }
        return false;
    }
    protected function flatten_placeholder(array $thing, $parent_tag){

        if (empty($this->placeholder_contents)){
            return 'flatten placeholder must be within snip';
        }
        if(isset($thing['name'])) {
            $content=d($this->placeholder_contents[0], $thing['name'],null);
        }else {
            $content=array_shift($this->placeholder_contents[0]);
        }

        if($content){ //maybe placeholder content not supplied
            foreach ($content as $v) {
                $this->flattenThing($v, $parent_tag);
            }
        }
        return false;
    }

    protected function rText($s, $quoted)
    {
        if ($quoted)
            $s = htmlentities($s, ENT_QUOTES, $this->options['encoding']);
        if (strpos($s, '<?') === false){

            //implement $this->snipIndent
            if(isset($s[0]) && $s[0]=="\n")
                $s="\n".$this->snipIndent.substr($s,1);

            $this->list[] = array('text' =>  $s);
        }
        else
            // <? breaks PHP so quote it by <? echo "...
            $this->rEchoPHP(var_export($s, true), false);
    }

    //for renderring snip seperately, clean data
    public function flatten()
    {
        parent::flatten();
        $this->list[]=array('php'=>"unset(HamlUtilitiesSnip::\$placeholder_contents['$this->tree_id'],HamlUtilitiesSnip::\$treeopts['$this->tree_id']);");
    }
}

//called by HamlUtilitiesSnip , for renderring snip seperately
class SnipTree extends HamlTreeWithSnip {

    protected $parentid;
    protected $snip_index;
    function __construct($s, $parentTreeId,$snip_index,$options, $filename, $parse = true)
    {
        $this->parentid=$parentTreeId;
        $this->snip_index=$snip_index;
        parent::__construct($s,$options,$filename,$parse);
    }
    protected function flatten_placeholder(array $thing, $parent_tag){

        if(isset($thing['name'])) {
            $content=HamlUtilitiesSnip::$placeholder_contents[$this->parentid][$this->snip_index][$thing['name']];
        }else {
            $content=array_shift(HamlUtilitiesSnip::$placeholder_contents[$this->parentid][$this->snip_index]);
        }

        foreach ($content as $v) {
            $this->flattenThing($v, $parent_tag);
        }
        return false;
    }
}
class Snip {

    protected static $snips=array();
    protected static $init=false;

    static function getSnip($name,$arg=array()){
        if(self::$init===false){
            self::initSnip();
        }
        if(isset(self::$snips[$name])){
            $snip=self::$snips[$name];
            if (gettype($snip)=='string')
                return $snip;
            elseif(is_callable($snip)){
                return $snip($arg);
            }
        }
        throw new Exception('not valid snip named'.$name);
    }

    private static  function initSnip(){
        foreach( explode(';',SNIP_FILES) as $____SNIP_file){
            //TODO:err handler, plz use a uniq name, like $__return
            include_once $____SNIP_file;
        }
        //unset($____SNIP_file);
        self::$snips=get_defined_vars();
        self::$init=true;
    }
}

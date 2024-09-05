<?php 
  $pagename = 'Kadu (Kadu) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font-family: 'kadu2'; font-size:20pt;   }
    kbd {color:black; font: serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
END;
  require_once('header.php');
?>
<p>
  This is an experimental keyboard for the Kadu language of Myanmar. It uses the Kadu script, which was invented around 2016. The Kadu script is not yet included in Unicode.
</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-phone' data-states='default numeric'>
</div>

<h2>Consonants</h2>
<table>
  <tr>
    <th>Glyph</th>
    <th>Phonetic</th>
    <th>PUA</th>
  </tr>
  <tr>
    <td><samp>&#x100000;</samp></td>
    <td>ka</td>
    <td>U+100000</td>
  </tr>
  <tr>
    <td><samp>&#x100001;</samp></td>
    <td>kha</td>
    <td>U+100001</td>
  </tr>
  <tr>
    <td><samp>&#x100002;</samp></td>
    <td>nga</td>
    <td>U+100002</td>
  </tr>
  <tr>
    <td><samp>&#x100003;</samp></td>
    <td>ca</td>
    <td>U+100003</td>
  </tr>
  <tr>
    <td><samp>&#x100004;</samp></td>
    <td>cha</td>
    <td>U+100004</td>
  </tr>
  <tr>
    <td><samp>&#x100006;</samp></td>
    <td>nya</td>
    <td>U+100006</td>
  </tr>
  <tr>
    <td><samp>&#x100007;</samp></td>
    <td>ta</td>
    <td>U+100007</td>
  </tr>
  <tr>
    <td><samp>&#x100008;</samp></td>
    <td>tha</td>
    <td>U+100008</td>
  </tr>
  <tr>
    <td><samp>&#x100009;</samp></td>
    <td>na</td>
    <td>U+100009</td>
  </tr>
  <tr>
    <td><samp>&#x10000A;</samp></td>
    <td>pa</td>
    <td>U+10000A</td>
  </tr>
  <tr>
    <td><samp>&#x10000B;</samp></td>
    <td>pha</td>
    <td>U+10000B</td>
  </tr>
  <tr>
    <td><samp>&#x10000C;</samp></td>
    <td>ma</td>
    <td>U+10000C</td>
  </tr>
  <tr>
    <td><samp>&#x10000D;</samp></td>
    <td>ya</td>
    <td>U+10000D</td>
  </tr>
  <tr>
    <td><samp>&#x10000F;</samp></td>
    <td>la</td>
    <td>U+10000F</td>
  </tr>
  <tr>
    <td><samp>&#x100010;</samp></td>
    <td>wa</td>
    <td>U+100010</td>
  </tr>
  <tr>
    <td><samp>&#x100011;</samp></td>
    <td>kya</td>
    <td>U+100011</td>
  </tr>
  <tr>
    <td><samp>&#x100012;</samp></td>
    <td>khya</td>
    <td>U+100012</td>
  </tr>
  <tr>
    <td><samp>&#x100013;</samp></td>
    <td>sha</td>
    <td>U+100013</td>
  </tr>
  <tr>
    <td><samp>&#x100014;</samp></td>
    <td>ha</td>
    <td>U+100014</td>
  </tr>
  <tr>
    <td><samp>&#x100030;</samp></td>
    <td>ra (loan words)</td>
    <td>U+100030</td>
  </tr>
  <tr>
    <td><samp>&#x100031;</samp></td>
    <td>(consonant for loan words)</td>
    <td>U+100031</td>
  </tr>
  <tr>
    <td><samp>&#x100032;</samp></td>
    <td>(voice changer symbol)</td>
    <td>U+100032</td>
  </tr>
</table> 

<h2>Vowels</h2>
<table>
  <tr>
    <th>Glyph</th>
    <th>Phonetic</th>
    <th>PUA</th>
  </tr>
  <tr>
    <td><samp>&#x100027;</samp></td>
    <td>a</td>
    <td>U+100027</td>
  </tr>
  <tr>
    <td><samp>&#x100028;</samp></td>
    <td>i</td>
    <td>U+100028</td>
  </tr>
  <tr>
    <td><samp>&#x100029;</samp></td>
    <td>u</td>
    <td>U+100029</td>
  </tr>
  <tr>
    <td><samp>&#x10002A;</samp></td>
    <td>e</td>
    <td>U+10002A</td>
  </tr>
  <tr>
    <td><samp>&#x10002B;</samp></td>
    <td>u</td>
    <td>U+10002B</td>
  </tr>
  <tr>
    <td><samp>&#x10002C;</samp></td>
    <td>ɔ</td>
    <td>U+10002C</td>
  </tr>
  <tr>
    <td><samp>&#x10002D;</samp></td>
    <td>o</td>
    <td>U+10002D</td>
  </tr>
  <tr>
    <td><samp>&#x10002E;</samp></td>
    <td>ə</td>
    <td>U+10002E</td>
  </tr>
  <tr>
    <td><samp>&#x10002F;</samp></td>
    <td>ʔ</td>
    <td>U+10002F</td>
  </tr>
  <tr>
    <td><samp>&#x100023;</samp></td>
    <td>í</td>
    <td>U+100023</td>
  </tr>
  <tr>
    <td><samp>&#x100024;</samp></td>
    <td>ì</td>
    <td>U+100024</td>
  </tr>
  <tr>
    <td><samp>&#x100025;</samp></td>
    <td>î</td>
    <td>U+100025</td>
  </tr>
</table> 

<h2>Tone Marks</h2>
<table>
  <tr>
    <th>Glyph</th>
    <th>Phonetic</th>
    <th>PUA</th>
  </tr>
  <tr>
    <td><samp>&#x100015;</samp></td>
    <td>high tone</td>
    <td>U+100015</td>
  </tr>
  <tr>
    <td><samp>&#x100016;</samp></td>
    <td>low tone</td>
    <td>U+100016</td>
  </tr>
  <tr>
    <td><samp>&#x100017;</samp></td>
    <td>mid tone?</td>
    <td>U+100017</td>
  </tr>
  <tr>
    <td><samp>&#x100018;</samp></td>
    <td>???</td>
    <td>U+100018</td>
  </tr>
  <tr>
    <td><samp>&#x100026;</samp></td>
    <td>???</td>
    <td>U+100026</td>
  </tr>
</table> 

<h2>Digits</h2>
<table>
  <tr>
    <th>Glyph</th>
    <th>Phonetic</th>
    <th>PUA</th>
  </tr>
  <tr>
    <td><samp>&#x100019;</samp></td>
    <td>0</td>
    <td>U+100019</td>
  </tr>
  <tr>
    <td><samp>&#x10001a;</samp></td>
    <td>1</td>
    <td>U+10001A</td>
  </tr>
  <tr>
    <td><samp>&#x10001b;</samp></td>
    <td>2</td>
    <td>U+10001B</td>
  </tr>
  <tr>
    <td><samp>&#x10001c;</samp></td>
    <td>3</td>
    <td>U+10001C</td>
  </tr>
  <tr>
    <td><samp>&#x10001d;</samp></td>
    <td>4</td>
    <td>U+10001D</td>
  </tr>
  <tr>
    <td><samp>&#x10001e;</samp></td>
    <td>5</td>
    <td>U+10001E</td>
  </tr>
  <tr>
    <td><samp>&#x10001f;</samp></td>
    <td>6</td>
    <td>U+10001F</td>
  </tr>
  <tr>
    <td><samp>&#x100020;</samp></td>
    <td>7</td>
    <td>U+100020</td>
  </tr>
  <tr>
    <td><samp>&#x100021;</samp></td>
    <td>8</td>
    <td>U+100021</td>
  </tr>
  <tr>
    <td><samp>&#x100022;</samp></td>
    <td>9</td>
    <td>U+100022</td>
  </tr>
</table> 
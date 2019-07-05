开发过程
====

```


1. 增加snip类型，用@作标志：

  1. 仿照pTag,　增加pSnippet;
  2. 在flatten中增加对 snippet类型的处理，调入并解析snip的内容
  
2. 为尽量少改写原作者代码，继承作者的HamlTree，新功能放在继承类里
3. 遇到问题：带变量的snip


	* 如果snip的属性带有变量，snip就应该在生成的php文件里调入，只有这样，用到的变量才能保证实时，也才能使用haml生成函数，如解析如下haml并传入参数$a:0 
- $a++;
- function plus1($arg){return $arg+1;}
@layout(len=#{plus1($a)})
片段@layout只有在生成的php文件中被调用，才能用到$a的更新值和函数plus1

	* 解决：增加属性$renderSnipSeperate，为真时，flatten片段时，不再调用snip，而是输出函数HamlUtilitiesSnip::renderSnipToFile, 此函数用来调用、解析snip并返回snip的输出内容。此函数会在生成的php文件运行时执行。


		* 新建一个继承类来实现
		* 难点：让snip生成的php，在母体php的作用域内运行，保证变量、函数等在同一空间：见haml-to-php的“亮点” 

	* 其它：


		* 占位符内容：在母体内获得，但在snip的解析时才使用，如何传递？存放到一个静态类的静态数组$placeholder_contents


			* 用母体HamlTree实例的id字符串作key
			* 记录下每个snip在数组中的索引号


$placeholder_contents的结构
[
     tree1:
          [
               snip1:[...],
               snip2:[...]
          ]
     tree2:
          [
               snip1:[...],
               snip2:[...]
          ]
]



	* 

	* snip生成的HamlTree，需要和母体HamlTree的$options一致，目前也是存放到一个静态数组
	* 占位符内容、$options的数据清除工作：在生成的php文件的最后进行
		* 代码：flatten()


```


其它问题 
=====

html文件关于缩进的美观问题
-----
描述：输出非ugly的html文件时，如何保证snip输出的html的缩进和外围保持一致？  
部分解决：引入属性$snipIndent 及相关操作，但不解决placeholder的缩进，且只对非$renderSnipSeperate的snip有效

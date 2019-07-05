haml-to-php

版本：更新于2013-01-01  
地址：https://github.com/MarcWeber/haml-to-php/tree/55c7a199a4b02cc942006ea96919302a85647d6c

轮廓
====

核心代码　// 《。。。》中的的，表示他们提供便捷功能而非核心
------------

```
HamlTree 
 *  ->__construct : haml字串 → 树结构
 *  ->toPHP :
          - 树结构 → php文件字串
          - 《树结构 → 函数：用来直接输出php文件字串的运行结果》

Haml
* ->$options 解析haml时的选项 //似乎该并入HamlTree
* 《->hamlToPHP 创建HamlTree实例，生成php文件字串；》
     - 没有直接调用HamlTree, 而是用了HamlUtilities的便捷函数hamlToPHPStr

HamlUtilities 生成的php文件用到的工具函数，大概三类
1. 生成某种html字串　如 renderClassItems
2. 过滤器函数
3. 《便捷函数》
　* hamlToPHPStr 把haml文件字串解析成php文件字串
　* runTemplate 运行php文件，返回输出结果；可向php文件提供变量

```

便捷功能
--------
HamlFileCache->haml  解析haml目录内的haml文件　输出为cache目录内的php文件　并返回php文件的输出内容


解析原理
====
代码：HamlParser > HamlTree 


解析核心(HamlParser)：匹配功能的实现
```
1. $this->o 代表目前要从haml字串的哪个位置开始匹配；若某个字符串模式或正则成功匹配了len长的字符串，则$this->o+=len

	* 代码：str reg pStr pReg


2.  有些匹配类型，是由基本匹配(字符串或正则匹配)增强或组合而成的

	1. pApply 若匹配成功，eval代码
	2. pError 若匹配失败，抛出错误     
	3. pChoice 匹配其中某个模式
	4. pSequence 连续匹配若干模式，若匹配成功，eval代码或返回第n次匹配的结果
	5. pMany 某个模式匹配0-n次
	6. pMany1 某个模式匹配1-n次


3. 核心的辅助函数

	* p 调用某个匹配函数
	* pOk 若某个匹配成功了，用此函数包装一下
	* pFail 若某个匹配失败了，用此函数包装一下；此函数不如pOk应用到了很多匹配类型中
	* rOk 判断某个匹配是否成功了，判断是标准是：是否用pOk包装过
	* 

```


具体实现：匹配haml元素(HamlTree)
```

	* pTag 匹配tag
		1. 匹配缩进字符串 
		2. 匹配标签类型　如div li form
		3. 匹配属性
		4. 匹配：=php表达式　或　子元素　或　同行文本
	* 
。。。

```

解析结果：是个树结构  
haml的一级元素，成为HamlTree实例的childs属性的元素　(childs是数组类型)  
一级元素的儿子，成为这些元素的childs属性的元素



解析结果变成php代码：toPHP
====

```
	1. flatten:把树结构变成单维数组　储存到list属性

		* flatten是分析一个节点的信息，化为一个个php文件的片段:

			* 如果是html类型，用rText
			* 是php类型，用rPHP 或 rEchoPHP
	2. phpRenderer：把list数组化为字符串

		1. php类型，用<?php 。。。?>包裹
		2. phpecho类型 用<?php echo ...?>包裹
		3. text类型，不用包裹

```


亮点
====

调用一个由html和php混合的php文件，要使用当前作用域的变量，并得到文件的输出结果(即echo而非return的结果)，怎么办？

	* 方法：ob + include
	* 原理：一个php文件中的html代码，效果等同于在php代码中使用 echo


↓  
若得到的不是一个php文件，而是一个php文件字串，有必要一定要先写入到文件里吗？  
没必要，见HamlTree::funcRenderer  
原理不变，还是对标志 <?php ..?>的理解


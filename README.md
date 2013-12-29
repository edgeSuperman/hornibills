hornibills
==========

##什么是犀鸟?

犀鸟是一个在线文档系统，致力于快速解决团队内部接口文档的编写和沉淀。

力求用最简单的方式部署您的文档系统，拥有最方便的文档管理。

一些想法借鉴了[iodocs](http://github.com/mashery/iodocs)

##犀鸟如何部署？

犀鸟采用**bootstrap**+**angularjs**+**php**开发。

获取源文件，部署到您支持php的webserver的可访问目录即可。

enjoy!


##常见问题
###如何解决版本问题？

每次修改动作触发后，都会在**data/**目录下留下修改文件的一个快照。

例如：**data/type[2013-12-29]1388326575.json**，适当人工就可以操作一次回滚，或者diff下有啥修改。

###我有很多现成的接口在word里，我如何快速弄到犀鸟里?

犀鸟没有db，所有接口在**data/各种.json**里维护。

**data/type.json**是一个特殊的json，里面存储的是您接口的分类，格式简单

```javascript

[{"name":"notes模块文档","href":"notes","description":"123"},...]
```
其中href是当前分类的类似主键的东西。

那么**data/notes.json**对应此分类，维护此分类下的所有接口，样例如下:

```javascript

[
    {
        "name": "一个接口的名字",
        "url": "该接口的url",
        "method": "POST",
        "description": " 接口的描述",
        "params": [
            {
                "Name": "param_1_name",
                "Required": "Y",
                "Default": "",
                "Type": "string",
                "Description": "Description of the first parameter."
            },
            {
                "Name": "userId",
                "Required": "Y",
                "Default": "",
                "Type": "string",
                "Description": "The userId parameter that is in the URI."
            }
        ],
        "response": [
            {
                "Name": "param_1_name",
                "Required": "Y",
                "Default": "",
                "Type": "string",
                "Description": "Description of the first parameter."
            },
            {
                "Name": "userId",
                "Required": "Y",
                "Default": "",
                "Type": "string",
                "Description": "The userId parameter that is in the URI."
            }
        ],
        "demo": "<?php \n\r var_dump(123);"
    }
]

```

聪明的你一定已经看明白了，你可以自行写一个程序，跑下你之前的接口格式，跑成这样的json文件就可以了。



